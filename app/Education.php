<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
     /*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','serie_number', 'specialisation', 'year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'name' => 'required|min:6',
            'serie_number' => 'required|min:',
            'specialisation' => 'required',
            'year' => 'required',

        ];

	public function user() {
        return $this->belongsTo('App\User');
    }
}
