<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use Illuminate\Support\Facades\Input;*/
//use Illuminate\Support\Facades\DB;
use App\Publication;
use Carbon\Carbon;
use App\Author;
use App\User;
use \Input as Input;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $publications = $user->publication()->latest('created_at')->get();
        // $latest = Publication::latest()->first();
        return view('layouts.newPublication', compact('publications','user'));
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
        $data = $request->only('type','authors', 'title', 'specialisation','description', 'journal', 'published_on','publication_file');
        

         $user = \Auth::User();

         $publication_obj = Input::file('publication_file');
         $extension = Input::file('publication_file')->getClientOriginalExtension();

         if($publication_obj->isValid() AND $extension === 'pdf')
         {
            $publication_file = $user->id .'_'. time().'_' .$publication_obj->getClientOriginalName();

            $publication_obj->move('uploads/publications', $publication_file);
    
            $publication_file_path = "/uploads/publications/" .$publication_file;
            $published_on = Carbon::createFromFormat('m/Y', $data['published_on'])->format('Y-m');

                   
            $publication = $user->publication()->create( [
                                'type' => $data['type'],
                                'title' => $data['title'],
                                'specialisation' => $data['specialisation'],
                                'description'  => $data['description'],
                                'journal' => $data['journal'],
                                'published_on' => $published_on,
                                'publication_file' => $publication_file_path,
                                ] );
            return redirect('profile/' .$user->id. '/archives/publications');
         }

          \Session::flash('invalid_format', 'invalid file format, only pdf allowed');

         return back()->withInput()->withErrors(['publication_file' =>'invalid file format, only pdf allowed']);
             
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);  
         $publication->published_on= Carbon::createFromFormat('Y-m',$publication->published_on)->format('m/Y');

        $user = $publication->user()->get()->first(); 
        return view('other.single_publication', compact('publication','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->published_on= Carbon::createFromFormat('Y-m',$publication->published_on)->format('m/Y');
        $publication->publication_file;
         return view('forms.publications', compact('publication'));
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
         $this->validate($request, Publication::$validationRules);
        $publication = Publication::findOrFail($id);
         $data = $request->all();
          $data['published_on'] = Carbon::createFromFormat('m/Y',$data['published_on'])->format('Y-m');

        $publication_obj = Input::file('publication_file');
         $extension = Input::file('publication_file')->getClientOriginalExtension();
         $user = $publication->user()->get()->first(); 

         if($publication_obj->isValid() AND $extension === 'pdf')
         {
            $publication_file = $user->id .'_'. time().'_' .$publication_obj->getClientOriginalName();

            $publication_obj->move('uploads/publications', $publication_file);
    
            $publication_file_path = "/uploads/publications/" .$publication_file;
        }

        $data['publication_file'] = $publication_file_path;
       
        $publication->update($data);

        \Session::flash('sucess', 'sucessfully updated');

        return redirect('/profile/' .\Auth::User()->id. '/archives/publications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $publication = Publication::findOrFail($id);
         $publication->delete();

         return \Redirect::to('/profile/' .\Auth::User()->id. '/archives/publications');
    }
    

}
