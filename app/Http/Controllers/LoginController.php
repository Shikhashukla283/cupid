<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use App\Models\Users;



class LoginController extends Controller
{
    public function AdminLogin(Request $request)
    {
       
       if(Session::has('CS_ADMIN')){
          //return redirect()->route('dashboard');    
      }
       return view('Auth.login');
    }
    public function adminLoginCheck(Request $request)
    {	
        //print_r($request);
  	    $email = $request->email;
        $password = $request->password;
        $adminLoginCheck = Users::where('email','=',$email)->first();
        if($adminLoginCheck){
      if (Hash::check($password, $adminLoginCheck->password)) {

          //if ($password==$adminLoginCheck->password) {
            Session::put('CS_ADMIN', $adminLoginCheck);
            Session::save();
            $response = [
                'message' => 'ok'
              ];
          }
          else{
              $response = [
                'message' => 'failed'
              ];
          }
        }else{
            $response = [
                'message' => 'failed'
              ];
        }
        return response()->json($response);
     }
    public function logout(Request $request)
      {	
     	Session::forget('CS_ADMIN');
     	return redirect()->route('adminLogin')->withErrors("logged out.");
      }


}