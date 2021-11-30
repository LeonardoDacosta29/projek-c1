@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-4">
        @if (session()->has('sukses'))
        <div class="alert alert-primary" role="alert">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (sesion()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ sesion('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="close"></button>
        </div>
        @endif
        <main class="form-signin">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                    <label for="Password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              </form>
              <small class="d-block text-center mt-3">Belum Regis ya?<a href="/register">Registrasi lah Lokk!</a></small>
              <p class="mt-5 mb-3 text-muted">&copy; CMdit</p>
        </main>
    </div>
</div>
</div>
@endsection