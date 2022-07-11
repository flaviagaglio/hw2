<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function login() {
        if(session('user_id') != null) {
            return redirect("home");
        }
        else {
            return view('index')
            ->with('csrf_token', csrf_token());
        }
     }

     public function checkLogin() {
         $user = User::where('username', request('username'))->where('password', request('password'))->first();
         if($user !== null) {
             Session::put('user_id', $user->id);
             return redirect('home');
         }
         else {
            return back()->with('error','Credenziali errate');         }
     }

     public function logout() {
         Session::flush();
         return redirect('index');
     }
   

}
?>