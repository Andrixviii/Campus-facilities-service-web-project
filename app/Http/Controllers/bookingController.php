<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Facility;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function index(Request $request){
        $query = Booking::with('facility');
        
        $search = $request->input('search');
        if ($search) {
            $bookings = Booking::where('name', 'like', "%{$search}%")->paginate(5);
        } else {
            $bookings = Booking::paginate(5);
        }
        return view('bookings.index', compact('bookings'));
    }

    public function create(){
        $facilities = Facility::all();
        return view('bookings.create', compact('facilities'));
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'booking_date' => 'required|date',
            'facility_id' => 'required|exists:facilities,id',
        ]);
        Booking::create($validatedData);

        return redirect()->route('bookings.index')->with('succes','Complete Add');

    }

    public function edit(Booking $booking)
{
    $facilities = Facility::all(); // Asumsikan Facility adalah model untuk tabel fasilitas
    return view('bookings.edit', compact('booking', 'facilities'));
}


    public function update(Request $request, Booking $booking){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'booking_date'=>'required|date',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('succes', 'Bookings has been new generate');
    }

    public function destroy(Booking $booking){
        $booking->delete();

        return redirect()->route('bookings.index')->with('succes', 'Booking delete');
    }

    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }
    
    public function confirm($id)
    {
        $booking = Booking::find($id);
        $booking->confirmed = true;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil dikonfirmasi');
    }

    public function unconfirm($id)
    {
        $booking = Booking::find($id);
        $booking->confirmed = false;
        $booking->save();

        return redirect()->route('bookings.index')->with('success', 'Konfirmasi booking berhasil dibatalkan');
    }

    public function history()
    {
        $bookings = Booking::onlyTrashed()->paginate(5);
        return view('bookings.history', compact('bookings'));
    }
}
