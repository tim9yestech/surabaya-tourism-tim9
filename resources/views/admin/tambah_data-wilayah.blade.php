{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <div class="container">
        <h1 class="mb-5">Tambah Data Wilayah</h1>
        <div class="card" style="width: 40%;">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nama_wilayah" class="form-label">Nama Wilayah</label>
                    <input type="text" name="nama_wilayah" id="nama_wilayah" class="form-control">
                    <div class="form-text mb-4">
                        Wilayah Surabaya dan sekitarnya
                    </div>
                    <button type="submit" class="btn btn-secondary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection