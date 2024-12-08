<x-layout class="sfondo">
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center tangerine-regular">Accedi</h1>
            </div>
        </div>
        <div class="container m-6 p-3 mb-2 grigio-chiaro">
            <div class="row justify-content-center p-3 mb-2 grigio-chiaro">
                <div class="col-12 col-md-8">
                    <form action="{{ route('login') }}" method="POST" class="card p-5 shadow p-3 mb-2 corallo-chiaro text-dark">
                        @csrf
                        <!-- Email -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="email" class="form-label me-3 w-25">Email</label>
                            <input type="email" class="form-control w-50" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Password -->
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <label for="password" class="form-label me-3 w-25">Password</label>
                            <input type="password" class="form-control w-50" id="password" name="password">
                        </div>
                        @error('password')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <!-- Bottone Accedi -->
                        <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                            <button type="submit" class="btn btn-outline-secondary my-btn">Accedi</button>
                            <p class="mt-2">Non sei ancora registrato?</p>
                            <a href="{{ route('register') }}" class="text-black">Clicca Qui</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<x-footer></x-footer>
