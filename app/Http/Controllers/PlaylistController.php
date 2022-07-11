<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Session;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class PlaylistController extends Controller
{

   public function home () {   
        if(!session::get('user_id')){
            return redirect('index');
        }
        $user= User::find(Session:: get('user_id'));
        return view('home')->with('username',$user->username);     
}
public function add($titolo){
    if(!session::get('user_id')){
        return redirect('index');
    }
   
    $song= new playlist;
    $song->username= Session:: get('user_id');
    $song->titolo= $titolo;
    $song->save();
    return $song;
    }


public function view(){
    $username= session::get('user_id');
        if(!session::get('user_id')){
            return redirect('index');
        }
            $song=Playlist::where('username', $username)->get();

      
        return $song;
        }

public function index() {
    if(session('user_id') != null) {
        return view("home");
    }
    else {
        return view('index');
         }
}


public function remove($titolo){
    if(!session::get('user_id')){
        return redirect('index');
    }
   $song= Playlist:: find($titolo);
   $song->delete();
   return $song;
    }
}
?>