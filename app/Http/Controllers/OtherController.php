<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Other;
use App\User;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $others = $user->other()->get();
        return view('layouts.newOther',compact('others','user'));
    }

    /*public function index()
    {
        $user =  \Auth::User();
        $others = $user->other()->get();
        return view('layouts.newOther',compact('others'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.other');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, Other::$validationRules);
         $data = $request->all();
          $data = $request->only('name','description','other_link');

        $user = \Auth::User();
        $newOther = $user->other()->create( [
                    'name'   => $data['name'],
                    'description' => $data['description'],
                    'other_link' => $data['other_link'],

                    ] );

        return redirect('profile/' . $user->id . '/archives/other');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function show($id)
    {
        $user = User::findOrFail($id);
        $other = $user->other()->get();   
        return view('other.single_other', compact('other'));
    }*/

     public function show($id)
    {
        $user = User::findOrFail($id);
         $other = $user->other()->get()->first();
        //$other = Other::findOrFail($id);   
        return view('other.single_other', compact('other','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $other = Other::findOrFail($id);
         return view('forms.other', compact('other'));
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
        //validation
        $this->validate($request, Other::$validationRules);

        $other = Other::findOrFail($id);
        $other->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/other');
        //return $this->show($id);
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $other = Other::findOrFail($id);
         $other->delete();

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/other');
    }
}
