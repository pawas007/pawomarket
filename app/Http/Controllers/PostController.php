<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryPost;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $categories = CategoryPost::all();
        $tags = Tag::all();
        return view('admin.posts.create-post', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $post = new Post();
            $post->fill($request->all());

//download img
            if ($request->has('post_image')) {
                $image = $request->file('post_image');
                $imgName = $image->getClientOriginalName();
                $path = $image->storeAs('blog/posts', $imgName);
                $post->image = $path;
            }
//download img
            $post->save();
            $post->categories()->sync($request->categories);
            $post->tags()->sync($request->tags);
            DB::commit();
            return redirect()->back()->withSuccess('Post created');
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withSuccess('Error');
        }

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
        DB::beginTransaction();
        try {
            $post = Post::find($id);
            $post->tags()->detach();
            Storage::delete($post->image);
            $post->categories()->detach();
            $post->delete();
            DB::commit();
            return redirect()->back()->withSuccess('Post deleted');
        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error');
        }
    }
}
