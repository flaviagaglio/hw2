<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class RegisterController extends Controller {


  


        protected function create()
        {
            $request = request();
           
            if(($exist = User::where('username', $request['username'] )->exists())==NULL){
           
                $newUser =  User::create([
                'username' => $request['username'],
                'password' => $request['password'],
                'surname' => $request['surname'],
                'name' => $request['name'],
                'email' => $request['email'],
              
                ]);
                if ($newUser) {
                    Session::put('user_id', $newUser->id);
                    return view('index');
                } 
                else {
                    return redirect('index')->withInput();
                }
            }                return back()->with('error','Username già presente');   
        }
      
            
        
    
     
      
    
        
    
        public function index() {
            return view('register');
        } 
    
    }
    ?>

