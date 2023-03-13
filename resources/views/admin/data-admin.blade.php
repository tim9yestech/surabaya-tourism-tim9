{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-7">
                    <a href="{{ route('tambah-admin') }}" class="btn btn-primary"><i class="fa-solid fa-square-plus" style="margin-right: 4;"></i>Tambah Data Admin</a>
                </div>
                <div class="col-md-5">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="masukkan kata kunci"
                                autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="btn btn-secondary pl-4 pr-4">cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="scroll">
                <table class="table table-striped table-bordered mt-4">
                    <thead style="text-align: center;">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th colspan="2" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->role }}</td>
                            <td style="text-align: center;"><i
                                    class="fa-solid fa-pen-to-square bg-success p-2 text-white rounded"
                                    data-toggle="tooltip" title="Edit"></i></td>
                            <td style="text-align: center;"><i
                                    class="fa-solid fa-trash-can bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                    title="Delete"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection