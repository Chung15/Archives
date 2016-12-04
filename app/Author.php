<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	/*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'name' => 'required',
        ];
        
    public function publications () {
    	return $this->hasmany('App\Publication');
    }
}
