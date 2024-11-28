<x-layout class="sfondo">
    <div class="container p-5 sfondo text-center">
        
    
        <div class="p-5 text-center sfondo">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-1 text-center mb-3 tangerine-regular sfondo">Bentornato, Amministratore {{Auth::user()->name}}</h1>
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>    
                @endif
            </div>
        </div>

        <div class="p-5 sfondo">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Richieste per il ruolo di Amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>
        <div class="p-5  text-center sfondo">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Richieste per il ruolo di Revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/> 
                </div>
            </div>
        </div>
        <div class="p-5 text-center sfondo">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center tangerine-regular sfondo">Richieste per il ruolo di Redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="redattore"/> 
                </div>
            </div>
        </div>
        <hr>

        <div class="p-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Tutti i Tags</h2>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
            </div>
        </div>
        <hr>

        <div class="p-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="display-1 text-center mb-3 tangerine-regular sfondo">Tutte le Categorie</h2>
                    <form action="{{ route('admin.storeCategory') }}" method="POST" class="w-50 d-flex m-3">
                        @csrf
                        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                        <button type="submit" class="btn btn-primary">Inserisci</button>
                    </form>
                    <x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
                </div>
            </div>
        </div>
</div>
</x-layout>