<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','other_link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'name' => 'required',
            'description' => 'required',
            
        ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
