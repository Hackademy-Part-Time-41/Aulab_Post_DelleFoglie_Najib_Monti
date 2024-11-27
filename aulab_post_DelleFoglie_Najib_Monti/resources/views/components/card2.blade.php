
      <div class="d-flex justify-content-center mt-2">
        <img src="{{Storage::url($article->image)}}" class="img-fluid my-img-card" alt="immagine dell'articolo:{{$article->title}}">
      </div>
      
      <div class="card-body">
        <h5 class="card-title overflow-hidden ">{{$article->title}}</h5>
        <p class="card-subtitle overflow-hidden mt-1">{{$article->subtitle}}</p>

        @if ($article->category)
            <p class="small text-muted">Categoria:
                <a href="{{ route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
            </p>
        @else
            <p class="small text-muted">Nessuna Categoria</p>
        @endif
        <p class="small text-muted">
          @foreach ($article->tags as $tag)
              #{{$tag->name}}
          @endforeach
        </p>
        <p class="card-subtitle text-muted fst-italic small">Tempo di lettura: {{$article->readDuration()}} min</p>
      </div>

      <div class="card-footer d-flex justify-content-between align-item-center">
          <p>redatto il {{$article->created_at->format('d/m/y')}} <br>
              da <a href="{{ route('article.byUser', $article->user)}}" class="text-muted">{{$article->user->name}}</a></p>
      </div>
      
      <div class="d-flex justify-content-center">
        <a href="{{ route('article.show', $article)}}" class="my-btn mb-2 card-button btn">Leggi</a>
      </div>
      

