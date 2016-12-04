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
    public function index()
    {
        $diplomas = Diploma::all();
       // $options = Options::pluck('name','id');
        return view('layouts.diplomas', compact('diplomas'));
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
         /*$this->validate($request, Diploma::$validationRules);
        $data = $request->only('diploma_type', 'seria_number', 'thesis_topic','specialization','department','university','year');*/
        $data = $request->all();
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
                    ] );
        return redirect('processDiploma');
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
}
