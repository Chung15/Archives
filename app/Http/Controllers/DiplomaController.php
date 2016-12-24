<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diploma;
use App\User;
use Carbon\Carbon;
class DiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $diplomas = $user->diploma()->get();
       // $options = Options::pluck('name','id');
        return view('layouts.diplomas', compact('diplomas','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.diploma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, Diploma::$validationRules);
        $data = $request->only('diploma_type', 'seria_number', 'thesis_topic','specialization','department','university','year', 'diploma_link');
        //$data = $request->all();
        $year = Carbon::createFromFormat('Y', $data['year'])->format('Y');
         
      // dd($data);
        $user = \Auth::User();
        $newDiploma= $user->diploma()->create( [
                    'diploma_type' => $data['diploma_type'],
                    'seria_number' => $data['seria_number'],
                    'thesis_topic' => $data['thesis_topic'],
                    'specialization' => $data['specialization'],
                    'department' => $data['department'],
                    'university' => $data['university'],
                    'year' => $year,
                    'diploma_link' => $data['diploma_link'],
                    ] );
        return redirect('/profile/' .$user->id. '/archives/diploma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $diploma = Diploma::findOrFail($id);   
         $user = $diploma->user()->get()->first();
        return view('other.single_diploma', compact('diploma','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $diploma = Diploma::findOrFail($id);
         return view('forms.diploma', compact('diploma'));
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
         $this->validate($request, Diploma::$validationRules);

        $diploma = Diploma::findOrFail($id);
        $diploma->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/diploma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $diploma = Diploma::findOrFail($id);
         $diploma->delete();

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/diploma');
    }
}
