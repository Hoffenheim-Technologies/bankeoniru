<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index')->with('blog', Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        if(!empty($request->file('caption_image'))): 
            $desc_img = $request->file('caption_image')->hashName(); 
            $path1 = $request->file('caption_image')->store('public/images/items');
            $blog->caption_image = '/storage/images/items/'.$desc_img;
        endif;
        if(!empty($request->file('bimg1'))): 
            $bimg1 = $request->file('bimg1')->hashName();
            $path2 = $request->file('bimg1')->store('public/images/items');
            $blog->bimg1 = '/storage/images/items/'.$bimg1;
        endif;
        if(!empty($request->file('bimg2'))): 
            $bimg2 = $request->file('bimg2')->hashName();
            $path3 = $request->file('bimg2')->store('public/images/items');
            $blog->bimg2 = '/storage/images/items/'.$bimg2;
        endif;
        
        
        $blog->title = $request->title;
        $blog->date = $request->date;
        $blog->intro = $request->intro;
        $blog->bp1 = $request->bp1;
        $blog->bp2 = $request->bp2;
        $blog->bp3 = $request->bp3;
        $blog->conclusion = $request->conclusion;

        $blog->save();

        return redirect()->route('blog.create')->with('message','blog Item Created Successfully');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blog.view')->with('blog', $blog);
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
        $blog = Blog::findOrFail($id);
        if(!empty($request->file('caption_image'))): 
            $desc_img = $request->file('caption_image')->hashName(); 
            $path1 = $request->file('caption_image')->store('public/images/items');
            $blog->caption_image = '/storage/images/items/'.$desc_img;
        endif;
        if(!empty($request->file('bimg1'))): 
            $bimg1 = $request->file('bimg1')->hashName();
            $path2 = $request->file('bimg1')->store('public/images/items');
            $blog->bimg1 = '/storage/images/items/'.$bimg1;
        endif;
        if(!empty($request->file('bimg2'))): 
            $bimg2 = $request->file('bimg2')->hashName();
            $path3 = $request->file('bimg2')->store('public/images/items');
            $blog->bimg2 = '/storage/images/items/'.$bimg2;
        endif;
        
        
        $blog->title = $request->title;
        $blog->date = $request->date;
        $blog->intro = $request->intro;
        $blog->bp1 = $request->bp1;
        $blog->bp2 = $request->bp2;
        $blog->bp3 = $request->bp3;
        $blog->conclusion = $request->conclusion;

        $blog->save();

        return redirect()->route('blog.index')->with('message','blog Item Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $image = Blog::find($id);
            if(!empty($image)){
                $image->delete();
                return redirect()->route('blog.index')->with('message','Blog Post Deleted Successfully');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
