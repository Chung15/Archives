<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adress;
use App\User;

class AdressController extends Controller
{
    public function storeAdress (Request $request) {
    	$data = $request->all();

    }
    /**
    * with admin user, we need the user variable to be normal user an then check 
    *which one is being updated
    **/
    public function edit($id, $user_id) {
        $user = User::findOrFail($user_id);
    	$adress = $user->adress()->findOrFail($id);

    	return view('templates.user.edit_user_contact', compact('adress','user'));
    }
     /*public function edit($id) {
        $adress = \Auth::User()->adress()->findOrFail($id);

        return view('templates.user.edit_user_contact', compact('adress'));
    }*/

    public function update (Request $request, $id, $user_id) {

    	 $this->validate($request, Adress::$validationRules);

        $user =  User::findOrFail($user_id);
        $adress = $user->adress()->findOrFail($id);


        $data = $request->all();

       $adress->update($data);

        //return view('templates.user.userProfile',compact('user'));
        return redirect('/profile/'.$user->id);
    	

    }
   /* public function update (Request $request, $id) {

         $this->validate($request, Adress::$validationRules);

        $user = \Auth::User();
        $adress = $user->adress()->findOrFail($id);


        $data = $request->all();

       $adress->update($data);

        //return view('templates.user.userProfile',compact('user'));
        return redirect('/profile/'.$user->id);
        

    }*/

}
