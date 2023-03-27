@extends('layout.main')
@section('container')
    <div class="container mt-4">
        <h1 class="mb-5 text-center mt-5">Data Pengguna</h1>
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
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
                        <button type="button" class="btn btn-sm btn-primary">Ubah</button>
                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
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