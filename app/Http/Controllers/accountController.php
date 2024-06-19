<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class accountController
{
    //
    function edit(Request $request){

      $account =Account::find(Auth::user()->account_id);


      $request->validate([
        "Full_name" => "required",
        "Faculty" => "required",
        "Majoring"  => "required",
        "Angkatan" => "required",
        "email" => "required|email",
        "Number_phone" => "required|min:10"
      ]);

      if($account->photo != null){
        Storage::disk('public')->delete($account->photo);
      }
      $path = $request->file('file')->store('uploads', 'public');
      $Data = array_slice($request->all() , 1, 6);
      $account->photo = $path;
      $account->update($Data);
      $account->save();
      return redirect()->route('user')->with('success', 'Data Profile berhasil diperbarui.');
  }

    function ChangePass(Request $request){
      $account = Account::find(Auth::user()->account_id);
      $request->validate(
        [
          "newpw"=>"required|min:8",
          "cnfrm"=>"required|same:newpw"
        ]
      );

      $account->password = bcrypt($request->newpw);
      $account->save();
        return redirect()->route('user')->with('success', 'Password berhasil diperbarui.');
    }

}
