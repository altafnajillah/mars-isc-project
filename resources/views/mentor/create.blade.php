@extends('master')

@section('page')

    <div class="container-fluid">

        <!-- Page Heading -->
        {{--    <h1 class="h3 mb-2 text-gray-800">Input Data</h1>--}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Form Input Mentor Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mentor.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name" id="nama" class="form-control" required>
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="nim" class="form-label">NIM</label>--}}
{{--                        <input type="text" name="nim" id="nim" class="form-control" required>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="angkatan" class="form-label">Angkatan</label>--}}
{{--                        <select name="angkatan" id="angkatan" class="form-control" required>--}}
{{--                            <option value="2021">2021</option>--}}
{{--                            <option value="2022">2022</option>--}}
{{--                            <option value="2023">2023</option>--}}
{{--                            <option value="2020">2024</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label for="mentor" class="form-label">Mentor</label>--}}
{{--                        <input type="text" name="mentor" id="mentor" class="form-control" required>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
