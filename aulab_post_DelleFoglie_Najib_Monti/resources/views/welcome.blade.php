<x-layout>
    <div class="container-fluid bgc-yellow">
        <div class="row justify-content-center">

            @if (session('message'))
                <div class="alert alert-success">
                  {{session('message')}}
                </div>
            @endif

            @if (session('alert'))
                <div class="alert alert-danger">
                  {{session('alert')}}
                </div>
            @endif
            
            <div class="row wrap shadow align-items-center">

              <div class="img-my col-12 col-md-11 col-lg-10 col-xl-7">
                <img class="img-fluid" src="{{Storage::url('images/Designer_35.jpeg')}}" alt="">
              </div>

              <div class="col-12 col-md-11 col-lg-10 col-xl-5">

                <h2 class="text-center mb-3 fw-bolder tangerine-regular fs-1">Benvenuto nella nostra community</h2>
                <p class="text-center dancing-script fs-3 fw-bolder">
                  Ciao nuovo utente e benvenuto su Il Post-it, la tua fonte inesauribile di notizie, dalla politica all'intrattenimento, fino ad arrivare a musica e contenuti hi-tech. Qui potrai sbizzarrirti nel cercare succosi gossip o semplici imformazioni, e perchè no magari anche tu potresti essere il nostro prossimo scrittore. Quindi che aspetti? Pubblica un Post-it 
                </p>

                <div class="row justify-content-center">
                    @foreach ($articles as $article)
                      <div class="shadow postIt  col-10 col-md-3 col-lg-2">
                        <div class=""  style="min-width: 8rem">
                           <img src="{{Storage::url($article->image)}}" class="card-img-top mt-2" alt="articolo:{{$article->title}}"> 
                          
                          
                          <div class="">
      
                            <h4 class="text-center postIt-text">{{$article->title}}</h4>
                            <p class="text-center postIt-text">{{$article->subtitle}}</p>
                            <p class="text-center">
                              <a href="{{ route('article.byCategory', $article->category)}}" class="postIt-text">{{$article->category->name}}</a>
                            </p>
      
                          </div>
                          <div class="text-center">
                                  <a href="{{ route('article.show', $article)}}" class="postIt-text my-btn">Leggi</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>

              </div>

              <div class="col-xl-4">
              <h3 class="text-center fw-bold">Crea anche tu il tuo Post-it</h3>
              <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum at libero tempora vel unde dolor similique itaque magnam aut dicta saepe error, eveniet soluta molestias, delectus, perferendis aliquid. Incidunt, ipsam.</p>
              <div class="row justify-content-center">
                <div class="col-12">
                  <a href="{{route('article.create')}}" class="btn my-btn d-block">Crea Post-it</a>
                </div>
              </div>
            </div>
          
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

                    </div>
                    <div class="card-footer d-flex justify-content-between align-item-center">
                        <p>redatto il {{$article->created_at->format('d/m/y')}} <br>
                            da <a href="{{ route('article.byUser', $article->user)}}">{{$article->user->name}}</a></p>
                            <a href="{{ route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                    </div>
                  </div>
            </div>  
            @endforeach
        </div>
    </div>
</x-layout>