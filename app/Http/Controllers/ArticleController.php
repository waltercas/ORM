<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
   
    public function index(Request $request)
    {
         if ($request)
        {     
            $query=trim($request->get('searchText'));
            $articulos=DB::table('articles as a')
            ->join ('categories as c', 'a.category_id','=','c.id')
            ->select ('a.id','a.articulo','a.precio','c.categoria as Categoria')
            ->where('a.articulo','LIKE','%'.$query.'%')
            ->orderBy('a.id','asc')
            ->paginate(15);

            return view('index',['articulos'=>$articulos,'searchText'=>$query]);
         }
    }


   
}