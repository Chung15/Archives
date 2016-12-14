<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Other;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others = Other::all();
        return view('layouts.newOther',compact('others'));
    }

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
          $data = $request->only('name','description');

        $user = \Auth::User();
        $newOther = $user->other()->create( [
                    'name'   => $data['name'],
                    'description' => $data['description'],

                    ] );

        return redirect('archives/other');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $other = Other::findOrFail($id);   
        return view('other.single_other', compact('other'));
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
       // return view('forms.edit_forms.edit_other', compact('other'));
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

        return redirect('archives/other');
        

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

         return \Redirect::to('/archives/other');
    }
}
