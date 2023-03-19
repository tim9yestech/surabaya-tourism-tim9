{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card bg-card text-white">
                <div class="card-body text-center">
                    <h2>30</h2>
                    <h6 class="">Admin</h6>
                </div>
            </div>
        </div>    
    
        <div class="col-md-3">
            <div class="card bg-card text-white">
                <div class="card-body text-center">
                    <h2>25</h2>
                    <h6 class="">Destinasi</h6>
                </div>
            </div>
        </div>  
    
        <div class="col-md-3">
            <div class="card bg-card text-white">
                <div class="card-body text-center">
                    <h2>28</h2>
                    <h6 class="">Produk UMKM</h6>
                </div>
            </div>
        </div>   
    
        <div class="col-md-3">
            <div class="card bg-card text-white">
                <div class="card-body text-center">
                    <h2>45</h2>
                    <h6 class="">Ulasan</h6>
                </div>
            </div>
        </div>   
    </div>
    <br>
    <h6>Selamat datang di Aplikasi Administrator Web Tourism Surabaya <i class='bx bx-wink-smile'></i></h6>
    
@endsection