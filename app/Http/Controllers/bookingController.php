<?php

namespace App\Http\Controllers;

use App\Models\booking_orders;
use App\Models\booking_history;
use App\Models\facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookingController extends Controller
{
    public function index(Request $request){
        $query = booking::with('facility');

        $search = $request->input('search');
        if ($search) {
            $bookings = booking::where('name', 'like', "%{$search}%")->paginate(5);
        } else {
            $bookings = booking::paginate(5);
        }
        return view('bookings.index', compact('bookings'));
    }

    public function create(){
        $facilities = Facility::all();
        return view('bookings.create', compact('facilities'));
    }

    public function store(Request $request){
        $user_id = Auth::user()->account_id;

        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'facility' => 'required'
        ]);

        $data=[
          "account_id" => $user_id,
          "facility_id" => $request->facility,
          "tanggal_booking"=>$request->tanggal,
          "Agenda"=>$request->feedback
        ];

        booking_orders::create($data);

        return redirect()->route('user')->with('succes','Complete Add');

    }

    public function edit($id)
{
    $BookID= booking_orders::find($id); // Asumsikan Facility adalah model untuk tabel fasilitas
    return view('/authorized/User/editBooking', compact("BookID"));
}


    public function update(Request $request,$id){
        $request->validate([

            'tanggal'=>'required|date',
        ]);
        $booking= booking_orders::find($id);
        $booking->TanggalReservasi = $request->tanggal;
        $booking->save();

        return redirect()->route('user.history')->with('succes', 'bookings has been new generate');
    }

    public function destroy($id){
        $booking = booking_orders::find($id);
        $booking->delete();

        return redirect()->route('user.history')->with('succes', 'booking delete');
    }

    public function show(booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    public function confirm($id)
    {
        $booking = booking_orders::find($id);
        $booking->status = "Approved";
        $booking->save();
        booking_history::create(["booking_order_id" => $booking->booking_order_id]);

        return redirect()->route('admin.confirm')->with('success', 'booking berhasil dikonfirmasi');
    }

    public function unconfirm($id)
    {
        $booking = booking_orders::find($id);
        $booking->status = "Rejected";
        $booking->save();
        booking_history::create(["booking_order_id" => $booking->booking_order_id]);

        return redirect()->route('admin.confirm')->with('success', 'Konfirmasi booking berhasil dibatalkan');
    }

    public function history()
    {
        $bookings = booking::onlyTrashed()->paginate(5);
        return view('bookings.history', compact('bookings'));
    }
}
