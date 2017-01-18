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
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
         $trainings = $user->training()->get();
        return view('layouts.newTraining', compact('trainings','user'));
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
         //$data = $request->all();
        $data = $request->only('topic', 'description', 'start_date','end_date', 'training_link');

         $start_date = Carbon::createFromFormat('d/m/Y',$data['start_date'])->format('Y-m-d');

         $end_date = Carbon::createFromFormat('d/m/Y',$data['end_date'])->format('Y-m-d');
         

         $user = \Auth::User();
         $newTraining = $user->training()->create( [
                    'topic' => $data['topic'],
                    'description' => $data['description'],
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'training_link' => $data['training_link'],
                    ] );
     

        return redirect('/profile/' .$user->id. '/archives/trainings');
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
         $user= $training->user()->get()->first();   
        return view('other.single_training', compact('training','user'));
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

            $training->start_date= Carbon::createFromFormat('Y-m-d',$training->start_date)->format('d/m/Y');

            $training->end_date = Carbon::createFromFormat('Y-m-d',$training->end_date)->format('d/m/Y');

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

        $data =$request->all();

        $data['start_date'] = Carbon::createFromFormat('d/m/Y',$data['start_date'])->format('Y-m-d');

        $data['end_date'] = Carbon::createFromFormat('d/m/Y',$data['end_date'])->format('Y-m-d');

        $training->update($data);

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/trainings');
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

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/trainings');
    }
}
