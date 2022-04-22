<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use Validator;
use App\Models\Users;

class RegistrationController extends Controller
{
  public function index(Request $request)
	  {
      //$value = Users::where('staff_id',$session->staff_id)->first();

      return view('registration');


      }
      public function registrationprocess(Request $request)
      {

                $aryPostData = $request->all();
                print_r($aryPostData);
                $postobj = Users::where('email',$aryPostData['email'])->first();
        if($postobj['email']!=''){

        }
          else{
            $postobj = new Users;
          
          
        
        $postobj->first_name = $aryPostData['fname'];
        $postobj->last_name = $aryPostData['lname'];
        $postobj->email = $aryPostData['email'];
        $postobj->password =  Hash::make($aryPostData['password']);
        $postobj->dob = $aryPostData['dob'];
        $postobj->gender = $aryPostData['gender'];

        $postobj->annual_income = $aryPostData['income'];
        $postobj->occupation = $aryPostData['occupation'];
        $postobj->family_type = $aryPostData['familytype'];
        $postobj->manglik = $aryPostData['manglik'];
        $postobj->expected_income = $aryPostData['expected_income'];
        $postobj->partner_occupation = $aryPostData['partner_occupation'];
        $postobj->partner_family_type = $aryPostData['partner_familytype'];
        $postobj->partner_manglik = $aryPostData['partner_manglik'];
        //$postobj->updated_at = '';
        //$postobj->created_at = '';
}

        
if($postobj->save())    
        {
            return redirect()->route('register')->with('status', 'Entry Saved Successfully.');   
        }else{
            return redirect()->route('register')->with('error', 'Server Not Responed');
        }




        
  
  
        }


      
}
