{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <div class="container">
        <div class="d-flex" style="width: 60%;">
            <a href="{{ route('tambah-wilayah') }}">
                <button type="button" class="btn btn-primary ms-auto">Tambah Data</button>
            </a>
        </div>
        <table class="table table table-striped" style="width: 60%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Wilayah</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            {{-- @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->nama_wilayah }}</td>
                    <td>{{ $row->created_at->diffForHumans() }}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Ubah</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach --}}
            </tbody>
        </table>
    </div>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection