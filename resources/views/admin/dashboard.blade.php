{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <h2 class="mb-4">{{ $headtitle }}</h2>
    <div class="row mb-5">
        <div class="col-lg-3 col-md-6 mb-1">
            <div class="card card-board shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between mt-1" style="font-size: 35px;">
                        <h2 class="count">{{ $countadmin }}</h2>
                        <i class='bx bxs-user-account'></i>
                    </div>
                    <h6 class="fst-italic mb-0" style="font-size: 13px;">Administrator</h6>
                </div>
            </div>
        </div>    
    
        <div class="col-lg-3 col-md-6 mb-1">
            <div class="card card-board shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between mt-1" style="font-size: 35px;">
                        <h2 class="count">{{ $countdestinasi }}</h2>
                        <i class='bx bxs-building-house'></i>
                    </div>
                    <h6 class="fst-italic mb-0" style="font-size: 13px;">Destinasi</h6>
                </div>
            </div>
        </div>  
    
        <div class="col-lg-3 col-md-6 mb-1">
            <div class="card card-board shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between mt-1" style="font-size: 35px;">
                        <h2 class="count">{{ $countadmin }}</h2>
                        <i class='bx bxs-basket'></i>
                    </div>
                    <h6 class="fst-italic mb-0" style="font-size: 13px;">Produk UMKM</h6>
                </div>
            </div>
        </div>    
    
        <div class="col-lg-3 col-md-6 mb-1">
            <div class="card card-board shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between mt-1" style="font-size: 35px;">
                        <h2 class="count">{{ $countadmin }}</h2>
                        <i class='bx bxs-message-dots'></i>
                    </div>
                    <h6 class="fst-italic mb-0" style="font-size: 13px;">Komentar</h6>
                </div>
            </div>
        </div>     
    </div>

    {{-- Chart --}}
    <div class="chart row">
        <div class="col-lg-7 mb-4">
            <h6>Persebaran Destinasi</h6> 
            <canvas id="destinasiChart"></canvas>
        </div>
        <div class="col-lg-5">
            <h6>Persebaran UMKM</h6> 
            <canvas id="produkChart"></canvas>
        </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection