<x-layout class="sfondo">
    <body>
        
    
    <div class="container-fluid p-5 text-center sfondo">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center mb-3 tangerine-regular sfondo">Bentornato, Amministratore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>    
    @endif
    <div class="container my-5 sfondo">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Richieste per il ruolo di Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5  text-center sfondo">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Richieste per il ruolo di Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/> 
            </div>
        </div>
    </div>
    <div class="container-fluid p-5 text-center sfondo">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="display-1 text-center tangerine-regular sfondo">Richieste per il ruolo di Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/> 
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="display-1 text-center tangerine-regular sfondo ">Tutti i Tags</h2>
                <x-metainfo-table :metaInfos ="$tags" metaType="tags"/>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center tangerine-regular sfondo ">Tutte le categorie</h2>
                    <x-metainfo-table :metaInfos ="$categories" metaType="categorie"/>
                </div>
            </div>
        </div>
    </div>
</body>
</x-layout>