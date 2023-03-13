{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <div class="container">
        <h1 class="mb-5">Tambah Data Admin</h1>
        <div class="card" style="width: 40%;">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="form-label">Nama Admin</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">

                    <label for="email" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">

                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="contributor">Contributor</option>
                    </select>

                    <button type="submit" class="btn btn-secondary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection