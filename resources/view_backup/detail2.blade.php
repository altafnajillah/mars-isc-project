@extends('master')

@section('style')
    <style>

    </style>
@endsection

@section('page')
    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white text-center">
                <h3 class="mb-0">Detail Mentee</h3>
            </div>
            <div class="card-body">
                <!--            <div class="row mb-4">-->
                <!--                <div class="col-md-6">-->
                <!--                    <h5>Nama: <span class="text-secondary">John Doe</span></h5>-->
                <!--                    <p>NIM: <span class="text-secondary">12345678</span></p>-->
                <!--                    <p>Angkatan: <span class="text-secondary">2020</span></p>-->
                <!--                </div>-->
                <!--                <div class="col-md-6 text-md-end">-->
                <!--                    <p>Status Aktif: <span class="badge bg-success badge-status">Ya</span></p>-->
                <!--                    <p>Nama Mentor: <span class="text-secondary">Jane Smith</span></p>-->
                <!--                </div>-->
                <!--            </div>-->

                <table class="table table-borderless">
                    <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>:</td>
                        <td class="text-secondary">{{ $mentee->name }}</td>
                        <td><strong>Status Aktif</strong></td>
                        <td>:</td>
                        <td><span
                                class="badge bg-{{ $mentee->active ? "success" : "danger"}} p-2 badge-status text-white">{{ $mentee->active ? "Ya" : "Tidak"}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>NIM</strong></td>
                        <td>:</td>
                        <td class="text-secondary">{{ $mentee->nim }}</td>
                        <td><strong>Nama Mentor</strong></td>
                        <td>:</td>
                        <td class="text-secondary">{{ $mentee->mentor->name }}</td>

                    </tr>
                    <tr>
                        <td><strong>Angkatan</strong></td>
                        <td>:</td>
                        <td class="text-secondary">{{ $mentee->angkatan }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

                <p class="fa-2x text-xl-right font-weight-bold text-primary">Overall Score: {{ $mentee->score }}</p>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="20"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="mt-4 mb-2">
                    <h4 class="text-primary text-center">Detail Score</h4>

                    <div class="card-body">
                        <h4 class="small font-weight-bold">Commit Harian Peserta<span
                                class="float-right">25</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar"
                                 style="width: 25%" aria-valuenow="93" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Evaluasi Mingguan oleh
                            Mentor<span class="float-right">20</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar"
                                 style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Evaluasi Bulanan (ICL)<span
                                class="float-right">35</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-dark" role="progressbar"
                                 style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Keaktifan Tambahan
                            (Workshop)<span class="float-right">10</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar"
                                 style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Perhitungan Nilai Akhir
                            (MOTM)<span class="float-right">10</span></h4>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar"
                                 style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('theme') }}/js/demo/chart-pie-demo.js"></script>
@endsection
