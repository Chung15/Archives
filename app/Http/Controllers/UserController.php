<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//added
use App\Http\Requests\UserRequest;
//use Request;
use App\User;
use App\Adress;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
       return view('welcome', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProfile()
    {
        $user = \Auth::User();

        return view('templates.user.userProfile',compact('user'));
    }

    public function showArchives() 
    {

        return view('templates.user.archives.archives');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

      // Start DB transaction!
         DB::beginTransaction();
        $dateOfBirth = date_create($data['dateOfBirth']);
        $dateOfBirth = date_format($dateOfBirth,"Y-m-d");

            try {

                 $newUser = User::create([
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'patronymic' => $data['patronymic'],
                    'INN' => $data['INN'],
                    'title' => $data['title'],
                    'grade' => $data['grade'],
                    'dateOfBirth' => $dateOfBirth,
                    'gender' => $data['gender'],
                    'maritalStatus' =>$data['maritalStatus'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'terms' => $data['terms'],
                ]);
        
                // Validate, then create if valid
                $newAdress = $newUser->adress()->create( [
                    'city'   => $data['city'],
                    'street' => $data['street'],
                    'zip'    => $data['zip'],
                    'phone'  => $data['phone'],
                    ] );




            } catch(ValidationException $e)
            {
                // Rollback and then redirect
                // back to form with errors
                DB::rollback();
                return Redirect::to('register')
                    ->withErrors( $e->getErrors() )
                    ->withInput();
            } catch(\Exception $e)
            {
                DB::rollback();
                throw $e;
            }

        // If we reach here, then
        // data is valid and working.
        // Commit the queries!
        DB::commit();

        return redirect()->route('login');
        //return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);   
        return view('templates.user.userProfile', compact('user'));
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

}
