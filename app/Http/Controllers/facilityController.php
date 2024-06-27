<?php

namespace App\Http\Controllers;

use App\Models\facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class facilityController extends Controller
{


    public function edit($id)
    {
        $facilityid = facility::find($id);
        return view('/authorized/Admin/EditMenu', compact('facilityid'));
    }

    public function update(Request $request, $id)
    {
        $facility=facility::find($id);

        $request->validate([
            'facility' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'desc' =>'required'
        ]);

        if($facility->photo != null){
            Storage::disk('public')->delete($facility->photo);
        }


        //$filename = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('uploads', 'public');

        $data=[
          'nama_fasilitas'=>$request->facility,
          'Deskripsi'=>$request->desc,
          'photo'=>$path
        ];
        $facility->update($data);
        $facility->save();
        return redirect()->route('admin')->with('success', 'Facility berhasil diperbarui.');
    }

}
