<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable =[
    	'categoria',
    ];
    
    protected $guarded =[
    ];

    public function Articles(){
   		return $this->hasMany('App\Article');
	}
	
   // public $timestamps = false;
}
