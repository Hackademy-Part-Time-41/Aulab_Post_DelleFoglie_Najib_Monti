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

              <div class="img-my col-12 col-md-11 col-lg-10 col-xl-6">
                <img class="img-fluid" src="{{Storage::url('images/Designer_35.jpeg')}}" alt="">
              </div>

              <div class="row justify-content-around col-12 col-md-9 col-xl-8 col-xxl-6">

                <div class="col-12 col-xl-4 mt-3">
                    <h2 class="text-center mb-3 fw-bolder fs-1 tangerine-regular">Benvenuto nella nostra community</h2>
                      <p class="text-center ">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt numquam aliquid asperiores repellat distinctio possimus saepe nostrum quibusdam quis quod. Quisquam mollitia tempora nostrum qui culpa recusandae, nisi assumenda cupiditate! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni corrupti harum necessitatibus laborum possimus repudiandae veniam, ut natus perferendis fugit dicta delectus architecto, distinctio eos odit dolorem, tempora impedit hic.
                      </p>
                </div>


                {{-- <div class="col-12 row justify-content-around">
                  @foreach ($articles as $article)
                    <div class="shadow postIt  col-10 col-md-3 col-lg-2">
                      <div class=""  style="min-width: 8rem">
                        {{-- <img src="{{Storage::url($article->image)}}" class="card-img-top mt-2" alt="articolo:{{$article->title}}"> --}}
                          {{-- <img src="https://picsum.photos/400/400" class="card-img-top mt-2" alt="articolo:{{$article->title}}">
                        
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
              </div> --}} 
           </div>
           <div class="col-12 row justify-content-around ">
            @foreach ($categories as $category)
              <div class="shadow postIt  col-10 col-md-3 col-lg-3 mt-3">
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
</x-layout>