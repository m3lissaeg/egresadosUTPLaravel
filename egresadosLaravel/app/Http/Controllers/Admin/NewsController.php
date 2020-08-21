<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adminNews = User::find(auth()->id());
        // $n = News::find(1);
        // dd( gettype($n->tags->pluck('name')) )  ;
        return view('admin.news.index')->with('adminNews',$adminNews->news);


        // array_slice( $news->tags->pluck('name'), 0) 
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        return view('admin.news.create')->with('tags',$tags);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $newsNueva = new News();
        $newsNueva->title = $request->title;
        $newsNueva->user_id = auth()->id();
        $newsNueva->abst = $request->abst;
        $newsNueva->body = $request->body;
        $newsNueva->mediapath = $request->mediapath;

        $newsNueva->save();
        
        // dd( $request->input('tags'));

        foreach ($request->input('tags') as $key => $value) {
            // $key will contain your article id
            $newsNueva->tags()->attach($key);
        }

        // dd($newsNueva);
        return redirect()->route('admin.news.index');
    }
    


    public function show( $news)
    {
        //
        $newsI = News::findOrFail($news);
        return view('admin.news.show')->with('newsI', $newsI);
    }
    


    public function edit($news)
    {
        $newsI = News::findOrFail($news);
        
        $tags = Tag::all();
        return view('admin.news.edit')->with([
            'newsI'=>$newsI,
            'tags'=>$tags
        ]);
    }



    public function update(Request $request, $news)
    {
        // dd($request);
        $newsChange = News::findOrFail($news);
        $newsChange->title = $request->title;
        $newsChange->abst = $request->abst;
        $newsChange->body = $request->body;
        $newsChange->mediapath = $request->mediapath;

        $newsChange->tags()->sync($request->tags);

        $newsChange->update();
        return redirect()->route('admin.news.index');
    }



    public function destroy($news)
    {
        //
        $n = News::findOrFail($news);
        $n->tags()->detach();
        $n->delete();
        
        return redirect()->route('admin.news.index');

        //se ejecuta desde la vista index
    }
}
