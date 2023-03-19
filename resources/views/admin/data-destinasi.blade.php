{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<div class="container">
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <input class="form-control light-table-filter" data-table="table-hover" type="search" aria-invalid="false" placeholder="Cari destinasi">
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
                                <th class="text-center">Nama Destinasi</th>
                                <th class="text-center">Alamat</th>                
                                <th class="text-center">Wilayah</th>
                                <th class="text-center">Dibuat</th>
                                <th class="text-center">Diedit</th>   
                                <th colspan=3 class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 13px;">
                            <?php $no=1; ?>
                            @foreach ($data as $row)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td class="text-capitalize">{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td class="text-capitalize">{{ $row->wilayah->nama_wilayah }}</td>
                                <td class="text-center">{{ $row->created_at->diffForHumans() }}</td>
                                <td class="text-center">{{ $row->updated_at->diffForHumans() }}</td>
                                <td class="text-center">      
                                    <button class="btn btn-sm btn-warning btn-edit" type="button" data-destinasi-id="{{ $row->id }}" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                        <i class="fa fa-wrench"></i>
                                    </button>            
                                    <a class="btn btn-sm btn-danger" href="{{ route('hapus-destinasi', $row->id) }}">
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
    </div>
</div>

{{-- Tambah Data --}}
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" id="modal-dialog" style="max-width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-uppercase">Tambah Destinasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Form Tambah Destinasi --}}
                <form class="form-create" action="{{ route('tambah-destinasi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nama" class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama" id="nama" class="form-control">

                    <label for="alamat" class="form-label">Alamat Destinasi</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
    
                    <label for="id_wilayah" class="form-label">Wilayah</label>
                    <select name="id_wilayah" id="id_wilayah" class="form-control">
                        <option>--Pilih Wilayah--</option>
                        @foreach ($wilayah as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->nama_wilayah }}</option>
                        @endforeach
                    </select>

                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control"></textarea>

                    <label for="link_website" class="form-label">Link Website</label>
                    <input type="text" name="link_website" id="link_website" class="form-control">

                    <label for="link_reservasi" class="form-label">Link Reservasi</label>
                    <input type="text" name="link_reservasi" id="link_reservasi" class="form-control">

                    <label for="hari_operasional" class="form-label">Hari Operasional</label>
                    <input type="text" name="hari_operasional" id="hari_operasional" class="form-control">

                    <label for="jam_operasional" class="form-label">Jam Operasional</label>
                    <input type="text" name="jam_operasional" id="jam_operasional" class="form-control">

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Destinasi</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" multiple>
                    </div>

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
                <h4 class="modal-title fw-bold text-uppercase">Edit Destinasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- Form Edit Data Destinasi --}}
                <form class="form-create" id="form-edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="nama" class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama" id="nama_edit" class="form-control">

                    <label for="alamat" class="form-label">Alamat Destinasi</label>
                    <input type="text" name="alamat" id="alamat_edit" class="form-control">
    
                    <label for="id_wilayah" class="form-label">Wilayah</label>
                    <select name="id_wilayah" id="id_wilayah_edit" class="form-control">
                        <option>--Pilih Wilayah--</option>
                        @foreach ($wilayah as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->nama_wilayah }}</option>
                        @endforeach
                    </select>

                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea rows="5" name="deskripsi" id="deskripsi_edit" class="form-control"></textarea>

                    <label for="link_website" class="form-label">Link Website</label>
                    <input type="text" name="link_website" id="link_website_edit" class="form-control">

                    <label for="link_reservasi" class="form-label">Link Reservasi</label>
                    <input type="text" name="link_reservasi" id="link_reservasi_edit" class="form-control">

                    <label for="hari_operasional" class="form-label">Hari Operasional</label>
                    <input type="text" name="hari_operasional" id="hari_operasional_edit" class="form-control">

                    <label for="jam_operasional" class="form-label">Jam Operasional</label>
                    <input type="text" name="jam_operasional" id="jam_operasional_edit" class="form-control">

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Destinasi</label>
                        <input type="file" name="gambar" id="gambar_edit" class="form-control" multiple>
                    </div>

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
                const id = $(this).data('destinasi-id')
                console.log('id', id)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                $.ajax({
                    url: "{{ route('data-destinasi') }}" + '/' + id,
                    success: function(data) {
                        $('#nama_edit').val(data.data.nama)
                        $('#alamat_edit').val(data.data.alamat)
                        $('#id_wilayah_edit').val(data.data.id_wilayah)
                        $('#deskripsi_edit').val(data.data.deskripsi)
                        $('#link_website_edit').val(data.data.link_website)
                        $('#link_reservasi_edit').val(data.data.link_reservasi)
                        $('#hari_operasional_edit').val(data.data.hari_operasional)
                        $('#jam_operasional_edit').val(data.data.jam_operasional)
                        $('#gambar_edit').val(data.data.gambar)
                        const url = "{{ route('data-destinasi') }}" + '/edit/' + id
                        $('#form-edit').attr('action', url)
                    }
                });
            })
        });
    </script>
@endsection