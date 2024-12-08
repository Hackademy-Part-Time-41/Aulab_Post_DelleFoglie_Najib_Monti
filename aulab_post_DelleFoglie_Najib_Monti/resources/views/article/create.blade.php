<x-layout>

    <div class="container-fluid p-5 sfondo text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center mb-3 tangerine-regular">Scrivi il tuo articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            
            <div class="col-12 col-md-8">

                <form action="{{route('article.store') }}" method="POST" class="card p-5 shadow corallo-chiaro" enctype="multipart/form-data">
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

                        <div class="mb-3">
                            <label for="tags" class="form-label">Tag</label>
                            <input class="form-control @error('tags') is-invalid @enderror" type="text" name="tags" id="tags" value="{{old('tags')}}">
                            @error('tags')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="body" class="form-label">Corpo dell'articolo</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" type="text" name="body" id="body" value="{{old('body')}}">
                            </textarea>
                            @error('body')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                        </div>

                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button class='btn my-btn' type="submit">Pubblica articolo</button>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="{{route('homepage')}}" class="text-dark mt-2 ms-2">Torna alla homepage</a>
                    </div>
                        

                </form>
            </div>
        </div>
        

    </div>

</x-layout>

<x-footer></x-footer>
