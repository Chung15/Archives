<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Input;*/
//use Illuminate\Support\Facades\DB;
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
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $pubs = $user->publication()->get();
       // $options = Options::pluck('name','id');
        return view('layouts.newPublication', compact('pubs','user'));
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

     private function syncAuthors(Publication $publication, array $authors) {
          $publication->authors()->sync($authors);

    }

   /* private function createpublication(PublicationRequest $request) {
        $publication = new Publication($request->all());
         
         $article->user_id = \Auth::user()->id;
         //$article->save();
        $article =  \Auth::user()->articles()->create($request->all());
        
        $this->syncauthors( $article, $request->input('tag_list'));   

        return $article;

    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Publication::$validationRules);
        //$data = $request->only('type','authors', 'title', 'specialisation','description', 'journal', 'published_on');
         $data = $request->all();

        $published_on = Carbon::createFromFormat('Y', $data['published_on'])->format('Y');

        $authors = $data['authors']; 

        /*foreach($authors as $author) {
                echo $author.'<br/>';
        }*/

        //dd($authors);
       // $authors = Author::pluck('name', 'id');

        $user = \Auth::User();
        $publication = $user->publication()->create( [
                    'type' => $data['type'],
                    //'authors' => $authors,
                    'title' => $data['title'],
                    'specialisation' => $data['specialisation'],
                    'description'  => $data['description'],
                    'journal' => $data['journal'],
                    'published_on' => $published_on,
                    ] );

        $publication->authors()->sync($authors);   
     //return $data;
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        
    }

}
