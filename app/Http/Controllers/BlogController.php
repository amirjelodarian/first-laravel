<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBlogRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $allBlog = Blog::orderBy('id','desc')->cursorPaginate(2);
        if (auth()->check()){
            $userId = auth()->user();
            $userMode = User::select('user_mode')->whereId($userId->id)->first()['user_mode'];
            return view('blog',compact('userMode'),compact('allBlog'));
        }
        return view('blog',compact('allBlog'));
    }


    public function create()
    {
        return view('addBlog');
    }


    public function store(AddBlogRequest $request,Blog $blog)
    {
        if ($request->hasFile('blogPhoto')){
            $photosPathNames = $blog->addPhoto($request->file('blogPhoto'));
            auth()->user()->blogs()->create([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'photo_path' => $photosPathNames
            ]);
        }else
            return 'خطایی رخ داد !';

    }

    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
