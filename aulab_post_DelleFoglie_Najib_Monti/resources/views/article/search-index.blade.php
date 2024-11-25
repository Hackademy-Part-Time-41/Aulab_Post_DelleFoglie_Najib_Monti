<x-layout>
    <div class="container-fluid p-5 sfondo text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center mb-3 tangerine-regular">Tutti gli articoli per {{$query}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
          @foreach ($articles as $article )
              <div class="col-12 col-md-3">
                  <x-card2 :article="$article"/>
              </div>
          @endforeach
        </div>
    </div>

</x-layout>
