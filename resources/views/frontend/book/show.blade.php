@extends('frontend.templates.default')

@section('content')
	
	<div class="col s12 m12">
		<h4>Detail Buku</h4>
          <div class="card horizontal hoverable">
            <!-- <div class="card-image"> -->
              <img src="{{ $book->getCover() }}">
            <!-- </div> -->
            <div class="card-stacked">
              <div class="card-content">
                
                <h4 class="red-text accent-2">{{ $book->title }}</h4>
                <blockquote>
	                <p>{{ $book->description }}</p>
                </blockquote>
                <p>
                	<i class="material-icons">person</i> : {{ $book->author->name }}
                </p>

                <p>
                	<i class="material-icons">book</i> : {{ $book->qty }}
                </p>

              </div>
              <div class="card-action">
                <form action="{{ route('book.borrow', $book) }}" method="post">
                  @csrf
                  <input type="submit" value="Pinjam Buku" name="" class="btn red accent-3 right waves-effect waves-light">
                </form>
            </div>
          </div>
        </div>

<h4>Buku Lainnya dari penulis {{ $book->author->name }}</h4>

<div class="row">
	
      @foreach($book->author->books->shuffle()->take(4) as $book)
        @include('frontend.templates.components.card-book')
      @endforeach
@endsection