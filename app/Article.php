<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
    	'articulo', 'precio','category_id',
    ];

    protected $guarded =[
    ];

    public function Category(){
    	return $this->belongsTo('App\Category');
    }

    //public $timestamps = false;
}




