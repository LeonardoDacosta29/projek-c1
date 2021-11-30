@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
              <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
              <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="Username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                    <label for="Password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
              </form>
              <small class="d-block text-center mt-3">Udah daftar kan?<a href="/login">Login yak sini!</a></small>
              <p class="mt-5 mb-3 text-muted">&copy; CMdit</p>
        </main>
    </div>
</div>
</div>
@endsection