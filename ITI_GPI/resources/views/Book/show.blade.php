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
                <form action="/rate/add"method="post">
                    <input type="range"name="evaluation"id="evaluation"value=""min="0"max="100"oninput="outputEvaluation.value=evaluation.value"id="evaluation">
                    <output name="outputEvaluation" id="outputEvaluation"></output>
                    <input type="hidden"name="book_id"value="{{$book->id}}">
                    <input type="hidden"name="_token"value="{{csrf_token()}}">
                    <input type="submit"name="done"value="done"class="btn btn-primary">
                </form>
            </div>


        </div>

        <div class="coloumn float-right">
            <div class="books-elements-head-title">
                <h4 class="head">All Our Books</h4>
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