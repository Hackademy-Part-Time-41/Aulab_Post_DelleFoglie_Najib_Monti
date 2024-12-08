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

              <div class="row justify-content-around col-12 col-md-9 col-xl-6 col-xxl-6">

                <div class="col-10 mt-3">
                    <div class="shadow corallo-chiaro">
                        <h1 class="text-center mb-3 display-3 tangerine-regular">Benvenuto nella nostra community</h1>
                     </div>
                     <div class="text-center">
                      {{-- modificata struttura del div del testo di benvenuto nella community --}}
                        <p class="dancing-script fs-5">
                          Siamo felici di averti con noi! Qui troverai una fonte inesauribile di notizie, dalle ultime in politica all'intrattenimento, passando per musica, gossip e tecnologie all'avanguardia.
                          Esplora liberamente i contenuti, scopri storie interessanti e, perché no, magari un giorno sarai tu a scrivere per noi!
                          Quindi, cosa aspetti? Pubblica il tuo primo Post-it e unisciti alla nostra community!
                        </p>
                     </div>
                </div>
           </div>
           <div class="col-12 row justify-content-around ">
            @foreach ($categories as $category)
              <div class="postIt corallo-chiaro {{$category->colors}} col-10 col-md-3 col-lg-3 mt-3">
                <div style="min-width: 8rem" >
                  {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top mt-2" alt="articolo:{{$article->title}}"> --}}
                    <img src="{{Storage::url('images/sticky-note.jpg')}}" class="card-img-top mt-2" alt="categoria:{{$category->name}}">
                  
                    <div>
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