<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
	/*public $table = 'adress';*/
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city','street', 'zip', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $validationRules = [
            'zip' => 'required',
            'phone' => 'required|min:',
            'street' => 'required',
            'city' => 'required',

        ];
	
	public function user() {
        return $this->belongsTo('App\User');
    }
}
