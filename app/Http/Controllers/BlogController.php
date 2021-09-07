<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBlogRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()){
            $userId = auth()->user();
            $userMode = User::select('user_mode')->whereId($userId->id)->first()['user_mode'];
            return view('blog',compact('userMode'));
        }
        return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBlogRequest $request)
    {
        if ($request->hasFile('blogPhoto')){
            $photosPathNames = $this->addPhoto($request->file('blogPhoto'));
            auth()->user()->blogs()->create([
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'photo_path' => $photosPathNames
            ]);
        }
    }

    public function addPhoto($fileRequest)
    {
        $pathNames = [];
        foreach ($fileRequest as $file){
            $createName = 'blog' . Str::random(2) . substr(time(),5) . rand(1,999) . Str::random(5) . '.' . $file->extension();
            array_push($pathNames,$createName);
            $file->move("photos",$createName);
        }
        return implode('<|>',$pathNames);
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
