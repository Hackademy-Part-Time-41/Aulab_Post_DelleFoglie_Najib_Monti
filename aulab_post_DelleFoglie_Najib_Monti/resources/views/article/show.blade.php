<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtitle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">{{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{Storage::url($article->image)}}" class="img-fluid" alt="immagine dell'articolo:{{$article->title}}">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <p class="fs-5">Categoria:
                        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted fw-bold">{{$article->category->name}}</a>
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
                    <div class="text-muted my-3">
                        <p>Redatto il {{$article->created_at->format('d/m/y')}} da 
                            <a href="{{route('article.byUser', $article->user)}}}}">{{$article->user->name}}</a></p>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex justify-content-evenly">
                                <form action="{{route('revisor.acceptArticle', $article)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">Rimanda in revisione</button>
                                </form>
                                <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancella l'articolo</button">
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="text-secondary">Vai alla lista degli articoli</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
