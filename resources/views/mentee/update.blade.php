@extends('master')

@section('page')

    <div class="container-fluid">

        <!-- Page Heading -->
        {{--    <h1 class="h3 mb-2 text-gray-800">Input Data</h1>--}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Edit Data Mentee</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('mentee.update', ['mentee' => $mentee]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $mentee->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="{{ $mentee->nim }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Status Aktif</label>
                        <select name="active" id="active" class="form-control" required>
                            <option value="1" {{ $mentee->active == 1 ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ $mentee->active == 0 ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <select name="angkatan" id="angkatan" class="form-control" required>
                            <option value="2022" {{ $mentee->angkatan == '2022' ? 'selected' : '' }}>2022</option>
                            <option value="2023" {{ $mentee->angkatan == '2023' ? 'selected' : '' }}>2023</option>
                            <option value="2024" {{ $mentee->angkatan == '2024' ? 'selected' : '' }}>2024</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mentor" class="form-label">Mentor</label>
                        <select name="mentor_id" id="mentor" class="form-control" required>
                            @foreach($mentors as $mentor)
                                <option
                                    value="{{ $mentor->id }}" {{ $mentor->id == $mentee->mentor_id ? 'selected' : '' }}>{{ $mentor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Edit Score Mentee</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="commit" class="form-label">Commit</label>
                        <input type="number" name="commit" id="commit" class="form-control" value="{{ $mentee->scores->commit }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="mentor" class="form-label">Evaluasi Mentor</label>
                        <input type="number" name="mentor" id="mentor" class="form-control" value="{{ $mentee->scores->mentor }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="evaluation" class="form-label">Evaluasi Bulanan</label>
                        <input type="number" name="evaluation" id="evaluation" class="form-control" value="{{ $mentee->scores->evaluation }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="addition" class="form-label">Tambahan</label>
                        <input type="number" name="addition" id="addition" class="form-control" value="{{ $mentee->scores->addition }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="motm" class="form-label">MotM Score</label>
                        <input type="number" name="motm" id="motm" class="form-control" value="{{ $mentee->scores->motm }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
