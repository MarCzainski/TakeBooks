
@extends ('layout')

@section('content')

        <div class="card">
        <img class="card-img-top" src="http://ecsmedia.pl/c/cien-wiatru-b-iext50738970.jpg" style="width: 30%;">
        <div class="card-body">
            <h5 class="card-title"> <a href="/STUDIA/TakeBooks/public/book/{{$book->id}}">{{ $book->title }}</a></h5>
            <p class="card-text">{{ $book->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> Author - {{ $book->author }}</li>
                <li class="list-group-item"> Category - {{ $book->category }}</li>
                <li class="list-group-item"> Price - {{ $book->price }} zł</li>
            </ul>
            <a class="btn btn-primary" href="/STUDIA/TakeBooks/public/book/{{$book->id}}/buy" role="button">Kup teraz</a>
            <p class="card-text"><small class="text-muted">Added by M.C</small></p>
        </div>
        </div>

@endsection