<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use Validator;
use App\Models\Users;

class DashboardController extends Controller
{
  public function index(Request $request)

	  {

 //print_r($request->all()); 
 $arypost= $request->all();
 //echo $request->expected_income;
 //$arypost->expected_income!='' ||  $arypost->manglik!='' || $arypost->familytype!='' || $arypost->gender!=''
 if((isset($request->expected_income) && $request->expected_income!='') || (isset($request->manglik) && $request->manglik!='') || (isset($request->familytype) && $request->familytype!='') || (isset($request->gender) && $request->gender!='')){
  echo "ss";

echo $ic=$request->expected_income;
$income=explode('-',$ic);
print_r($income);

$user1st = Users::where([['gender',$request->gender],['family_type',$request->partner_family_type],['gender',$request->gender],['manglik',$request->manglik],['annual_income','>',$income[0]],['annual_income','<',$income[1]]])->get();
$value = $request->session()->get('CS_ADMIN');


 }else{   
$value = $request->session()->get('CS_ADMIN');

if($value->email=='admin@gmail.com'){
$user1st = Users::where('email','!=','admin@gmail.com')->get();

}else{
if($value->gender==1){
  $pgender=2;
}else{
  $pgender=1;
}
      $user1st = Users::where([['gender',$pgender],['family_type',$value->partner_family_type],['occupation',$value->partner_occupation],['manglik',$value->partner_manglik]])->orderBy('annual_income', 'DESC')->get();


            //$userst = Users::where('gender',$pgender)->get();
}
  
 }     return view('dashboard',compact('user1st','value'));

      }
      


      
}
