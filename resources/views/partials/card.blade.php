@foreach ($data as $comic)
      <div class="comic-card btn-main-s">
        <div class="card-img">
          <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-link"><img src="{{$comic['thumb']}}" alt=""></a>            
        </div>
          
        <div class="title">{{$comic['series']}}</div>
      </div>
@endforeach