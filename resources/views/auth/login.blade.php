@extends('layout.main')
@section('container')
<div class="row d-flex align-items-center justify-content-center" style="height:80vh">
    <div class="col-md-6">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 mt-4 fw-normal text-center">Masuk</h1>
          <div class="alert alert-warning mb-4" role="alert">
            <i class="bi bi-exclamation-diamond-fill"></i> Hanya admin yang dapat masuk!
          </div>
          <div class="alert alert-warning mb-4" role="alert">
            Untuk login sementara gunakan email dan password dibawah : <br>
            Email: admintdp@gmail.com <br> Pass: 123
          </div>
            <form action="{{ route('login') }}" method="POST">
              @csrf
            <div class="form-floating mb-2">
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" autofocus required value="{{ old('email') }}">
              <label for="email">Email</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Masuk</button>
          </form>
        </main>
    </div>
</div>
@endsection