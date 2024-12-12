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
                <form action="{{ route('mentor.update', ['mentor' => $mentor]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name" id="nama" class="form-control" value="{{ $mentor->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
