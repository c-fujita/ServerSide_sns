<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Post;

class PostsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list = DB::table('posts')->get();

        return view('posts.index', ['list'=>$list]);
    }

    public function createForm()
    {
        return view('posts.createForm');
    }

    public function create(Request $request)
    {
        $user_name = $request->input('userName');
        $contents = $request->input('newPost');

        DB::table('posts')->insert([
            'user_name' => $user_name,
            'contents' => $contents
        ]);


        return redirect('/index');
    }

    public function editForm($id)
    {
        $post = DB::table('posts')
        ->where('id', $id)
        ->first();
        return view('posts.editForm', ['post' => $post]);
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $up_name = $request->input('upUserName');
        $up_post = $request->input('upPost');

        DB::table('posts')
        ->where('id', $id)
        ->update(['user_name' => $up_name], ['contents' => $up_post]);

        return redirect('/index');
    }

    public function delete($id) {
        DB::table('posts')
        ->where('id',$id)
        ->delete();

        return redirect('/index');
     }
}
