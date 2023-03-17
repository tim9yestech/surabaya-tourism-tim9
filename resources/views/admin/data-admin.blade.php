{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <input class="form-control light-table-filter" data-table="table-hover" type="search" aria-invalid="false" placeholder="Cari administrator">
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-create">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
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
                                <td class="text-center text-capitalize">{{ $row->role }}</td>
                                <td>{{ $row->email }}</td>
                                <td class="text-center">      
                                    <a class="btn btn-sm btn-warning" type="button" href="{{ route('edit-admin', $row->id) }}">
                                        <i class="fa fa-wrench"></i>
                                    </a>            
                                    <a class="btn btn-sm btn-danger" href="{{ route('hapus-admin', $row->id) }}"><i class="fa fa-trash"></i></a>
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

{{-- Tambah Data --}}
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" style="max-width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-uppercase">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Form Tambah Admin --}}
                <form class="form-create" action="{{ route('tambah-admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="form-label">Nama Admin</label>
                    <input type="text" name="name" id="name" class="form-control">
    
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option>--Pilih Role--</option>
                        <option value="admin">Admin</option>
                        <option value="contributor">Contributor</option>
                    </select>
    
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
    
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
    
                    <button type="submit" class="btn text-uppercase" style="background: #6868ac; color: #fff">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Edit Data
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" style="max-width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-uppercase">Tambah Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> --}}
                {{-- Form Edit Data Admin --}}
                {{-- <form class="form-create" action="{{ route('edit-admin', $data->id) }}" method="POST" enctype="multipart/form-data">
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
    </div>
</div> --}}

@endsection