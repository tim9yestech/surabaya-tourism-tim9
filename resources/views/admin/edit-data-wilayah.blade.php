{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="card" style="width: 50%;">
        <div class="card-body">
            <form class="form-create" action="{{ route('update-wilayah', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama_wilayah" class="form-label">Nama Wilayah</label>
                <input type="text" name="nama_wilayah" id="nama_wilayah" class="form-control" value="{{ $data->nama_wilayah }}">

                <button type="submit" class="btn text-uppercase" style="background: #6868ac; color: #fff">Submit</button>
            </form>
        </div>
    </div>
    <a href="{{ route('data-wilayah') }}" class="btn btn-dark" type="button">
        <div class="d-flex align-items-center">
            <i class='bx bxs-left-arrow-alt' style="color: #fff;"></i> 
            <span>Back</span>
        </div>
    </a>
</div>
@endsection