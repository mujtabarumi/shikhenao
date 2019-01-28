<?php

namespace App\Http\Controllers\Auth;

use App\Students;
use App\Teachers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Mail;

use Session;

use Auth;
use Illuminate\Http\Request;
use Response;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    protected function sendNewUserRegisterMail(Request $r)
    {

        //return $r;
        $validator = Validator::make($r->all(), [
            'regEmail' => 'required|email|max:255|unique:user,email',
            'regPassword' => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6|same:regPassword',
        ]);

        if ($validator->passes()) {

            // Store your user in database

            $userToken=str_random(64);

            User::create([

                'email' => $r->regEmail,
                'password' => Hash::make($r->regPassword),
                'token'=>$userToken,
                'fkuserTypeId'=>$r->userType,
                'register'=>'N',
            ]);

            $data = array('email'=>$r->regEmail,'pass'=>$r->regPassword,'userToken'=>$userToken);

            try {

                Mail::send('Admin.mail.AccountCreate', $data, function ($message) use ($data) {

                    $message->from('noreply@shikhenao.com', 'SHIKHE-NAO');

                    $message->to($data['email'], 'SHIKHE-NAO')->subject('New - Account');

                });

                return Response::json(['success' => '1','mailSuccess' => 'Account Activation Mail is sent to your mail']);



            }catch (\Exception $ex) {

               // return $ex;

                return Response::json(['success' => '1','mailError' => 'Account Activation Mail can not sent,please contact with support']);


            }


        }else{


            return Response::json(['errors' => $validator->errors()]);
        }


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return 1;

//        $userToken=str_random(64);
//
//         User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//            'token'=>$userToken,
//            'fkuserTypeId'=>$data['userType'],
//            'register'=>'N',
//        ]);
//
//        $data = array('email'=>$data['email'],'pass'=>$data['password'],'userToken'=>$userToken);
//
//        try {
//
//            Mail::send('mail.AccountCreate', $data, function ($message) use ($data) {
//                $message->to($data['email'], 'Caritas BD')->subject('New - Account');
//
//            });
//
//            Session::flash('notActive', 'Account Activation Mail is sent to your mail');
//
//        }catch (\Exception $ex) {
//
//            Session::flash('notActive', 'Account Activation Email Does not Sent.Please contact us');
//
//        }



    }

    public function AccountActive($email,$userToken)
    {

        $userInfo=User::where('email', $email)->where('token', $userToken)->first();

        if(!empty($userInfo)) {

            if ($userInfo->register == 'Y') {

                Session::flash('notActive', 'Your Account is already activated! please login');
                return redirect('/');

            } elseif ($userInfo->register == 'N') {

                if ($userInfo->fkuserTypeId==USER_TYPE['student']['code']){

                    $student=new Students();
                    $student->fkuserId=$userInfo->userId;
                    $student->studentEmail=$email;
                    $student->save();
                }elseif ($userInfo->fkuserTypeId==USER_TYPE['teacher']['code']){

                    $teacher=new Teachers();
                    $teacher->teacherEmail=$email;
                    $teacher->save();
                }

                $userInfo->register = 'Y';
                $userInfo->token = null;
                $userInfo->save();

                Session::flash('message', 'Your Account is activated Successfully');
                Auth::loginUsingId($userInfo->userId);
                return redirect('/');
            }
        }else{

            Session::flash('notActive', 'Your have allready performed this action once!,Please try resend the email');
            return redirect('/');

        }


    }
}
