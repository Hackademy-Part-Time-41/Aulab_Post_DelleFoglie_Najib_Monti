<x-layout>
    <div class="container-fluid p-5 sfondo text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center mb-3 tangerine-regular">Bentornato, Redattore {{Auth::user()->name}}</h1> 
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in attesa di revisione</h2>
                <x-writer-articles-table :articles="$unrevisionedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <x-writer-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <x-writer-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>    
        @endif
    </div>


</x-layout>