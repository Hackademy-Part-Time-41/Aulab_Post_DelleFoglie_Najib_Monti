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
            
            <div class="row wrap align-items-center">

              <div class="img-my col-12 col-md-11 col-lg-10 col-xl-6">
                <img class="img-fluid" src="{{Storage::url('images/Designer_35.jpeg')}}" alt="">
              </div>

              <div class="row justify-content-around col-12 col-md-9 col-xl-8 col-xxl-6">

                <div class="col-12 col-xl-4 mt-3">
                    <div class="shadow corallo-chiaro">
                        <h1 class="text-center mb-3 fw-bolder fs-1 tangerine-regular">Benvenuto nella nostra community</h1>
                     </div>
                  <p class="text-center dancing-script fs-4">
                        Ciao nuovo utente e benvenuto su Il Post-it, la tua fonte inesauribile di notizie, dalla politica all'intrattenimento, fino ad arrivare a musica e contenuti hi-tech. Qui potrai sbizzarrirti nel cercare succosi gossip e semplici informazioni, e perchè no magari anche tu potresti essere il nostro prossimo scrittore. Quindi che aspetti? Pubblica un Post-it
                      </p>
                </div>
           </div>
           <div class="col-12 row justify-content-around ">
            @foreach ($categories as $category)
              <div class="postIt corallo-chiaro col-10 col-md-3 col-lg-3 mt-3">
                <div class=""  style="min-width: 8rem">
                  {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top mt-2" alt="articolo:{{$article->title}}"> --}}
                    <img src="https://picsum.photos/400/400" class="card-img-top mt-2" alt="categoria:{{$category->name}}">
                  
                    <div class="">
                      <p class="text-center">
                        <a href="{{ route('article.byCategory', $category->id)}}" class="postIt-text fs-1 fw-bolder ">{{$category->name}}</a>
                      </p>
                    </div>
                </div>
              </div>
            @endforeach
        </div>
          </div>
          <x-footer></x-footer>
        </x-layout>