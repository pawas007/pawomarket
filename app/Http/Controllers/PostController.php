<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Services\InstagramProvider;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Support\Facades\Cache;
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

        $img = new InstagramProvider();

        Cache::put('instagram',$img->getPosts());

        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('pages.blog.blog', compact('posts'));
    }

    public function blogList()
    {
        $posts = Post::with('categories')->orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.postList', compact('posts'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $singlePost = Post::where('slug', $slug)->with('tags', 'comments', 'categories')->first();
        if ($singlePost) {
            return view('pages.blog.blog-single', compact('singlePost'));
        } else {
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        dd('edit');
    }


    public function commentCreate(CommentRequest $request)
    {
        $comment = new Comment();
        $comment->commentable()->associate(Post::findOrFail($request->id));
        $comment->email = $request->message;
        $comment->message = $request->message;
        $comment->name = $request->name;
        $comment->save();
        return redirect()->back()->withSuccess('Comment created');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();
        //        Session::flash('message', "Product created");
        return redirect()->back()->withSuccess('Post deleted');
    }
}
