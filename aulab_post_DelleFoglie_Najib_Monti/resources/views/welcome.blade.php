<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
<<<<<<< HEAD
=======
            <div class="col-12">
                <h1 class="display-1">POST-IT</h1>
            </div>
>>>>>>> parent of 45c6bc8 (frontend)

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
              <div class="d-flex col-12  col-md-9 justify-content-end col-lg-7">
                <img class="img-fluid" src="{{Storage::url('images/Designer_35.jpg')}}" alt="">
              </div>
              <div class="col-12 col-md-10 col-lg-5 shadow">
                <h2 class="text-center mb-3 fw-bold">Benvenuto nella nostra community</h2>
                <p class="text-center ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt numquam aliquid asperiores repellat distinctio possimus saepe nostrum quibusdam quis quod. Quisquam mollitia tempora nostrum qui culpa recusandae, nisi assumenda cupiditate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni corrupti harum necessitatibus laborum possimus repudiandae veniam, ut natus perferendis fugit dicta delectus architecto, distinctio eos odit dolorem, tempora impedit hic.</p>

                <div class="row justify-content-center">
                    @foreach ($articles as $article)
                      <div class="shadow sfondo col-12 col-md-5 col-lg-3">
                        <div class="" style="min-width: 6.5rem;">
                          <img src="{{Storage::url($article->image)}}" class="card-img-top mt-2 " alt="articolo:{{$article->title}}">
                          
                          <div class="">
      
                            <h5 class="fs-6">{{$article->title}}</h5>
                            <p class="fs-7">{{$article->subtitle}}</p>
                            <p class="fs-7 text-muted">Categoria:
                              <a href="{{ route('article.byCategory', $article->category)}}" class="text-muted">{{$article->category->name}}</a>
                            </p>
      
                          </div>
                          <div class="">
                              <p>redatto il {{$article->created_at->format('d/m/y')}} <br>
                                  da <a class="text-decoration-none text-dark" href="{{ route('article.byUser', $article->user)}}">{{$article->user->name}}</a></p>
                                  <a href="{{ route('article.show', $article)}}" class="btn my-btn">Leggi</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>

                {{-- <div>
                  <div>
                    <a href="{{route('article.index')}}" class="my-btn btn">Tutti gli articoli</a>
                </div>

                <div class="row justify-content-center">
                    <a href="{{route('article.create')}}" class="my-btn btn">Scrivi un articolo</a>
                </div>

                <div class=" col-1 shadow">
                  <a href="{{route('careers')}}" class="my-btn btn">Lavora con noi</a>
                </div>
                </div> --}}



              </div>
              
          
            </div>
            {{-- @dd($articles) --}}

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