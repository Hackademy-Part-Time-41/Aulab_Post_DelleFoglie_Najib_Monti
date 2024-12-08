<x-layout>
  <div class="container my-5">
    <div class="row justify-content-between">
      @foreach ($articles as $article )
          <div class="col-12 col-md-3 {{$article->category->colors}}">
              <x-card2 :article="$article"/>
          </div>
      @endforeach
    </div>
  </div>
</x-layout>
<x-footer></x-footer>