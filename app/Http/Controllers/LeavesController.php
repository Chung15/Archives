<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Leave;
use Carbon\Carbon;

class LeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user =  \Auth::User();
        $leaves = $user->leave()->get();
        return view('layouts.leaves', compact('leaves'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.leave');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, Leave::$validationRules);
        // $data = $request->all();
          $data = $request->only('leave_type', 'other_leave', 'comment', 'start_date','end_date');

         $start_date = Carbon::createFromFormat('d/m/Y',$data['start_date'])->format('Y-m-d');

         $end_date = Carbon::createFromFormat('d/m/Y',$data['end_date'])->format('Y-m-d');

        $user = \Auth::User();
        $newLeave = $user->leave()->create( [
                    'leave_type' => $data['leave_type'],
                    'other_leave' => $data['other_leave'],
                    'comment' => $data['comment'],
                    'start_date' => $start_date,
                    'end_date' => $end_date,

                    ] );

        return redirect('archives/leave');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $leave = Leave::findOrFail($id); 
          $user = $leave->user()->get()->first();

         $leave->start_date= Carbon::createFromFormat('Y-m-d',$leave->start_date)->format('d/m/Y');

         $leave->end_date = Carbon::createFromFormat('Y-m-d',$leave->end_date)->format('d/m/Y'); 

        return view('other.single_leave', compact('leave', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $leave = Leave::findOrFail($id);

         $leave->start_date= Carbon::createFromFormat('Y-m-d',$leave->start_date)->format('d/m/Y');

         $leave->end_date = Carbon::createFromFormat('Y-m-d',$leave->end_date)->format('d/m/Y'); 

         return view('forms.leave', compact('leave'));
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
        $this->validate($request, Leave::$validationRules);

        $leave = Leave::findOrFail($id);

        $data = $request->all();

        $data['start_date'] = Carbon::createFromFormat('d/m/Y',$data['start_date'])->format('Y-m-d');

        $data['end_date'] = Carbon::createFromFormat('d/m/Y',$data['end_date'])->format('Y-m-d');

        $leave->update($data);

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/archives/leave');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
         $leave->delete();

         return \Redirect::to('/archives/leave');
    }
}
