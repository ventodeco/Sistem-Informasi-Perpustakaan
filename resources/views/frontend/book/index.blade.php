@extends('frontend.templates.default')

@section('content')
 <h2>Koleksi Buku</h2>
    <blockquote>
      <p class="flow-text">Koleksi buku yang bisa kamu baca dan pinjam</p>
    </blockquote>
    <div class="row">
      @foreach($books as $book)
        @include('frontend.templates.components.card-book')
      @endforeach
        </div>	
<!-- Pagination -->
{{ $books->links('vendor.pagination.materialize') }}
  
@endsection