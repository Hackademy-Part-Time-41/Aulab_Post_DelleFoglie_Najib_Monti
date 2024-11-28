<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtitle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="tangerine-regular">{{$category->name}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-between">
          @foreach ($articles as $article )
              <div class="col-12 col-md-3 {{$article->category->colors}} m-2 ">
                  <x-card2 :article="$article"/>
              </div>
          @endforeach
        </div>
    </div>

</x-layout>