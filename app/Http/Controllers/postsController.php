<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tit =Input::get('title') ;
        $po =Input::get('post') ;
        $ph =Input::get('photo') ;

        return view('newpost',['title'=>$tit]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $posts =new App/posts::all();

        foreach ($posts as $post) {
            echo $post->title;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //


        $req =0 ;
        return view('editpost', ['postid' => $req]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
