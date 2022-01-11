<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{






public function create(CommentRequest $request)
{

    $comment= new Comment();
    $modelType = $request->type;
    switch ($modelType) {
        case 'product':
            $comment->commentable()->associate(Product::findOrFail($request->id));
            break;
        case 'post':
            $comment->commentable()->associate(Post::findOrFail($request->id));
            break;
    }
    $comment->email = $request->message;
    $comment->message = $request->message;
    $comment->name = $request->name;
    $comment->save();





}






}
