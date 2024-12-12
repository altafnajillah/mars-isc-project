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
                        <td><span class="badge bg-{{ $mentee->active ? "success" : "danger"}} badge-status text-white">{{ $mentee->active ? "Ya" : "Tidak"}}</span></td>
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

                <p class="fa-3x text-xl-right font-weight-bold text-primary">Score: 95</p>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="95"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="mt-4 mb-2">
                    <h4 class="text-primary text-center">Detail Score</h4>
                    <table class="table table-striped">
                        <thead class="table">
                        <tr>
                            <th scope="col">Aspek</th>
                            <th scope="col">Nilai</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Commit</td>
                            <td>87</td>
                        </tr>
                        <tr>
                            <td>Mentor</td>
                            <td>92</td>
                        </tr>
                        <tr>
                            <td>Evaluasi</td>
                            <td>88</td>
                        </tr>
                        <tr>
                            <td>Tambahan</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td>MotM (Member of the Month)</td>
                            <td>80</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
