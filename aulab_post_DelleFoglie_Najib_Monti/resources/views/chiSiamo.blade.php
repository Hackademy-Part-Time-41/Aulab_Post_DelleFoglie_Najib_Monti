<x-layout>
    <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
        <h1 class="display-1 text-center mb-3 tangerine-regular">Chi siamo</h1>   
    </div>
        <div class="container d-flex justify-content-center align-items-center mt-5">
            <p class="text-center dancing-script p-2 fs-1 shadow corallo-chiaro">Post-it è un progetto nato nel novembre 2024 da un gruppo di studenti di Informatica con l’obiettivo di creare una piattaforma dinamica e interattiva per la gestione di articoli. Il nostro sito non si limita a offrire contenuti informativi, ma consente agli utenti di non solo leggere, ma anche di pubblicare articoli, creando così una community attiva e coinvolta. Vogliamo offrire un'esperienza divertente e stimolante, dove chiunque possa condividere idee, scoprire nuove informazioni e partecipare attivamente al sito.</p>
        </div>

        <div class="col-12 justify-content-around row">
            <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/b85a76c9-0b41-4af1-a113-ab561b580d9f.jpeg') }}" class="img-fluid my-img-card rounded">
                </div>
                <div>
                    <h3 class="text-center">Simone Delle Foglie</h3>
                    <p class="text-center">Sono nato a Bari, il 24/08/2000. Ho da poco conseguito la laurea triennale in ingegneria gestionale al Politecnico di Bari.</p>
                </div>
            </div>
            
            <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/bef04f61-16c1-40ca-b34d-7e05346166c7.jpeg') }}" class="img-fluid my-img-card rounded">
                </div>
                <div>
                    <h3 class="text-center">Mohamed Najib</h3>
                    <p class="text-center">Sono nato a Brescia, il 25/09/2001. Sono un ragazzo molto semplice che ama la libertà, nel tempo libero mi piace giocare a calcio.</p>
                </div>
            </div>
        
            <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/5297e45b-99ef-459a-bba0-33739808481f.jpeg') }}" class="img-fluid my-img-card rounded">
                </div>
                <div>
                    <h3 class="text-center">Francesco Baillobay Monti</h3>
                    <p class="text-center">Sono nato a Piacenza, il 26/12/1989. Cantante, scrittore, amante degli anime e dei film horror, artista a tutto tondo, appassionato di tecnologia</p>
                </div>
            </div>
        </div>
</x-layout>

{{-- <div class="col-12 justify-content-around row">
    
        <div class="shadow corallo-chiaro col-10 col-md-3 col-lg-3 mt-3">
            <div style="min-width: 8rem" >
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/b85a76c9-0b41-4af1-a113-ab561b580d9f.jpeg') }}" class="img-fluid my-img-card">
                </div>
              
                <div>
                    <h3 class="text-center">Simone Delle Foglie</h3>
                    <p class="text-center">Sono nato a Bari, il 24/08/2000. 
                        Ho da poco conseguito la laurea triennale in ingegneria gestionale al Politecnico di Bari.
                        I miei hobby sono i film/serie tv, il calcio e l’informatica.
                        Sono una persona solare, umile e pronta ad imparare da chiunque possa insegnarmi qualcosa.</p>
                </div>
            </div>
        </div>
    
    
    
        <div class="shadow corallo-chiaro col-10 col-md-3 col-lg-3 mt-3">
            <div style="min-width: 8rem" >
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/bef04f61-16c1-40ca-b34d-7e05346166c7.jpeg') }}" class="img-fluid my-img-card">
                </div>
              
                <div>
                    <h3 class="text-center">Mohamed Najib</h3>
                    <p class="text-center">Sono nato a Brescia il 25/09/2001. Sono un ragazzo molto semplice che ama la libertà, nel tempo libero mi piace giocare a calcio e passare il tempo al computer</p>
                </div>
            </div>
        </div>
    
    
    
        <div class=" corallo-chiaro col-10 col-md-3 col-lg-3 mt-3">
            <div style="min-width: 8rem" >
                <div class="d-flex justify-content-center mt-2">
                    <img src="{{ Storage::url('images/5297e45b-99ef-459a-bba0-33739808481f.jpeg') }}" class="img-fluid my-img-card">
                </div>
              
                <div>
                    <h3 class="text-center">Francesco Monti</h3>
                    <p class="text-center">Sono nato a Brescia il 25/09/2001. Sono un ragazzo molto semplice che ama la libertà, nel tempo libero mi piace giocare a calcio e passare il tempo al computer</p>
                </div>
            </div>
        </div>
    
</div> --}}

{{-- <div class="col-12 justify-content-around row">
    
    <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
        <div class="d-flex justify-content-center mt-2">
            <img src="{{ Storage::url('images/b85a76c9-0b41-4af1-a113-ab561b580d9f.jpeg') }}" class="img-fluid my-img-card rounded my-img-card1">
        </div>
        <div>
            <h3 class="text-center">Simone Delle Foglie</h3>
            <p class="text-center">Sono nato a Bari, il 24/08/2000. Ho da poco conseguito la laurea triennale in ingegneria gestionale al Politecnico di Bari.</p>
        </div>
    </div>
    
    <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
        <div class="d-flex justify-content-center mt-2">
            <img src="{{ Storage::url('images/bef04f61-16c1-40ca-b34d-7e05346166c7.jpeg') }}" class="img-fluid my-img-card rounded my-img-card1">
        </div>
        <div>
            <h3 class="text-center">Mohamed Najib</h3>
            <p class="text-center">Sono nato a Brescia il 25/09/2001. Sono un ragazzo molto semplice che ama la libertà, nel tempo libero mi piace giocare a calcio.</p>
        </div>
    </div>

    <div class="corallo-chiaro col-10 col-md-3 col-lg-3 mt-3 p-3 rounded shadow-card">
        <div class="d-flex justify-content-center mt-2">
            <img src="{{ Storage::url('images/5297e45b-99ef-459a-bba0-33739808481f.jpeg') }}" class="img-fluid my-img-card rounded my-img-card1">
        </div>
        <div>
            <h3 class="text-center">Francesco Monti</h3>
            <p class="text-center">Sono nato a Brescia il 25/09/2001. Sono un ragazzo molto semplice che ama la libertà, nel tempo libero mi piace giocare a calcio.</p>
        </div>
    </div>

</div> --}}




<x-footer></x-footer>


