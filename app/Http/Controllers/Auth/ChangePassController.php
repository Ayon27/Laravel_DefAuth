<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChangePassController extends Controller
{
    public function index()
    {
        return view('auth.passwords.change');
    }

    public function update(Request $req) {
        $this->validate($req, [
            'newPassword' => 'required|confirmed',
            'passwordConfirm' => 'requried'
        ]);

        if(true) {
            $user = User::find(Auth::id());
            $user->password = $req->newPassword;
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('msg', "Password changed successfully. login again");
        }
    }
}
