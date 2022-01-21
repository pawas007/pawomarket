<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $tags = Tag::all();
            return response()->json($tags );
        }
        $tags = Tag::paginate(10);
        return view('admin.tag.tag',compact('tags'));

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
        try {
            // API store
            $validator = Validator::make($request->json()->all(), [
                'name' => 'required|unique:tags',
            ]);
            if ($request->wantsJson()) {
                if ($validator->fails()) {
                    return response()->json(['errors'=>$validator->errors(), 'status' => false],);
                }
            }
            //API store
            $this->validate($request, [
                'name' => 'required|unique:tags',
            ]);
            $tag = new Tag();
            $tag->name = $request->name;
            $tag->save();

            if ($request->wantsJson()) {
                return response()->json(['message' => 'Tag created']);
            } else {
                return redirect()->back()->withSuccess('Tag created');
            }
        } catch (Throwable $e) {
            return redirect()->back()->withSuccess('Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function tagFilter($slug)
    {
        $posts = Post::whereHas('tags', function ($query) use ($slug) {
            $query->whereSlug($slug);
        })->orderBy('id', 'desc')->paginate(10);
        return view('pages.blog.blog', compact('posts'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.tag-edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {

        $this->validate($request, [
            'name' => 'required|unique:tags',
        ]);

        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name,'-');
        $tag->save();

        return  redirect()->route('tag')->withSuccess('Tag updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        return redirect()->back()->withSuccess('Tag removed');

    }
}
