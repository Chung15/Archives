<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'type', 'title',  'specialisation', 'description', 'journal', 'published_on', 'publication_file',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'type' => 'required',
            'title' => 'required',
            'specialisation' => 'required',
            'description' => 'required',
            'journal' => 'required',
            'published_on' => 'required',
            'publication_file' => 'required',

        ];
    public function user() {
        return $this->belongsTo('App\User');
    }

  
}
