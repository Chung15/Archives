<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AcademicDegree;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AcademicDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $degrees = $user->degree()->get();

        return view('layouts.degrees', compact('degrees','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.academic_degree');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, AcademicDegree::$validationRules);
        $data = $request->all();
        $year = Carbon::createFromFormat('Y', $data['year'])->format('Y');
        $user = \Auth::User();
        $newDegree= $user->degree()->create( [
                    'academic_degree' => $data['academic_degree'],
                    'seria_number' => $data['seria_number'],
                    'thesis_topic' => $data['thesis_topic'],
                    'specialization' => $data['specialization'],
                    'year' => $year,
                    'degree_link' => $data['degree_link'],
                    ] );
        return redirect('/profile/' .$user->id. '/archives/academicDegree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $degree = AcademicDegree::findOrFail($id);   
        $user = $degree->user()->get()->first();
        return view('other.single_degree', compact('degree','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $degree = AcademicDegree::findOrFail($id);   
        return view('forms.academic_degree', compact('degree'));
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
        $this->validate($request, AcademicDegree::$validationRules);

        $other = AcademicDegree::findOrFail($id);
        $other->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/academicDegree');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degree = AcademicDegree::findOrFail($id);
         $degree->delete();

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/academicDegree');
    }
}
