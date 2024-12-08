<x-layout class="sfondo">
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center tangerine-regular">Registrati</h1>
            </div>
        </div>
        <div class="container m-6 p-3 mb-2 grigio-chiaro">
            <div class="row justify-content-center p-3 mb-2 grigio-chiaro">
                <div class="col-12 col-md-8">
                    <form action="{{ route('register') }}" method="POST" class="card p-5 shadow p-3 mb-2 corallo-chiaro text-dark">
                        @csrf
                        <!-- Nome Utente -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="name" class="form-label me-3 text-center w-25">Nome Utente</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control w-50">
                        </div>
                        @error('name')
                                <span class="text-danger"> {{$message}}</span>
                        @enderror

                        <!-- Email -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="email" class="form-label me-3 text-center w-25">E-mail</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control w-50">
                        </div>
                        @error('email')
                                <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <!-- Password -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="password" class="form-label me-3 text-center w-25">Password</label>
                            <input type="password" id="password" name="password" class="form-control w-50">
                        </div>
                        @error('password')
                                <span class="text-danger"> {{ $message }}</span>
                        @enderror

                        <!-- Conferma Password -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="password_confirmation" class="form-label me-3 text-center w-25">Conferma Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control w-50">
                        </div>

                        <!-- Bottone Registrati -->
                        <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                            <button type="submit" class="btn btn-outline-secondary my-btn">Registrati</button>
                        </div>

                        <!-- Link per il login -->
                        <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                            <p class="mt-2">Hai già un account?</p>
                            <a href="{{ route('login') }}" class="text-black">Clicca Qui per Accedere</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<x-footer></x-footer>

