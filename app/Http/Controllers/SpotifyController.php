<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

use App\Models\User;
use Session;

class SpotifyController extends Controller
{
    // VISTA

    public function index() {
        $user = User::find(session('user_id'))->first();
        return "view('home')->with('user', $user)";
    }

    


 
       function search($search) {   
        if(!session::get('user_id')){
            return redirect('login');
        }     
    
        $client_id='742f4e9bd5bc495f844966e6e24258de';
        $client_secret='e3433552b7de48e79a78363fea6bc44b';
 
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://accounts.spotify.com/api/token');
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
        $headers = array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret));
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        $token = json_decode($result)->access_token;
        $data = http_build_query(array('q' => $search, 'type' => 'track'));
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.spotify.com/v1/search?'.$data);
        $headers = array('Authorization: Bearer '.$token);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
       return $result;
        
 }
}
    
  
?>