<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_info = User::where('id',auth()->user()->id)->first();
        return view('home',compact('user_info'));
    }

    public function verifyMobileOTP(Request $request)
    {
        $otp = $request->otp;

        if($otp == 4321){

            // APi call
            User::where('id',auth()->user()->id)->update(['mobile_verify_status' => 1]);
            return back()->with('message','Mobile No. Verify Successfully');
        }
        else{
            return back()->with('message','Invalid otp!');
        }
        return back()->with('message','');
//        return view('home');
    }

    public function verifyEmailOTP(Request $request)
    {
        $otp = $request->otp;

        if($otp == 4321){

            // APi call
            User::where('id',auth()->user()->id)->update(['email_verify_status' => 1]);
            return back()->with('message1','Email Verify Successfully');
        }
        else{
            return back()->with('message1','Invalid otp!');
        }
        return back()->with('message1','');
    }

    public function sendAadhaarOTP(Request $request)
    {
        $aadhaar_number = $request->aadhaar_number;

        if($aadhaar_number){
            // APi call
//            User::where('id',auth()->user()->id)->update(['aadhaar_verify_status' => 1]);
            return back()->with('enable_otp_div',1);
        }
        else{
            return back()->with('message','Aadhaar Number Required!');
        }
        return back()->with('message','');
//        return view('home');
    }

    public function verifyAadhaar(Request $request)
    {
        $otp = $request->otp;

        if($otp == 4321){

            // APi call
            User::where('id',auth()->user()->id)->update(['aadhaar_verify_status' => 1]);
            return back()->with('message','Aadhaar Verify Successfully');
        }
        else{
            return back()->with('message','Invalid otp!');
        }
        return back()->with('message','');
//        return view('home');
    }





    // userinfostore

    public function userinfostore(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'name' => 'required|string',
            'address1' => 'required|string',
            'address2' => 'required|string',
            'district' => 'required',
            'state' => 'required|string',
            'pincode' => 'required|numeric|min_digits:6',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|min:11',
        ]);


//print_r($request->all());exit();

        if ($validator->fails()) {
//            return response()->json([
//                'success' => false,
//                // 'thumbnail_size'=>$request->file('thumbnail'),
////                    'tiny_home_images'=>$request->file('tiny_home_images'),
////                    'tiny_home_images_size'=>$getarr_imgs,
//                "message" => $validator->errors()->first(),
//            ], 500);

            return back()->with('message_user_info',$validator->errors()->first());
        }


        $userinfo = User::find(auth()->user()->id);
        $userinfo->name1 = !empty($request->name) ? $request->name : '' ;
        $userinfo->address1 = !empty($request->address1) ? $request->address1 : '' ;
        $userinfo->address2 = !empty($request->address2) ? $request->address2 : '' ;
        $userinfo->district1 = !empty($request->district) ? $request->district : '' ;
        $userinfo->state1 = !empty($request->state) ? $request->state : '' ;
        $userinfo->pincode1 = !empty($request->pincode) ? $request->pincode : '' ;
        $userinfo->email1 = !empty($request->email) ? $request->email : '' ;
        $userinfo->phone_number1 = !empty($request->phone_number) ? $request->phone_number : '' ;
        $userinfo->save();


        $otp = $request->otp;

        if(!empty($userinfo)){

            return back()->with('message_user_info','Record added Successfully');
        }
        else{
            return back()->with('message_user_info','Something went wrong!');
        }
        return back()->with('message_user_info','');
//        return view('home');
    }



    public function verifyAadhaar1(Request $request)
    {
        // Validate the Aadhaar number
        $request->validate([
            'aadhaar' => 'required|digits:12',
        ]);

        // Simulate sending OTP (You can integrate an SMS service here)
        $otp = 123456 ; //rand(100000, 999999);

        // Store the OTP in the session (or database)
        session(['otp' => $otp]);

        User::where('id',auth()->user()->id)->update(['aadhaar_no' => $request->aadhaar]);
        return response()->json(['message' => 'OTP sent to your registered mobile number.']);
    }

    public function verifyOtp(Request $request)
    {
        // Validate the OTP
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // Check the OTP
        if ($request->otp == session('otp')) {
            User::where('id',auth()->user()->id)->update(['aadhaar_verify_status' => 1]);
            return response()->json(['message' => 'OTP verified successfully.']);
        }

        return response()->json(['message' => 'Invalid OTP.'], 400);
    }

    // GST
    public function verifyGst(Request $request)
    {
        // Validate the GST number
        $request->validate([
            'gst' => 'required|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[A-Z0-9]{1}[Z]{1}[A-Z0-9]{1}$/',
//            'gst' => 'required|regex:^[0-9]{2}[A-Z]{5}"
//                        "[0-9]{4}[A-Z]{1}["
//                        "1-9A-Z]{1}Z[0-9A-Z]{1}$',
        ]);

        // Simulate sending OTP (You can integrate a real SMS service here)
        $otp = rand(100000, 999999);

        // Store the OTP in the session (or database)
        session(['gst_otp' => $otp]);

        return response()->json(['message' => 'OTP sent successfully to your registered mobile number.']);
    }

    public function verifyGSTOtp(Request $request)
    {
        // Validate the OTP
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // Check if the OTP matches
        if ($request->otp == session('gst_otp')) {
            return response()->json(['message' => 'OTP verified successfully.']);
        }

        return response()->json(['message' => 'Invalid OTP.'], 400);
    }

}
