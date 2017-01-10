<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'login', 'register']);
    }
    
    /**
    * returns the login form
    */
    public function loginView()
    {
        return view('templates.login');
    }

     /**
         * Saves the email and password in the DB.
         *
         * @param  \Illuminate\Http\Request  
         * @return \Illuminate\Http\Response
         */

    public function processLogin(Request $request)
    {
        $this->validate($request, User::$validationRules);
        $loginData = $request->only('email', 'password');
       if (\Auth::attempt($loginData)) {
             $user = \Auth::User();
            return redirect('/profile/'.$user->id);
            //->intended();
        }
        return back()->withInput()->withErrors(['email' =>'email or password is invalid']);
    }

     /**
         * Disconnect the user from the application.
         *
         * @param  \Illuminate\Http\Request  
         * @return 
         */

    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }

     /**
     * Returns register view.
     *
     * @param    
     * @return 
     */

    public function registerView()
    {
        return view('templates.register');
    }



   /* public function processRegister(UserRequest $request)
    {
        
       $data = $request->all();
       $user = return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'patronymic' => $data['patronymic'],
            'INN' => $data['INN'],
            'title' => $data['title'],
            'grade' => $data['grade'],
            'gender' => $data['gender'],
            'maritalStatus' => $data['maritalStatus'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'terms' => $data['terms'],
        ]);

        //return $data;

      /* if (\Auth::attempt($data))// authentifier si le user existe dans la base de donnees
       {
        
            return redirect()->intended('profile');
        }
        return back()->withInput()->withErrors(['email' =>'email or password is invalid']);
    }*/

     /**
         * Verify old password,
         * update the old on in the DB.
         *
         * @param  \Illuminate\Http\Request  
         * @return 
         */

    public function updatePassword (Request $request, $user_id){
        $user = \Auth::User();
        $passwords = $request->all();
        $newPassword = bcrypt($passwords['newPassword']);
        $oldPassword = $passwords['oldPassword'];

        if(password_verify( $oldPassword, $user->password)) {
            DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => $newPassword]);

            return $this->logout();
        }

        else{
            return back()->withInput()->withErrors(['password' =>' invalid old password']);
        }

    }

}
