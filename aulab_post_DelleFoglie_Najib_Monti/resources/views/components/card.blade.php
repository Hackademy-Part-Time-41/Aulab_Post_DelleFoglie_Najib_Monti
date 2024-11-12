<div class="d-flex flex-wrap justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="{{$image ?? "https://picsum.photos/200/600"}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">{{$title ?? "titolo"}}</h4>
          <h6 class="card-subtitle">{{$subtitle ?? "sottotitolo"}}</h6>
          <p class="card-text">{{$body ?? "body"}}</p>
          <a href="#" class="btn btn-primary">Apri articolo completo</a>
        </div>
      </div>
</div>