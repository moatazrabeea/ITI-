<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\Post;

class ReaderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }    public function index(){
        $posts=Post::all();
        $comments=Comment::all();
        $books=Book::all();
        $lastEight=Book::orderBy('id','DESC')->skip(0)->take(8)->get();
        return view("Reader.index")->with('books',$books)->with("lastEight",$lastEight)->with('posts',$posts)->with("comments",$comments);
    }
}
