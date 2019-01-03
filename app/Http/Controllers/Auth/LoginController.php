<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Response;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {

//        if (Auth::user()->fkuserTypeId == USER_TYPE['Admin'] || Auth::user()->fkuserTypeId == USER_TYPE['Emp']) {
//            return route('admin.dashboard');
//        }
//        elseif (Auth::user()->fkuserTypeId == USER_TYPE['User']) {
//
//            $cvStatus1=Employee::where('fkuserId',Auth::user()->userId)->first();
//
//            if ($cvStatus1 != null && $cvStatus1->cvStatus == 1){
//
//                return route('job.all');
//
//            }else {
//                return route('candidate.cvPersonalInfo');
//            }
//
//
//
//        }


        return Response::json(['success' => '1','gotoRoute' => config('voyager.user.redirect')]);

    }



    public function login(\Illuminate\Http\Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',

        ]);

        if ($validator->passes()) {

            // This section is the only change



            if ($this->guard()->validate($this->credentials($request))) {

                $user = $this->guard()->getLastAttempted();

                // Make sure the user is active
                if ($user->register=='Y' && $this->attemptLogin($request)) {
                    // Send the normal successful login response


                    return Response::json(['success' => '1','gotoRoute' => config('voyager.user.redirect')]);


                }
                else {
                    $error=array('CredentialsError'=>array('please acivate Your Account. !! before Login .'));
                    return Response::json(['errors' => $error]);

                }
            }else{

                $error=array('CredentialsError'=>array('Credentials do not match, try again.'));
                return Response::json(['errors' => $error]);

            }

        }else{
            return Response::json(['errors' =>$validator->errors()]);
        }

    }

}
