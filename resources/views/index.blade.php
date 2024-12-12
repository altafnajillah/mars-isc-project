@extends('master')

@section('page')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{--        <div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
        {{--            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>--}}
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        {{--        </div>--}}

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Seluruh Peserta
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_mentee }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Peserta Aktif (tersisa)
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mentee_aktif }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Persentase commit rata-rata
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Team
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $team }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <div class="container-fluid">--}}
        <!-- Content Row -->

        {{--            <div class="row">--}}
        {{--                <div class="col-12">--}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Leaderboard Member of the Year</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Peringkat</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Angkatan</th>
                        <th>Mentor</th>
                        <th>Skor</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mentees as $k => $mentee)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $mentee->name }}</td>
                            <td>{{ $mentee->nim }}</td>
                            <td>{{ $mentee->angkatan }}</td>
                            <td>{{ $mentee->mentor->name }}</td>
                            <td>{{ $mentee->score }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--            </div>--}}


    {{--            <div class="row">--}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="card shadow mb-4">--}}
    {{--                        <div class="card-header py-3">--}}
    {{--                            <h6 class="m-0 font-weight-bold text-primary">Pengumuman Terbaru</h6>--}}
    {{--                        </div>--}}
    {{--                        <div class="card-body">--}}
    {{--                            <ul>--}}
    {{--                                <li>Workshop Pemrograman Lanjut: 15 Maret 2024</li>--}}
    {{--                                <li>Evaluasi ICL Bulan Ini dimulai pada 24 November</li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    <!-- <div> -->
    <!-- <div> -->
    {{--                <div class="container-fluid">--}}
    {{--                    <div class="row">--}}
    {{--                        <!-- Kartu MOTM Bulan Ini -->--}}
    {{--                        <div class="col-xl-3 col-md-6 mb-4">--}}
    {{--                            <div class="card border-left-primary shadow h-100 py-2">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div class="row no-gutters align-items-center">--}}
    {{--                                        <div class="col mr-2">--}}
    {{--                                            <div--}}
    {{--                                                class="text-xs font-weight-bold text-primary text-uppercase mb-1">--}}
    {{--                                                MOTM Bulan September--}}
    {{--                                            </div>--}}
    {{--                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Nama--}}
    {{--                                            </div>--}}
    {{--                                            <p class="text-xs font-weight-bold text-primary text-uppercase">--}}
    {{--                                                Angkatan 24</p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-auto">--}}
    {{--                                            <i class="fas fa-trophy fa-2x text-gray-300"></i>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Kartu MOTM Bulan Februari -->--}}
    {{--                        <div class="col-xl-3 col-md-6 mb-4">--}}
    {{--                            <div class="card border-left-primary shadow h-100 py-2">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div class="row no-gutters align-items-center">--}}
    {{--                                        <div class="col mr-2">--}}
    {{--                                            <div--}}
    {{--                                                class="text-xs font-weight-bold text-primary text-uppercase mb-1">--}}
    {{--                                                MOTM Bulan Oktober--}}
    {{--                                            </div>--}}
    {{--                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Nama--}}
    {{--                                            </div>--}}
    {{--                                            <p class="text-xs font-weight-bold text-primary text-uppercase">--}}
    {{--                                                Angkatan 24</p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-auto">--}}
    {{--                                            <i class="fas fa-trophy fa-2x text-gray-300"></i>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Kartu MOTM Bulan Maret -->--}}
    {{--                        <div class="col-xl-3 col-md-6 mb-4">--}}
    {{--                            <div class="card border-left-primary shadow h-100 py-2">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div class="row no-gutters align-items-center">--}}
    {{--                                        <div class="col mr-2">--}}
    {{--                                            <div--}}
    {{--                                                class="text-xs font-weight-bold text-primary text-uppercase mb-1">--}}
    {{--                                                MOTM Bulan November--}}
    {{--                                            </div>--}}
    {{--                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Nama--}}
    {{--                                            </div>--}}
    {{--                                            <p class="text-xs font-weight-bold text-primary text-uppercase">--}}
    {{--                                                Angkatan 24</p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-auto">--}}
    {{--                                            <i class="fas fa-trophy fa-2x text-gray-300"></i>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- Kartu MOTM Bulan April (Belum Terpilih) -->--}}
    {{--                        <div class="col-xl-3 col-md-6 mb-4">--}}
    {{--                            <div class="card border-left-danger shadow h-100 py-2">--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div class="row no-gutters align-items-center">--}}
    {{--                                        <div class="col mr-2">--}}
    {{--                                            <div--}}
    {{--                                                class="text-xs font-weight-bold text-danger text-uppercase mb-1">--}}
    {{--                                                MOTM Bulan Desember--}}
    {{--                                            </div>--}}
    {{--                                            <div class="h5 mb-0 font-weight-bold text-gray-800">--}}
    {{--                                                Belum--}}
    {{--                                                Terpilih--}}
    {{--                                            </div>--}}
    {{--                                            <p class="text-xs font-weight-bold text-danger text-uppercase">--}}
    {{--                                                Menunggu Evaluasi</p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-auto">--}}
    {{--                                            <i class="fas fa-trophy fa-2x text-gray-300"></i>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

                    <div class="container-fluid">
{{--    <div class="col">--}}

        <!-- Pie Chart -->
        <div class="row-xl-6 row-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Proporsi Peserta
                        Berdasarkan Angkatan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                                                    <span class="mr-2">
                                                    </span>
                        <span class="mr-2">
                                                    </span>
                        <span class="mr-2">
                                                    </span>
                    </div>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Indikator Utama
                    </h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Commit Harian Peserta<span
                            class="float-right">25%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar"
                             style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Evaluasi Mingguan oleh
                        Mentor<span class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar"
                             style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Evaluasi Bulanan (ICL)<span
                            class="float-right">35%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar"
                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Keaktifan Tambahan
                        (Workshop)<span class="float-right">10%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar"
                             style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Perhitungan Nilai Akhir
                        (MOTM)<span class="float-right">10%</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar"
                             style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--                </div>--}}

@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('theme') }}/js/demo/chart-pie-demo.js"></script>
@endsection


