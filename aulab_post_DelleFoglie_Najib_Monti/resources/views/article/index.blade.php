<x-layout>
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