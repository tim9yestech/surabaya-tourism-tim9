{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="d-flex justify-content-end mb-2">
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-create">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-body horizontal-scrollable">            
            <table id="example" class="table table-striped" style="width:100%">
                <thead style="font-size: 14px;">
                    <tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center">Nama Wilayah</th>  
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody style="font-size: 13px;">
                    <?php $no=1; ?>
                    @foreach ($data as $row)
                    <tr>
                        <td class="text-center">{{ $no }}</td>
                        <td>{{ $row->nama_wilayah }}</td>
                        <td class="text-center">      
                            <button class="btn btn-sm btn-warning btn-edit" type="button" data-wilayah-id="{{ $row->id }}" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                <i class="fa fa-wrench"></i>
                            </button>            
                            <a class="btn btn-sm btn-danger" href="{{ route('hapus-wilayah', $row->id) }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Tambah Data --}}
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" style="max-width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-uppercase">Tambah Wilayah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Form Tambah Wilayah --}}
                <form class="form-create" action="{{ route('tambah-wilayah') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nama_wilayah" class="form-label">Nama Wilayah</label>
                    <input type="text" name="nama_wilayah" id="nama_wilayah" class="form-control">
    
                    <button type="submit" class="btn text-uppercase" style="background: #6868ac; color: #fff">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

 {{-- Edit Data --}}
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" style="max-width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-uppercase">Edit Wilayah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Form Edit Data Wilayah --}}
                <form class="form-create" id="form-edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nama_wilayah" class="form-label">Nama Wilayah</label>
                    <input type="text" name="nama_wilayah" id="nama_wilayah_edit" class="form-control">

                    <button type="submit" class="btn text-uppercase"
                        style="background: #6868ac; color: #fff">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Mengambil fetch data, set value, set route dengan Ajax --}}
@section('js_konten')
    <script>
        $(function() {
            $('.btn-edit').click(function() {
                const id = $(this).data('wilayah-id')
                console.log('id', id)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                $.ajax({
                    url: "{{ route('data-wilayah') }}" + '/' + id,
                    success: function(data) {
                        $('#nama_wilayah_edit').val(data.data.nama_wilayah)
                        const url = "{{ route('data-wilayah') }}" + '/edit/' + id
                        $('#form-edit').attr('action', url)
                    }
                });
            })
        });
    </script>
@endsection