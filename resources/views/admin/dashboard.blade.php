@extends('layout.main')
@section('container')
    <div class="container mt-4">
        <h1 class="mb-5 text-center mt-5">Data Pengguna</h1>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>TIKET ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Tombol Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $tikets as $tiket )
                <tr class="searchT">
                    <td>{{ $tiket->id }}</td>
                    <td>{{ $tiket->nama }}</td>
                    <td>{{ $tiket->email }}</td>
                    <td>{{ $tiket->nomor_telepon }}</td>
                    <td>{{ $tiket->status }}</td>
                    <td>         
                        <a href="/tiket/{{ $tiket->id }}/edit" class="btn btn-sm btn-warning">Ubah</a>
                        <form action="/tiket/{{ $tiket->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
@endsection