<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AcademicTitle;
use Carbon\Carbon;

class AcademicTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
         $user = User::findOrFail($user_id);
         $titles = $user->title()->get();
        return view('layouts.titles', compact('titles','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.academic_title');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, AcademicTitle::$validationRules);
         $data = $request->all();
         $year = Carbon::createFromFormat('Y', $data['year'])->format('Y');
        $user = \Auth::User();
        $newTitle= $user->title()->create( [
                    'academic_title' => $data['academic_title'],
                    'seria_number' => $data['seria_number'],
                    'thesis_topic' => $data['thesis_topic'],
                    'specialization' => $data['specialization'],
                    'year' => $year,
                    'title_link' => $data['title_link'],
                    ] );
        return redirect('/profile/' .$user->id. '/archives/academicTitle');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = AcademicTitle::findOrFail($id); 
        $user = $title->user()->get()->first();  
        return view('other.single_title', compact('title','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = AcademicTitle::findOrFail($id);
        return view('forms.academic_title',compact('title'));
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
        $this->validate($request, AcademicTitle::$validationRules);

        $title = AcademicTitle::findOrFail($id);
        $title->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/academicTitle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $title = AcademicTitle::findOrFail($id);
         $title->delete();

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/academicTitle');
    }
}
