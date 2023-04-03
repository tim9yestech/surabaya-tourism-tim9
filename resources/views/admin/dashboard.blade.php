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
    <script>
        // Chart
        const chart1 = document.getElementById("destinasiChart");
        const chart2 = document.getElementById("produkChart");

        $.ajax({
            url: "{{ route('admin.dashboard-count') }}",
            success: function(data) {
                console.log(data);
                new Chart(chart1, {
                    type: "bar",
                    data: {
                        labels: data.label,
                        datasets: [{
                            label: "Total Destinasi ",
                            data: data.total, // count
                            backgroundColor: data.color,
                            // borderColor: "rgb(83,83,146)",
                            borderWidth: 1,
                        }, ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
            }
        });



        new Chart(chart2, {
            type: "doughnut",
            data: {
                labels: [
                    "Surabaya Pusat",
                    "Surabaya Utara",
                    "Surabaya Barat",
                    "Surabaya Selatan",
                    "Surabaya Timur",
                ],
                datasets: [{
                    label: "Total UMKM ",
                    data: [12, 21, 3, 5, 2],
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(75, 192, 192)",
                        "rgb(255, 205, 86)",
                        "rgb(201, 203, 207)",
                        "rgb(54, 162, 235)",
                    ],
                    borderWidth: 0,
                }, ],
            },
        });
    </script>
@endsection
