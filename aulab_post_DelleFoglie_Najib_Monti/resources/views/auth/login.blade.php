<x-layout class="sfondo">
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center tangerine-regular">ACCEDI</h1>
            </div>
        </div>
        <div class="container m-6 p-3 mb-2 grigio-chiaro">
            <div class="row justify-content-center p-3 mb-2 grigio-chiaro">
                <div class="col-12 col-md-8 navText">
                    <form action="{{ route('login') }}" method="POST" class="card p-5 shadow p-3 mb-2 corallo-chiaro text-dark">
                        @csrf
                        <div class="mb-3">
                            {{-- allineato label --}}
                            <label for="email" class="form-label ms-4">E-mail</label>
                            <input type="email" class="form-contol" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-contol" id="password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
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