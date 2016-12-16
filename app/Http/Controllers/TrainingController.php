<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Training;
use Carbon\Carbon;
class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  \Auth::User();
         $trainings = $user->training()->get();
        return view('layouts.newTraining', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.training');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Training::$validationRules);
         $data = $request->all();

         $start_date = Carbon::createFromFormat('d/m/Y',$data['start_date'])->format('Y-m-d');

         $end_date = Carbon::createFromFormat('d/m/Y',$data['end_date'])->format('Y-m-d');
         

         $user = \Auth::User();
         $newTraining = $user->training()->create( [
                    'topic' => $data['topic'],
                    'description' => $data['description'],
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    ] );
     

        return redirect('/archives/trainings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::findOrFail($id);   
        return view('other.single_training', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::findOrFail($id);   
        return view('forms.training', compact('training'));
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
        $this->validate($request, Training::$validationRules);

        $training = Training::findOrFail($id);
        $training->update($request->all());

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/archives/trainings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::findOrFail($id);
         $training->delete();

         return \Redirect::to('/archives/trainings');
    }
}
