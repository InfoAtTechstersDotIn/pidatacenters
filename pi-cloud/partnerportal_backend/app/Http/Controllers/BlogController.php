<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        $blogs = Blog::orderBy("blog_is_active", "DESC")->orderBy('id', 'DESC')->get();
        if ( $blogs != null ) {

	    foreach($blogs as $blog) {
                $blog->publish_date = date('d-m-Y', strtotime($blog->created_at));
            }

            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "blogs" =>  $blogs,
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting blogs",
            "blogs"     =>  null,
        ]);

    }

    public function indexactive() {

        $blogs = Blog::where("blog_is_active", "=", 1)->orderBy('id', 'DESC')->get();

        if ( $blogs != null ) {
            return response()->json([
                "status" => "success",
                "msg"   =>  "",
                "blogs" =>  $blogs,
            ]);
        }
    

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in getting blogs",
            "blogs"     =>  null,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {

        // return response()->json([
        //     "status" => "success",
        //     "blog_desc" => $request->blog_desc,
        // ]);

        $validated = $request->validated(); 

        $blogUrl = null;
        $isExternalLink = 0;
        if ( $validated['external_link'] != null ) {
            $isExternalLink = 1;
            $blogUrl = $validated['external_link'];
        }
        //$blogSlug = preg_replace('~[\\\\/:*?"<>|]~', ' ', strtolower($validated['blog_title']));
        $blogSlug = preg_replace('~[\\\\/:*?"<>|]~', '', strtolower($validated['blog_title']));
        $blogSlug = preg_replace('/\s+/', '-', strtolower($blogSlug));
        $blogSlug = "blogs/view/" . $blogSlug;
        

        $blog = new Blog();
        if ($request->hasFile('blog_banner')) {
            $file = $request->file('blog_banner');
            $tempPath = $file->storeAs('public/blogs', $file->getClientOriginalName());
            $blog->blog_image_path = str_replace("public", "resources", $tempPath);
        }
        
        $blog->blog_title = $validated['blog_title'] ;
        $blog->blog_slug = $blogSlug;
        $blog->blog_author = $validated['blog_author'];
        $blog->blog_short_description = $validated['blog_short_desc'];
        $blog->blog_description = $validated['blog_desc'];
        $blog->is_external_link = $isExternalLink;
        $blog->blog_link = $blogUrl;
        $blog->blog_is_active = 1;

        if ($blog->save()) {
            return response()->json([
                "status" => "success",
                "msg" => "Blog created successfully",
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg" => "Error in creating the blog",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $blog = Blog::where("blog_slug", 'LIKE', "blogs/view/".$slug)->first();

        if ($blog != null) {
            return response()->json([
                "status" => "success",
                "msg" => "Blog found",
                "blog" => $blog,
            ]);
        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Blog not found",
            "blog"  =>  null,
        ]);
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
    public function update(StoreBlogRequest $request, $id)
    {
        $validated = $request->validated(); 
        $blog = Blog::find($id);

        if ($blog == null ) {
            return response()->json([
                "status" => "error",
                "msg" => "Blog not found",
            ]);
        }
       
        $blogUrl = null;
        $isExternalLink = 0;
        if ( $validated['external_link'] != null ) {
            $isExternalLink = 1;
            $blogUrl = $validated['external_link'];
        }

        $blogSlug = preg_replace('~[\\\\/:*?"<>|]~', '', strtolower($validated['blog_title']));
        $blogSlug = preg_replace('/\s+/', '-', strtolower($blogSlug));
        $blogSlug = "blogs/view/" . $blogSlug;

        if ($request->hasFile('blog_banner')) {
            $file = $request->file('blog_banner');
            $tempPath = $file->storeAs('public/blogs', $file->getClientOriginalName());
            $blog->blog_image_path = str_replace("public", "resources", $tempPath);
        }

        $blog->blog_title = $validated['blog_title'];
        $blog->blog_slug = $blogSlug;
        $blog->blog_author = $validated['blog_author'];
        $blog->blog_short_description = $validated['blog_short_desc'];
        $blog->blog_description = $validated['blog_desc'];
        $blog->is_external_link = $isExternalLink;
        $blog->blog_link = $blogUrl;

        if ($blog->save()) {
            return response()->json([
                "status"    =>  "success",
                "msg"   =>  "Blog edited successfully",
            ]);
        }

        return response()->json([
            "status"    =>  "error",
            "msg"       =>  "Error in editing blog",
        ]);
    }


    /**
     * Deactivate the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blog = Blog::find($id);
        if ($blog != null) {

            $blog->blog_is_active = 0;
            if ( $blog->save() ) {
                return response()->json([
                    "status"    =>  "success",
                    "msg"       =>  "Blog was deleted",
                ]);
            }

        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Blog not found",
        ]);
    }

    public function activate($id)
    {
        
        $blog = Blog::find($id);
        if ($blog != null) {

            $blog->blog_is_active = 1;
            if ( $blog->save() ) {
                return response()->json([
                    "status"    =>  "success",
                    "msg"       =>  "Blog was activated",
                ]);
            }

        }

        return response()->json([
            "status" => "error",
            "msg"   =>  "Blog not found",
        ]);
    }
}
