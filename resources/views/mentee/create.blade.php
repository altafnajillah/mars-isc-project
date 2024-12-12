@extends('master')

@section('page')

    <div class="container-fluid">

        <!-- Page Heading -->
        {{--    <h1 class="h3 mb-2 text-gray-800">Input Data</h1>--}}
        @if(session('success'))
            <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>--}}
            </div>
        @elseif(session('error'))
            <div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>--}}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Form Input Mentee Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mentee.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <select name="angkatan" id="angkatan" class="form-control" required>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mentor" class="form-label">Mentor</label>
                        <select name="mentor_id" id="mentor" class="form-control" required>
                            @foreach($mentors as $mentor)
                                <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(() => {
                    flashMessage.classList.remove('show');
                    flashMessage.classList.add('fade');
                    setTimeout(() => flashMessage.remove(), 500);
                }, 3000);
            }
        });
    </script>
@endsection
