<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    //    $t='educacion';
       $t= auth()->user()->interest ;

       $news = News::whereHas('tags', function ($query) use ($t) {
          $query->where('name', $t);
        })->get();

        $tags = Tag::all();

        return view('home')->with([
            'news'=>$news,
            'tags'=> $tags
            ]);
    }


    public function nouser(){
        return view('nouser');
    }
}
