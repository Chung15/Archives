<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Child;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  \Auth::User();
        $children = $user->child()->get();
        return view('children.children', compact('children'));
    }
         

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.children');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Child::$validationRules);
        $data = $request->all();

        $dateOfBirth = date_create($data['dateOfBirth']);
        $dateOfBirth = date_format($dateOfBirth,"Y-m-d");

        $parent = \Auth::User();
        $newChild = $parent->child()->create( [
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'patronymic' => $data['patronymic'],
                    'dateOfBirth' =>  $dateOfBirth,
                    'child_link' => $data['child_link'],
                    ] );
     

        return redirect('/archives/children');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $child = Child::findOrFail($id);   
        return view('other.single_child', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child = Child::findOrFail($id);   
        return view('forms.children', compact('child'));
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
        $this->validate($request, Child::$validationRules);

        $child = Child::findOrFail($id);
        $child->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/archives/children');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child = Child::findOrFail($id);
         $child->delete();

         return \Redirect::to('/archives/children');
    }
}
