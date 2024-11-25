<x-layout>
    <div class="container-fluid p-5 sfondo text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center mb-3 tangerine-regular">Lavora con noi</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('careers.submit')}}" method="POST" class="card p-5 shadow corallo-chiaro">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>

                        <select name="role" id="role" class="form-control">
                            <option value="" selected disabled>Selezione ruolo</option>
                             
                            @if (!Auth::user()->is_admin)
                                <option value="admin">Amministratore</option>
                            @endif

                            @if (!Auth::user()->is_revisor)
                                <option value="writer">Redattore</option>
                            @endif
                            
                            @if (!Auth::user()->is_writer)
                                <option value="revisor">Revisore</option>
                            @endif

                           
                            
                        </select>
                        @error ('role')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">

                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                        @error('email')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Perche ti stai candidando? Raccontacelo</label>
                        <textarea class="form-control" id="message" name="message" rows="7" cols="30">{{ old('message')}}</textarea>
                        @error('message')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn my-btn">Invia candidatura</button>
                    </div>
                </form>
                
            </div>
            <div class="col-12 col-md-6 p-5">
                <h2>Lavora come amministratore</h2>
                <P>Scegliendo di lavorare come amministratore potrai gestire gli articoli e le categorie</P>
                <h2>Lavora come revisore</h2>
                <P>Scegliendo di lavorare come revisore potrai revisionare gli articoli</P>
                <h2>Lavora come redattore</h2>
                <P>Scegliendo di lavorare come redattore potrai scrivere articoli</P>
            </div>
        </div>

    </div>
</x-layout>
