{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <input class="form-control light-table-filter" data-table="table-hover" type="search" aria-invalid="false" placeholder="Cari administrator">
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('tambah-admin') }}" class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#modal-create">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="scroll">
            <div class="table-responsive">             
                <table class="table table-bordered" id="tableku">
                    <thead style="font-size: 14px;">
                        <tr>
                            <th class="text-center" width="1%">No</th>
                            <th class="text-center" width="25%">Nama</th>
                            <th class="text-center">Role</th>                
                            <th class="text-center">Email</th>   
                            <th colspan=3 class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 13px;">
                        <?php $no=1; ?>
                        @foreach ($data as $row)
                        <tr>
                            <td class="text-center">{{ $no }}</td>
                            <td>{{ $row->name }}</td>
                            <td class="text-center">{{ $row->role }}</td>
                            <td>{{ $row->email }}</td>
                            <td class="text-center">                  
                                <a class="btn btn-sm btn-info" href=""><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning" href=""><i class="fa fa-wrench"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> --}}
                {{-- Form Tambah Admin --}}
                {{-- <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Admin</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" class="form-control" id="role" name="role">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection