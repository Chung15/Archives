<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Input;*/
use App\Publication;

class PublicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = Publication::all();
       // $options = Options::pluck('name','id');
        return view('layouts.newPublication', compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.publications');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Publication::$validationRules);
        $data = $request->only('name', 'place', 'specialisation','description');
         //$data = $request->all();
       // dd($data);
        $user = \Auth::User();
        $newPub= $user->publication()->create( [
                    //'type'   => $data['type'],
                    'name' => $data['name'],
                    'place' => $data['place'],
                    'specialisation' => $data['specialisation'],
                    'description'  => $data['description'],
                    ] );
     
//dd($newPub);
       return redirect('processPub');
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
