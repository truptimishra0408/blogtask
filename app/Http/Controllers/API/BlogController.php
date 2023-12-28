<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::get();
        return view('blogs.index', ['blogs' => $blog]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        if (isset($request->image)) {

            $ImageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $ImageName);
        }

        

        //dd($ImageName);

        $blog = new Blog();
        $blog->image = $ImageName;
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->comments = $request->comments;
        
        $blog->save();
        return back()->withSuccess('Post Created!');
    }

    public function edit($id)
    {
        //dd($id);
        $blog = Blog::where('id', $id)->first();
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $blog = Blog::where('id', $id)->first();


        if (isset($request->image)) {

            $ImageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $ImageName);
            $blog->image = $ImageName;
        }

        //dd($ImageName);

        //$blog = new blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->comments = $request->comments;

        $blog->save();
        return back()->withSuccess('Post updated!');
    }

    public function destroy($id)
    {
        //dd($id);
        $blog = Blog::where('id', $id)->first();
        $blog->delete();
        return back()->withSuccess('Post deleted!');
    }

    public function show($id)
    {
        //dd($id);
        $blog = Blog::where('id', $id)->first();

        return view('blogs.show', ['blog' => $blog]);
    }

}
