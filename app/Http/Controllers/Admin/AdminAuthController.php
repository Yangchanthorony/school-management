<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\sendForgotPassword;
use App\Models\Admin;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
{
    public function loginShow(){
        return view('principal.auth.login');
    }

    public function loginProcess(Request $request){

      
        $request->validate([
            'email' => ['required','email'],
            'password'=> ['required']
        ],[
            'email.required' => 'សូមបញ្ចូលអ៊ីមែល។',
            'email.email' => 'អ៊ីមែលដែលបានបញ្ចូលមិនត្រឹមត្រូវទេ។',
            'password.required' => 'សូមបញ្ចូលពាក្យសម្ងាត់។'


        ]);


        $credentials = $request->only('email', 'password');

        $remember = $request->has('remember_me') ? true : false;

        if(Auth::guard('admin')->attempt($credentials,$remember)){
            return  redirect()->route('admin.dashboard.index')->with('success','ការផ្ទៀងផ្ទាត់បានត្រឹមត្រូវ');
        }else{
            return redirect()->back()->with('error','អ៊ីមែល ឬ ពាក្យសម្ងាត់របស់អ្នកមិនត្រឹមត្រូវនោះទេ។');
        }


    }

    public function sendEamil(){
        return view('principal.auth.send_email');
    }

    public function sendEmailProcess(Request $request){


        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ],[
            'email.required' => 'សូមបញ្ចូល Email របស់អ្នក',
            'email.email' => 'សូមបញ្ចូល Email អោយបានត្រឹមត្រូវ',
            'email.exists' => 'Email ពុំមាននៅក្នុងប្រព័ន្ធ',
        ]);

        $code = mt_rand(000000,999999);

        $token = hash('sha256', random_bytes(30));

        PasswordResetToken::updateOrCreate(
            ['email' => $request->email],
            [
                     'token' => $token,
                     'code' => $code, 
                     'expires_at' => now()->addMinutes(40)
                ]
        );

        $admin = Admin::where('email', $request->email)->first();


        $data = [
            'name' => $admin->last_name,
            'code' => $code,
            'token' => $token,
            'email' => $request->email
            
        ];

        Mail::to($request->email)->send(new sendForgotPassword($data));
        

       
        return redirect()->route('admin.code.veryfi.show',[
            'token' => $token
        ])->with('success','ការស្នើរសុំលេខកូដរបស់អ្នកត្រូវបានជោគជ័យ សូមមើលក្នុង Gmail');


    }


    #the function we used for code verify show
    public function codeVerify(string $token){

        $data = PasswordResetToken::where('token', $token)->first();

        //check expires_at
        if($data && $data->expires_at > now()){
            return view('principal.auth.code_verify', compact('data'));
        }

        return redirect()->route('admin.send.email.show')->with('error','Code របស់អ្នកត្រូវបានផុតកំណត់');
    }


    #the function we used for code verify process
    public function codeVerifyProcess(Request $request){

        $request->validate([
            'code' => 'required|exists:password_reset_tokens,code'
        ],[
            'code.required' => 'សូមបញ្ចូល code ដែរផ្ញើរទៅកាន់ email របស់អ្នក',
            'code.exists'   => 'code មិនត្រឹមត្រូវនោះទេ'
        ]);

        $data = PasswordResetToken::where('token', $request->token)
                                  ->where('code',$request->code)->first();

        //check user and expires token
        if($data && $data->expires_at > now()){
            return redirect()->route('admin.reset.password.show',[
                'token' => $data->token
            ]);
        }else{
            return redirect()->route('admin.send.email.show')->with('error','Code របស់អ្នកត្រូវបានផុតកំណត់');
        }
    }


    #the function we used for new password show
    public function resetPasswordShow(string $token){

        $data = PasswordResetToken::where('token', $token)->first();

        //check expires_at
        if($data && $data->expires_at > now()){
            return view('principal.auth.new_password', compact('data'));
        }

        return redirect()->route('admin.send.email.show')->with('error','Code របស់អ្នកត្រូវបានផុតកំណត់');
    }


    #the function we used for new password process
    public function resetPasswordProcess(Request $request){
        
        $request->validate([
            'password' => ['required','min:6'],
            'confirm_password' => ['required','same:password'],
        ], [
            'password.required' => 'សូមបញ្ចូលពាក្យសម្ងាត់ថ្មី',
            'password.min' => 'ពាក្យសម្ងាត់ថ្មីត្រូវមានយ៉ាងហោចណាស់ 8 តួ',
            'confirm_password.same' => 'ពាក្យសម្ងាត់ដែលបានបញ្ជាក់មិនត្រូវគ្នា',
        ]);

        // Fetch the token data
        $tokenData = PasswordResetToken::where('token', $request->token)->first();

        if ($tokenData && $tokenData->expires_at > now()) {
            // Update the user's password
            $admin = Admin::where('email', $tokenData->email)->first();

            if ($admin) {
                $admin->password = Hash::make($request->password);
                $admin->save();

                // Delete the token after successful password reset
                $tokenData->delete();

                return redirect()->route('admin.login.show')->with('success', 'ពាក្យសម្ងាត់ត្រូវបានកែប្រែដោយជោគជ័យ');
            }

            return redirect()->back()->with('error', 'រកមិនឃើញអ៊ីមែល');
        }

        return redirect()->route('admin.send.email.show')->with('error', 'Code របស់អ្នកត្រូវបានផុតកំណត់');
        
    }

    public function logout(){
       Auth::guard('admin')->logout();
       
       return redirect()->route('admin.login.show')->with('success','អ្នកបានចាកចេញពីប្រព័ន្ធដោយជោគជ័យ' );

    }


}