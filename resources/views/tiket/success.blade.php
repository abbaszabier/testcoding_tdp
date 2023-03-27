@extends('layout.main')
@section('container')
  <div class="container d-flex justify-content-center align-items-center" style="height:80vh">
    <div class="text-center">
        <h1>Tiket Konser</h1>
        <p class="mt-3">Berikut adalah nomor tiket Anda:</p>
        <h2>{{ $tiket->id }}</h2>
        <p>Silakan bawa nomor tiket ini ke tempat konser pada hari H nanti.</p>
        <a href="/" class="btn btn-primary mt-3">Kembali</a>
    </div>
  </div>
@endsection