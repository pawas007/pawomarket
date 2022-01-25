<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function destroy($id){
        Comment::find($id)->delete();
        return redirect()->back()->withSuccess('Comment removed');
    }
}
