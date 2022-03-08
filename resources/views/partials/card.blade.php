@foreach ($data as $comic)
      <div class="comic-card btn-main-s">
        <div class="card-img">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
          
        <div class="title">{{$comic['series']}}</div>
      </div>
@endforeach