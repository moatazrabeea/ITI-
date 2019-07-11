<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class AdminController extends Controller
{

    public function index()
    {

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
    public function showBooks(){
        $books=Book::all();
        return view("Admin.book")->with("books",$books);
    }
    public function approvedBooks(Request $request){
        $id=$request->input("book_id");
        $status=$request->input("status");
        $book=Book::find($id);
        $book->id=$id;
        $book->status=$status;
        $book->save();
        return redirect('admin/book');
    }
}
