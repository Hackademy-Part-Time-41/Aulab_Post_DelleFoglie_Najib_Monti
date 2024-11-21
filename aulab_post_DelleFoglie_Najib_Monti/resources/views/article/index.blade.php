<x-layout>
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="display-1 text-center mb-3 tangerine-regular">Tutti gli articoli</h1>
        </div>
        @foreach ($articles as $article )
          <div class="col-12 col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="immagine dell'articolo:{{$article->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-subtitle">{{$article->subtitle}}</p>
                  
                  <p class="small text-muted">Categoria:
                    <a href="{{ route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
                  </p>
                  @if ($article->category)
                      <p class="small text-muted">
                          <a href="{{ route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
                      </p>
                  @else
                      <p class="small text-muted">Nessuna Categoria</p>
                  @endif
                  <p class="small text-muted my-0">
                    @foreach ($article->tags as $tag)
                        #{{$tag->name}}
                    @endforeach
                  </p>
                </div>
                <div class="card-footer d-flex justify-content-between align-item-center">
                    <p>redatto il {{$article->created_at->format('d/m/y')}} <br>
                        da <a href="{{ route('article.byUser', $article->user)}}" class="text-capitalize">{{$article->user->name}}</a></p>
                        <a href="{{ route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                </div>
              </div>
        </div>  
        @endforeach
    </div>
</x-layout>