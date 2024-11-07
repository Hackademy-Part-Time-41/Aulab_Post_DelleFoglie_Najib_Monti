<x-layout>

    <div class="container">
        <x-success></x-success>
        <div class="row">
            <h1 class='text-center'>Scrivi il tuo articolo</h1>
            <div class="col-8 mx-auto mt-3">

                <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 text-center">

                        <div class="my-3">
                            <label for="title">Titolo dell'Articolo</label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                            @error('title')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="my-3">
                            <label for="subtitle">Sottotitolo dell'Articolo</label>
                            <input class="form-control @error('subtitle') is-invalid @enderror" type="text" name="subtitle" id="subtitle" value="{{old('subtitle')}}">
                            @error('subtitle')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <label for="image">Inserisci un immagine</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" >
                            @error('image')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="categories[]" id="inlineRadio1" value="{{$category->id}}">
                                <label class="form-check-label" for="inlineRadio1">{{$category->name}}</label>
                            </div>
                        @endforeach

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
                    </div>

                </form>
            </div>
        </div>
        

    </div>

</x-layout>
