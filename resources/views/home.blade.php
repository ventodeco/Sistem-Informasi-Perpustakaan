@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <h4>Buku yang sedang dipinjam</h4>

        @foreach($books as $book)
        	<div class="col s12 m12">
	          <div class="card horizontal hoverable">
	            <div class="card-image">
	              <img src="{{ $book->getCover() }}" height="200px">
	            </div>
	            <div class="card-stacked">
	              <div class="card-content">
	                
	                <h6><a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 20) }}</a></h6>
	                <p>{{ Str::limit($book->description ,100) }}</p>
	                <p>
                	<i class="material-icons">person</i> : {{ $book->author->name }}
                </p>

                <p>
                	<i class="material-icons">book</i> : {{ $book->qty }}
                </p>
	              </div>
	            </div>
	          </div>
	        </div>
        @endforeach

    </div>

@endsection