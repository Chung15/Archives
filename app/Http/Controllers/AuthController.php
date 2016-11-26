<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
    * returns the login form
    */
    public function loginView()
    {
        return view('templates.login');
    }

    public function processLogin(Request $request)
    {
        $this->validate($request, User::$validationRules);
        $loginData = $request->only('email', 'password');
       if (\Auth::attempt($loginData)) {
        
            return redirect()->intended('profile');
        }
        return back()->withInput()->withErrors(['email' =>'email or password is invalid']);
    }

    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }
    // register form methods

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

}
