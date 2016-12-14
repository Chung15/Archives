<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThesisTopic;
use Carbon\Carbon;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $topics = ThesisTopic::all();
        return view('layouts.newTopic', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.thesis_topics');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ThesisTopic::$validationRules);
        $data = $request->all();
        $year = Carbon::createFromFormat('Y', $data['academic_year'])->format('Y');
        $user = \Auth::User();
        $newTopic = $user->ThesisTopic()->create( [
                    'type' => $data['type'],
                    'title' => $data['title'],
                    'student_name' => $data['student_name'],
                    'student_group' => $data['student_group'],
                    'academic_year' => $year,

                    ] );

         return redirect('processTopic');
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
