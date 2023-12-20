<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Showadmin;
use App\UserData;
use App\UserBankDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Terms;
use App\Refund;
use App\Gamesrules;
use App\Privacy;
use Alert,Session;
use App\Models\Configuration;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    public $successStatus = 200;

    public function login(Request $request){
		echo $request->referral_code;
        /*Log::info($request);
        if(Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')])){
            return view('home');
        }
        else{
            return Redirect::back ();
        }*/
    }
    
     public function changePwdWithOtp(Request $request){
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'otp' => 'required',
            'password' => 'required',
        ]);
		$mobile   = $request->mobile;
		$otp      = $request->otp;
		$password = $request->password;
        $user     = User::where('mobile', $mobile)->where('otp', $otp)->first();
	    if($user) {
			Auth::login($user, true);
    		$user->password          = $request->password;
    		$user->save();
			Alert::success('','Password change successfully');
           	if($user->user_type==1){
    			return redirect('/admin/dashboard');
			}elseif($user->user_type==2){
    			return redirect('/user/dashboard');
    		}else{
				return redirect('/employee/dashboard');
			}
        }else {
			Alert::error('','Mobile and password not matched. Try again');
			return redirect()->route('forgotpwd');
        }
    }
  public function privacypolicy()
  {
      $privacy = Privacy::first();
      return view('privacy-policy' , compact('privacy'));
  }
   public function termsAndConditions()
  {
      $terms = Terms::first();
      return view('terms-and-conditions' , compact('terms'));
  }
   public function refundAndCancelltion()
  {
      $refund = Refund::first();
      return view('refund-and-cancelltion' , compact('refund'));
  }
  	public function rules(){
  	    $rules = Gamesrules::first();
		return view('user.rules', compact('rules'));
	}
public function testapi()
{
    	return view('apitest.index');
}
public function createapi(Request $request)
{
    // var_dump("hello");die();
        $token = "8105a8-2297d1-44468a-7c4420-7ff2f8";    // Your Api Token https://upiapi.in/APIKeys
        $inputdata =  request()->all();
        $post = json_encode([
            "token" => $token,
            "orderId" => 'ORD'.time(),
            "txnAmount" => 1,
            "txnNote" => "test",
            "customerName" => $inputdata['customerName'],
            "customerEmail" => $inputdata['customerEmail'],
            "customerMobile" => $inputdata['customerMobile'],
            "callbackUrl" => "https://lionkingludo.com//response"
        ]);
            // var_dump($post);die();
         $curl = curl_init();
        //  var_dump($curl);die();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://upiapi.in/order/create',
            CURLOPT_SSL_VERIFYPEER => false,  
            CURLOPT_SSL_VERIFYHOST => false, 
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));


        // $callbackurl = "https://localhost/apitest/response.php"; 
        echo $response = curl_exec($curl);
        $err = curl_error($curl);
        var_dump($err);die();
        // var_dump($response);die();
        curl_close($curl);

        $result = json_decode($response, true);
        if ($result['status'] == true) {
            echo '<script>location.href="' . $result['result']['payment_url'] . '"</script>';
            exit();
        }

        echo '<div class="alert alert-danger">' . $result['message'] . '</div>';
}
public function respose()
{
    $secret = "cmhpBb04hZXVihp7";
        // var_dump($secret);die();
         $inputdata =  request()->all();
         if(isset($inputdata['status'])){	
            $decrypt = openssl_decrypt($_POST['hash'],"AES-128-ECB",$secret);
            $response = json_decode($decrypt,true);
            // var_dump($response);die();
        }
}

    public function loginWithOtp(Request $request ){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required',
        ]);
        
		$mobile = $request->mobile;
		$password = $request->password;


        
        // for checking user is  blocked or not 
       
        $user = User::where('mobile', $mobile)->where('password', $password)->where('is_blocked',1)->first();
       
        
        if($user)
      {
         Alert::error('','Account is Blocked !!');
			return redirect()->route('login'); 
      }
    
        $user1 = User::where('mobile', $mobile)->where('password', $password)->first();
    //   var_dump($user1);die();
	    if($user1 == true) {
	               //var_dump("hello");die();

			Auth::login($user1, true);
           	if($user1->user_type==1){
    			return redirect('/admin/dashboard');
			}elseif($user1->user_type==2){
    			return redirect('/user/dashboard');
    		}else{
				return redirect('/employee/dashboard');
			}
        }
        elseif($user1 == false)
        {
           $user2 = Showadmin::where('mobile', $mobile)->where('password', $password)->first();
       
           if($user2)
           {
    			return redirect('/admin/dashboard');
		
           }
           	else
			{
			Alert::error('','Mobile and password not matched. Try again');
			return redirect()->route('login');
			}
        }
       
        
        
      }
    


    public function registerform(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'mobile'   => 'required|min:10',
            // 'password' => 'required',
            'dob'      => 'required',
            // 'email'    => 'required|email',
            // 'password_confirmation' => 'required|same:password',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
		$mobile = $request->mobile;
        $user = User::where('mobile', $mobile)
            // ->orWhere('email',  $request->email) // Assuming $mobile can hold both mobile and email
            ->first();
	    if($user) {

			// Alert::error('','');
			return back()->with('error','Mobile Number already registered');
        }else {
            
            $formData =  $request->all();
            if(isset($formData['_token'])){
                unset($formData['_token']);
            }

            if($request->referred_by != null){
               $refercodeCheck = User::where('referral_code',$request->referred_by)->first();
               if($refercodeCheck == null){
                return back()->with('error','Enter your referral code invalid, please check it.');
               }
            }

            $formData['otp'] = $this->sendOtpRegister($mobile);
            Session::put("registerData",$formData);
			
            return redirect('/verifyotp');
        }
    }


    public function sendOtpRegister($mobile=null){
        // return 654321;
       $fields = array(
    "variables_values" => rand(000000,999999),
    "route" => "otp",
    "numbers" => $request->mobile,
);
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: JGREhceIwuin4ZXdklFVxWCsTrtNvob21YS7Q5zOfMBpUKa3g9VtB6ncpHd8Q4Req5PTGj2xO9ogNh3E",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
   return $otp;
  
}
    }


    public function sendOtp(Request $request){
        
        
        
        
    $fields = array(
    "variables_values" => rand(000000,999999),
    "route" => "otp",
    "numbers" => $request->mobile,
);
	$user  = User::where('mobile', $fields['numbers'])->first();
	 if($user){
	    } else {
	         return redirect()->route('register');
	    }
        User::where('mobile','=',$request->mobile)->update(['otp' => $fields['variables_values']]);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: JGREhceIwuin4ZXdklFVxWCsTrtNvob21YS7Q5zOfMBpUKa3g9VtB6ncpHd8Q4Req5PTGj2xO9ogNh3E",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $numbers = $fields['numbers'];
  return view('auth.verifyotp',compact('numbers'));
}

    }

    public function verifyotp(Request $request)
    {
       
        $numbers = $request->mobile;
        
        // if($request->isMethod("POST")){
            $userInfo =  Session::get("registerData");
            // echo"<pre>";print_r($userInfo);die;
            // var_dump($userInfo);die();
            $user = User::where('mobile', $request->mobile)->first();
            
            
            // if($userInfo == null && $user == null){
            //     return redirect()->route('register');
            // }
            if($userInfo == null && isset($user))
            {
               if($user['otp'] == $request->otp)
            {
                $user = User::where('mobile', $numbers)->where('is_blocked',1)->first();
            	        if($user)
                  {
                     Alert::error('','Account is Blocked !!');
            			return redirect()->route('login'); 
                  }
                  else{
                    // Event::listen('auth.login', function() {
                        // Session::set('last_login', date("Y-m-d H:i:s"));
                    // });
                    // Session::put('last_login', date("Y-m-d H:i:s"));
                    $user = User::where('mobile', $numbers)->first(); 
                    Session::put('last_login', date("Y-m-d H:i:s"));                  
                    $user['last_logged_in_at']  = date("Y-m-d H:i:s");
                   
                    // dd(Session::get('last_login'));die();
                    $user->save();
                    $user = User::where('mobile', $numbers)->first();
                    Auth::login($user, true);
                       	if($user->user_type==1){
                			return redirect('/admin/dashboard');
            			}elseif($user->user_type==2){
                            
                			return redirect('/user/dashboard');
                		}elseif($user->user_type==3)
                		{
                		   return redirect('/admin/dashboard');
                		}
                		else{
            				return redirect('/employee/dashboard');
            			}
                        Auth::login($user, true);
                        return redirect('/');

                  }

                    }
                    else
                    {
                        $Data['numbers'] = $numbers;
                        $Data['msg'] = "OTP not matched";
                        return view('auth.verifyotp',compact('Data'));
                    }
            	
            }
           
            
            elseif($user == null && isset($userInfo))
            {
                if($userInfo['otp'] == $request->otp){
                $vplay_id      = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5).rand(111,999);
                $referral_code = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 2)), 0, 2).substr($userInfo['mobile'], -4);

                $user                  = new User;
                $user['vplay_id']      = $vplay_id;
                $user['mobile']        = $userInfo['mobile'];
                // $user['email']        = $userInfo['email'];
                $user['dob']        = $userInfo['dob'];
                $user['name']          = $userInfo['name'];
                // $user['password']      = $userInfo['password'];
                $user['reffered_by']   = $userInfo['referred_by'];
                $user['user_type']     = '2';
                $user['referral_code'] = $referral_code;
                $user['last_logged_in_at']  = date("Y-m-d H:i:s");
                $user->save();

                $user_id               = $user->id;
                $user_data             = new UserData;
                $user_data['user_id']  = $user_id;
                $user_data['vplay_id'] = $vplay_id;
                $user_data->save();

                $user_bank             = new UserBankDetail;
                $user_bank['user_id']  = $user_id;
                $user_bank->save();
                
                Auth::login($user, true);
                return redirect('/');
            }
            }
            
            
            else{
                return redirect()->route('register');
            }
    
        return view('auth.verifyotp');
        
    }

	public function referralLoginForm(Request $request)
    {
        $refercode = $request->input('refercode');
        return view('auth/register', compact('refercode'));
    }
	public function loginWithOtpForm(){
		 return view('auth/OtpLogin');
	}
	public function register(Request $request){
		$refercode = '';
        return view('auth/register', compact('refercode'));
	}
	public function forgotpwd(){
		 return view('auth/forgotpwd');
	}
	public function loginWithOtpForm1(){
		 return redirect("/referral");
	}
    public function logout()
    {
        
    }
	public function info_conditions(){
		return view('user.info_conditions');
	}
}
