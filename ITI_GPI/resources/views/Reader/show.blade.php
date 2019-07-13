@extends("layouts.app_stuff")
@section("title")
    book-view-show
@endsection
@section('content')
    @if($message=Session::get('message'))

        <h5 class="alert alert-success text-center">{{$message}}</h5>

    @endif
    <div class="sliderNews"id="sliderNews">
        @if($lastEight->count() >0)
            @foreach($lastEight as $lastData)
                <div class="sliderNewsBlock">
                    <div class="newsHead">
                        <h5 data-id="">{{$lastData->title}}</h5>
                    </div>
                    <img src="{{asset("upload_images/$lastData->cover")}}">
                </div>
            @endforeach
        @else

        @endif


    </div>

    <div id="books-elements">
        <div class="column column-double float-left">
            <div class="books-elements-head-title head-show">
                <h4 class="head">{{$book->title}}</h4>
                 <span class="category">{{$book->category->name}}</span>
                By <span class="publisher">{{$book->publisher->name}}</span>
            </div>
            <div class="book-show-block">
                <div class="book-show-cover">
                    <a href="/book/{{$book->id}}/review"target="_blank" rel="noopener">
                        <img src="{{asset("upload_images/$book->cover")}}" class="image">
                    </a>
                </div>
                <div class="book-show-description">
                    <p>{{$book->description}}</p>
                </div>
                <div class="book-download-review">
                    <a href="/book/{{$book->id}}/download"class="btn btn-primary">download</a>
                    <a href="/book/{{$book->id}}/review"target="_blank"rel="noopener" class="btn btn-danger">review</a>
                </div>
            </div>
            <div class="book-rate">
                {{--<form action="/rate/add"method="post">
                    <input type="range"name="evaluation"id="evaluation"value=""min="0"max="5"oninput="outputEvaluation.value=evaluation.value"id="evaluation">
                    <output name="outputEvaluation" id="outputEvaluation"></output>
                    <input type="hidden"name="book_id"value="{{$book->id}}">
                    <input type="hidden"name="_token"value="{{csrf_token()}}">
                    <input type="submit"name="done"value="done"class="btn btn-primary">
                </form>--}}
                @if($rates->count() >0)
                    @php
                        $evaluation=0;
                        $count=0;
                    @endphp
                    @foreach($rates as $rate)
                        @php
                            $evaluation+=$rate->evaluation;
                            $count++;
                        @endphp
                    @endforeach
                    @for($i=0;$i<$evaluation/$count;$i++)
                        <img src="{{asset("images/star12.png")}}"class="star-image"id="first-star" alt="">
                        @endfor
                        <span class="badge badge-info">{{$evaluation/$count}}</span>
                    @else
                    <img src="{{asset("images/Star.png")}}"class="star-image"id="first-star" alt="">
                    <img src="{{asset("images/Star.png")}}"class="star-image"id="second-star" alt="">
                    <img src="{{asset("images/Star.png")}}"class="star-image"id="third-star" alt="">
                    <img src="{{asset("images/Star.png")}}"class="star-image"id="fourth-star" alt="">
                    <img src="{{asset("images/Star.png")}}"class="star-image"id="fifth-star" alt="">
                @endif
            </div>
            <div class="star-block">
                <img src="{{asset("images/Star.png")}}"class="star-image"id="first-star" alt="">
                <img src="{{asset("images/Star.png")}}"class="star-image"id="second-star" alt="">
                <img src="{{asset("images/Star.png")}}"class="star-image"id="third-star" alt="">
                <img src="{{asset("images/Star.png")}}"class="star-image"id="fourth-star" alt="">
                <img src="{{asset("images/Star.png")}}"class="star-image"id="fifth-star" alt="">
                <form action="/rate/add"method="post">
                    <input type="hidden"name="evaluation"id="evaluation"value=""min="0"max="5"id="evaluation">
                    <input type="hidden"name="book_id"value="{{$book->id}}">
                    <input type="hidden"name="_token"value="{{csrf_token()}}">
                    <input type="submit"name="done"value="done"class="btn btn-dark">
                </form>
            </div>

            {{--<div class="book-reader">
                <span class="alert alert-success"id="readerAddBook">add book</span>
                <form action=""method="post">
                    <input type="text"name="title"value=""placeholder="title"class="form-control"id="title">
                    <input type="text"name="author_name"value=""placeholder="author name"class="form-control"id="author_name">
                    <textarea name="description" id="description" class="form-text" placeholder="description..........">

                    </textarea>
                    <div class="form-group">
                        <label for="cover">cover:</label>
                        <input type="file"name="cover"class="form-control-file"id="cover">
                    </div>
                    <div class="form-group">
                        <label for="cover">book:</label>
                        <input type="file"name="book_link"class="form-control-file"id="book_link">
                    </div>

                    <input type="text"name="isbn"value=""class="form-control"id="isbn"placeholder="write isbn number">
                    <input type="submit"name="upload_book"value="upload"id="upload_book"class="btn btn-primary">
                </form>
            </div>--}}
            <div class="book-reader-comment">
                <form action=""method="post" class="comment-form">
                    <input type="text"name="content"value=""class="form-text"placeholder="comment ..."id="contentCommentBook">
                    <input type="hidden"name="book_id"value="{{$book->id}}">
                    <input type="hidden"name="_token"value="{{csrf_token()}}">
                    <input type="submit"name="addCommentBook"value="add"class="btn btn-primary"id="addCommentBook">
                </form>
            </div>
        </div>

        <div class="coloumn float-right">
            <div class="books-elements-head-title">
                <h4 class="head">All Our Books</h4>
            </div>
            <div class="book-reader">
                @if($errors->any()>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            <span>{{$error}}</span>
                        </div>
                    @endforeach
                @else
                @endif
                <span class="alert alert-success"id="readerAddBook">add book</span>

                <form action="/book/add"method="post"enctype="multipart/form-data">
                    <input type="text"name="title"value=""placeholder="title"class="form-control"id="title">
                    <input type="text"name="author_name"value=""placeholder="author name"class="form-control"id="author_name">
                    <textarea name="description" id="description" class="form-text" placeholder="description..........">

                    </textarea>
                    <div class="form-group">
                        <label for="cover">cover:</label>
                        <input type="file" name="cover" class="form-control-file"id="cover">
                    </div>
                    <div class="form-group">
                        <label for="book_link">book:</label>
                        <input type="file" name="book_link" class="form-control-file"id="book_link">
                    </div>
                    <div class="form-group">
                        <label for="category">category</label>
                        <select name="category_id" id="category_id">
                            <option value="1">fiction</option>
                            <option value="3">advinture</option>
                        </select>
                    </div>
                    <input type="text"name="isbn"value=""class="form-control"id="isbn"placeholder="write isbn number">
                    <input type="hidden"name="_token"value="{{csrf_token()}}">
                    <input type="submit"name="upload_book"value="upload"id="upload_book"class="btn btn-primary">
                </form>
            </div>
            @if($books->count() > 0)
                @foreach($books as $book)
                    @if($book->status==1)
                        <div class="book-block">
                            <div class="book-block-cover"><a href="/book/show/{{$book->id}}"><img src="{{asset("upload_images/$book->cover")}}" alt=""></a></div>
                            <div class="bestof-content">
                                <p class="book-block-title"><a href="/book/show/{{$book->id}}">{{$book->title}}</a></p>
                                <p class="book-block-publisher">{{$book->publisher->name}}</p>
                                <p class="book-block-category">{{$book->category->name}}</p>
                            </div>
                        </div>
                @endif
            @endforeach
        @else

        @endif


        </div>


    </div>
@endsection