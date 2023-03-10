{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
<body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-7">
                    <a href="" class="btn btn-primary"><i class="fa-solid fa-square-plus" style="margin-right: 4;"></i>Tambah Data Produk</a>
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
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Legalitas Produk</th>
                            <th scope="col">Alamat Outlet</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Website Produk</th>
                            <th colspan="3" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach(range(1,10) as $i): ?>
                        <tr>
                            <th scope="row">1</th>
                            <td>Tunjungan Plaza</td>
                            <td>Jl. Tunjungan</td>
                            <td>Mall Tunjungan Plaza ....</td>
                            <td>tunjunganplaza.com</td>
                            <td>09.00-22.00</td>
                            <td>tSenin - Minggu</td>
                            <td>Insert Foto</td>
                            <td style="text-align: center;"><i
                                    class="fa-solid fa-pen-to-square bg-success p-2 text-white rounded"
                                    data-toggle="tooltip" title="Edit"></i></td>
                            <td style="text-align: center;"><i
                                    class="fa-solid fa-trash-can bg-danger p-2 text-white rounded" data-toggle="tooltip"
                                    title="Delete"></i></td>
                        <?php endforeach;?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection