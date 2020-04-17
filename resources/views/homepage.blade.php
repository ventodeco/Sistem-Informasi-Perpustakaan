@extends('frontend.templates.default')

@section('content')
 <h2>Koleksi Buku</h2>
    <blockquote>
      <p class="flow-text">Koleksi buku yang bisa kamu baca dan pinjam</p>
    </blockquote>
    <div class="row">
      @for($i = 0; $i < 10; $i++)
        <div class="col s12 m6">
          <div class="card horizontal hoverable">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>
      @endfor
        </div>	
<!-- Pagination -->
    <ul class="pagination center">
      <li class="disabled"><a href="#!"><i class="material-icons"><</i></a></li>
      <li class="active"><a href="#!">1</a></li>
      <li class="waves-effect"><a href="#!">2</a></li>
      <li class="waves-effect"><a href="#!">3</a></li>
      <li class="waves-effect"><a href="#!">4</a></li>
      <li class="waves-effect"><a href="#!">5</a></li>
      <li class="waves-effect"><a href="#!"><i class="material-icons">></i></a></li>
    </ul>
@endsection