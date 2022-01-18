<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $categoryPosts = CategoryPost::all();
            return response()->json($categoryPosts);
        }
        $categoryPosts = CategoryPost::paginate(10);
        return view('admin.category-post.category-post', compact('categoryPosts'));
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


    public function postFilter($slug)
    {
        $posts = Post::whereHas('categories', function ($query) use ($slug) {
            $query->whereSlug($slug);
        })->orderBy('id', 'desc')->paginate(10);
        return view('pages.blog.blog', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // API store
            $validator = Validator::make($request->json()->all(), [
                'name' => 'required|unique:category_posts',
            ]);
            if ($request->wantsJson()) {
                if ($validator->fails()) {
                    return response()->json(['errors'=>$validator->errors(), 'status' => false],);
                }
            }
            //API store
            $this->validate($request, [
                'name' => 'required|unique:category_posts',
            ]);
            $category = new CategoryPost();
            $category->name = $request->name;
            $category->save();
            if ($request->wantsJson()) {
                return response()->json(['message' => 'Category created']);
            } else {
                return redirect()->back()->withSuccess('Category created');
            }
        } catch (Throwable $e) {
            return redirect()->back()->withSuccess('Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CategoryPost $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CategoryPost $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CategoryPost $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CategoryPost $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPost $categoryPost)
    {
        $categoryPost->posts()->detach();
        $categoryPost->delete();
        return redirect()->back()->withSuccess('Category removed');
    }
}
