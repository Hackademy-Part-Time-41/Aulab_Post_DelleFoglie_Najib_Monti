<x-layout>
  <div class="container my-5">
    <div class="row justify-content-center">
      @foreach ($articles as $article )
          <div class="col-12 col-md-3 {{$article->category->colors}} mx-2">
              <x-card2 :article="$article"/>
          </div>
      @endforeach
    </div>
  </div>
</x-layout>



--politica: #ffd95b;
--economia: #40ff15;
--tech:#0800ff;
--food-drink: #f118f4;
--intrattenimento: #00dffc;
--sport:#ff0000;