<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use App\Child;
use Carbon\Carbon;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $children = $user->child()->get();
        return view('children.children', compact('children','user'));
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
        $dateOfBirth= Carbon::createFromFormat('d/m/Y',$data['dateOfBirth'])->format('Y-m-d');

        $parent = \Auth::User();
        $newChild = $parent->child()->create( [
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'patronymic' => $data['patronymic'],
                    'dateOfBirth' =>  $dateOfBirth,
                    'child_link' => $data['child_link'],
                    ] );
     

        return redirect('/profile/' .$parent->id. '/archives/children');
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
         $user = $child->user()->get()->first();  
         $child->dateOfBirth= Carbon::createFromFormat('Y-m-d',$child->dateOfBirth)->format('d/m/Y');
        return view('other.single_child', compact('child','user'));
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
        $child->dateOfBirth= Carbon::createFromFormat('Y-m-d',$child->dateOfBirth)->format('d/m/Y');  
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
        $data = $request->all();
        $data['dateOfBirth'] = Carbon::createFromFormat('d/m/Y',$data['dateOfBirth'])->format('Y-m-d');

        $child->update($data);


        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User(). '/archives/children');
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

         return \Redirect::to('/profile/' .\Auth::User(). '/archives/children');
    }
}
