<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
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
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10)->withPath('?'.$request->getQueryString());
        return view('pages.blog.blog', compact('posts'));
    }

    public function blogList(Request $request)
    {
        $posts = Post::with('categories')->orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.postList', compact('posts'));
    }


    public function search(Request $request)
    {
        $searchableTitle = $request->search;
        $posts = Post::where('title', 'LIKE', "%$searchableTitle%")->orderBy('id', 'desc')->paginate(10)->withPath('?'.$request->getQueryString());
        return view('pages.blog.blog', compact('posts', 'searchableTitle'));
    }


    public function searchPostAdmin(Request $request)
    {
        $searchableTitle = $request->search;
        $posts = Post::where('title', 'LIKE', "%$searchableTitle%")->orderBy('id', 'desc')->paginate(10)->withPath('?'.$request->getQueryString());
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
    public function store(PostCreateRequest $request)
    {
        DB::beginTransaction();
        try {
            $post = new Post();
            $post->fill($request->all());

            //download img
            if ($request->has('image')) {
                $image = $request->file('image');
                $imgName = time() . $image->getClientOriginalName();
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
        $categories = CategoryPost::all();
        $tags = Tag::all();
        $post = Post::where('id', $post->id)->with('tags', 'comments', 'categories')->with('comments')->first();
        return view('admin.posts.edit-post', compact('post', 'categories', 'tags'));


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
    public function update(PostUpdateRequest $request, $id)
    {

//        image
        DB::beginTransaction();
        try {

            $post = Post::find($id);
            $post->title = $request->title;
            $post->content = $request->contents;
            $post->short_description = $request->short_description;
            $post->categories()->sync($request->categories);
            $post->tags()->sync($request->tags);

            //download img
            if ($request->hasFile('image')) {
                Storage::delete($post->image);
                $image = $request->file('image');
                $imgName = time() . $image->getClientOriginalName();
                $path = $image->storeAs('blog/posts', $imgName);
                $post->image = $path;

            }

            $post->save();
            DB::commit();
            return redirect()->back()->withSuccess('Post updated');

        } catch (Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withSuccess('Error');
        }

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
