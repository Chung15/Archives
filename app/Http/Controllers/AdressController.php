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
    public function edit($id) {
    	$adress = \Auth::User()->adress()->findOrFail($id);

    	return view('templates.user.edit_user_contact', compact('adress'));
    }

    public function update (Request $request, $id) {

    	 $this->validate($request, Adress::$validationRules);

        $user = \Auth::User();
        $adress = $user->adress()->findOrFail($id);


        $data = $request->all();

       $adress->update($data);

        //return view('templates.user.userProfile',compact('user'));
        return redirect('/profile/'.$user->id);
    	

    }

}
