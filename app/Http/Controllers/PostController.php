<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('list-post')) {
            $listPost = Post::all();
            return view('post.index', compact('listPost'));
        } else {
            return view('errors.message');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('create-post')) {
            $data = $request->all();
            $data['user_id'] = Auth::id();
            Post::create($data);
            return redirect()->route('posts.index')->with('success', 'Add Success');
        } else {
            return view('errors.message');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post.edit', compact('posts'));
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
        $data = request()->except(['_token', '_method']);
        if(Post::where('id', $id)->update($data)){
            return redirect()->route('posts.index')->with('success','Update Success');
        } else{
           return redirect()->route('posts.index')->with('errors','Update Errors');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->delete()){
            return redirect()->back()->with('success','Delete Success');
        } else{
           return redirect()->back()->with('errors','Delete Errors');
        }
    }
}
