<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoice;
use App\line_item;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoices= invoice::all()->toArray();
        // return view('posts.index', compact('invoices'));
        $info= DB::table('invoices')
                ->join('line_items','line_items.item_no', '=', 'invoices.item_no')
                ->select('invoices.invoice_no', 'invoices.client_name', 'line_items.fee')
                ->get();
        return view('posts.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
        $this->validate($request, [
            'title'=> 'required',
            'body'=> 'required'
        ]);
        
        //Create Post
        $post= new Post;
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->user_id= auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);

        // Check for correct user edit
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Nope, cant do that... sorry');
        }
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'title'=> 'required',
            'body'=> 'required'
        ]);
        
        //Create Post
        $post= Post::find($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Nope, cant do that... sorry');
        }
        
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
