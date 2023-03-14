{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="card" style="width: 50%;">
        <div class="card-body">
            <form class="form-create" action="{{ route('update-admin', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Nama Admin</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">

                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control" value="{{ $data->role }}">
                    <option>--Pilih Role--</option>
                    <option value="admin">Admin</option>
                    <option value="contributor">Contributor</option>
                </select>

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}">

                <button type="submit" class="btn text-uppercase" style="background: #6868ac; color: #fff">Submit</button>
            </form>
        </div>
    </div>
    <a href="{{ route('data-admin') }}" class="btn btn-dark" type="button">
        <div class="d-flex align-items-center">
            <i class='bx bxs-left-arrow-alt' style="color: #fff;"></i> 
            <span>Back</span>
        </div>
    </a>
</div>
@endsection