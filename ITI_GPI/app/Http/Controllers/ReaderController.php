<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\Post;
use Auth;

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

    public function profile(){
        $reader_id=!Auth::guest()?Auth::user()->id:2;
        $books=Book::where("publisher_id",$reader_id)->get();
        $lastEight=Book::orderBy('id','DESC')->skip(0)->take(8)->get();
        $reader_posts=Post::where("user_id",$reader_id)->get();
        $comments=Comment::all();
        return view("Reader.profile")->with('books',$books)->with('lastEight',$lastEight)
            ->with('reader_posts',$reader_posts)->with('comments',$comments);

    }
}
