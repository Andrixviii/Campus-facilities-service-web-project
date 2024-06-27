<?php

namespace App\Http\Controllers;

use App\Models\booking_orders;
use App\Models\booking_history;
use App\Models\facility;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookingController extends Controller
{



    public function store(Request $request){

        $user_id = Auth::user()->account_id;

        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'facility' => 'required'
        ]);

        $data=[
          "account_id" => $user_id,
          "facility_id" => $request->facility,
          "tanggal_reservasi"=>$request->tanggal,
          "Agenda"=>$request->feedback
        ];

        booking_orders::create($data);

        return redirect()->route('user')->with('succes','Complete Add');

    }

    public function edit($id){
    $BookID= booking_orders::find($id); // Asumsikan Facility adalah model untuk tabel fasilitas
    return view('/authorized/User/editBooking', compact("BookID"));
    }


    public function update(Request $request,$id){
        $request->validate([

            'tanggal'=>'required|date',
        ]);
        $booking= booking_orders::find($id);

        $new_data = [
          "tanggal_reservasi" => $request->tanggal,
          "Agenda"=>($booking->Agenda),
          "facility_id"=>$booking->facility_id,
          "account_id"=>$booking->account_id
        ];
        booking_orders::create($new_data);
        return redirect()->route('user.history')->with('succes', 'bookings has been new generate');
    }

    public function destroy($id){
        $booking = booking_orders::find($id);
        $booking->delete();

        return redirect()->route('user.history')->with('succes', 'booking delete');
    }

    public function show($id)
    {   $Facility = facility::all();
        return view('/authorized/user/TransactionForm', compact('Facility','id'));
    }

    public function confirm($id)
    {
        $booking = booking_orders::find($id);
        $other_booking = DB::table('booking_orders')->select('booking_order_id')
                                                    ->where('Agenda','=',$booking->Agenda,'and')
                                                    ->where('booking_order_id','!=',$id, 'and')
                                                    ->where('status','!=',"Waiting for Approval")
                                                    ->first();
        if($other_booking != null){
          $other_booking_data = booking_orders::find($other_booking->booking_order_id);
          $booking->status = "Approved";
          $booking->save();
          $other_booking_data->delete();
          DB::table('booking_history')->delete('*')->where('booking_order_id','=',$other_booking->booking_order_id);
          booking_history::create(["booking_order_id" => $booking->booking_order_id]);
        }

        else{
          $booking->status = "Approved";
          $booking->save();
          booking_history::create(["booking_order_id" => $booking->booking_order_id]);
        }


        return redirect()->route('admin.confirm')->with('success', 'booking berhasil dikonfirmasi');
    }

    public function unconfirm($id)
    {
        $booking = booking_orders::find($id);
        $other_booking = DB::table('booking_orders')->select('booking_order_id')
                                                    ->where('Agenda','=',$booking->Agenda,'and')
                                                    ->where('booking_order_id','!=',$id, 'and')
                                                    ->where('status','!=',"Waiting for Approval");

        if($other_booking != null){
          $booking->delete();
        }

        else{
          $booking->status = "Rejected";
          $booking->save();
          booking_history::create(["booking_order_id" => $booking->booking_order_id]);
        }


        return redirect()->route('admin.confirm')->with('success', 'Konfirmasi booking berhasil dibatalkan');
    }

}
