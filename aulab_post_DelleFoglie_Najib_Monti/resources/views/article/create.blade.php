<x-layout>

    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class='display-1'>Scrivi il tuo articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-8">

                <form action="{{route('article.store') }}" method="POST" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 text-center">
                        <div class="my-3">
                            <label for="title" class="form-label">Titolo dell'Articolo</label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                            @error('title')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="subtitle" class="form-label">Sottotitolo dell'Articolo</label>
                            <input class="form-control @error('subtitle') is-invalid @enderror" type="text" name="subtitle" id="subtitle" value="{{old('subtitle')}}">
                            @error('subtitle')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="image" class="form-label">Inserisci un immagine</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" >
                            @error('image')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-select @error('category') is-invalid @enderror" name="category" id="category">
                                <option selected disabled>Seleziona una categoria</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                            </select>
                            @error('category')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="body">Corpo dell'articolo</label>
                            <input class="py-5 form-control @error('body') is-invalid @enderror" class="py-5" type="text" name="body" id="body" value="{{old('body')}}">
                            @error('body')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button class='btn btn-dark' type="submit">Pubblica articolo</button>
                        <a href="{{route('homepage')}}" class="text-secondary mt-2">Torna alla homepage</a>
                    </div>

                </form>
            </div>
        </div>
        

    </div>

</x-layout>
