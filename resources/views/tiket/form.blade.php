@extends('layout.main')
@section('container')
<div class="row justify-content-center ">
  <div class="card col-lg-4 shadow mt-5" style="width: 500px; height: auto;">
    <main class="form-regisration w-100 m-auto">
      <h2 class="h3 mb-4 mt-4 fw-normal text-center">Portal Pemesanan Tiket</h2>
        <form action="/success" method="POST">
          @csrf
        <div class="form-floating mb-2">
          <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">
          <label for="nama">Nama</label>
          @error('nama')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="text" name="nomor_telepon" class="form-control rounded-bottom @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="Nomor telepon">
          <label for="nomor_telepon">Nomor Telepon</label>
          @error('nomor_telepon')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="number" name="tiket" class="form-control rounded-bottom @error('tiket') is-invalid @enderror" id="tiket" placeholder="Tiket">
          <label for="tiket">Tiket</label>
          @error('tiket')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-3 mt-3" type="submit">Pesan</button>
      </form>
    </main>
  </div>
</div>
@endsection