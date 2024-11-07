<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="cool-12">
                <h1 class="display-1">Registrati</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('register') }}" method="POST"  class="card p-5 shadow">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-controll" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-controll" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-controll" id="password" name="password">
                        @error('password')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-controll" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="mb-3 d-flex justify-content-center flex-column align-items-center">
                        <button type="submit" class="btn btn-outline-secondary">Registrati</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>
