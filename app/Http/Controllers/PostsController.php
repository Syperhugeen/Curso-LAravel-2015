<?php

namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Http\Requests;
use PlatziPHP\Entidades\Post;
use Illuminate\Support\Facades\Validator;
//use use PlatziPHP\Http\Requests\CreatePostReques;
use Illuminate\Support\Facades\Auth;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Para crear un controller
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),[

                'title' => 'required',
                'body'  => 'required',

            ]);

        if ($validator->fails())
        {
           return redirect()
           ->route('posts_create_path')
           ->withInput()
           ->withErrors($validator);
        }

          $post  = new Post();
           $post->title =$request->get('title');
           $post->body =$request->get('body');
           $post->author_id =Auth::id();
           $post->save();

           return redirect()->route('post_show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view( 'post' , ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
