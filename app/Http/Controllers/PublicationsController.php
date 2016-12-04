<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Input;*/
use App\Publication;
use Carbon\Carbon;
use App\Author;

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
        /*$this->validate($request, Publication::$validationRules);
        $data = $request->only('type','authors', 'title', 'specialisation','description', 'journal', 'published_on');*/
         $data = $request->all();
        $pub = Carbon::createFromFormat('m/Y', $data['published_on'])->format('Y-m');
        $authors = $data['authors']; 
        foreach($authors as $author) {
                echo $author.'<br/>';
        }
        //dd($authors);
        //$authors = Author::pluck('name', 'id');

        /*$user = \Auth::User();
        $newPub= $user->publication()->create( [
                    'type' => $data['type'],
                    'authors' => $data['authors'],
                    'title' => $data['title'],
                    'specialisation' => $data['specialisation'],
                    'description'  => $data['description'],
                    'journal' => $data['journal'],
                    'published_on' => $pub,
                    ] );*/
     //return $data;
       //return redirect('processPub');
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
