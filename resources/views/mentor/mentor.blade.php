@extends('master')

@section('page')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        {{--        <h1 class="h3 mb-2 text-gray-800">Tables</h1>--}}
        @if(session('success'))
            <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0 font-weight-bold text-primary">Data Mentor</h4>
                    <a class="btn btn-sm btn-success" href="{{ '/mentor/create' }}">Tambah Mentor</a>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jumlah Mentee</th>
                            <th>Score</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        {{--                        <tfoot>--}}
                        {{--                        <tr>--}}
                        {{--                            <th>Nama</th>--}}
                        {{--                            <th>Mentor</th>--}}
                        {{--                            <th>NIM</th>--}}
                        {{--                            <th>Angkatan</th>--}}
                        {{--                        </tr>--}}
                        {{--                        </tfoot>--}}
                        <tbody>
                        @foreach($mentors as $mentor)
                            <tr>
                                <td>{{ $mentor->name }}</td>
                                <td>{{ $mentor->mentees_count }}</td>
                                <td>{{ $mentor->score }}</td>
                                <td>
                                    <form action="{{ route('mentor.delete', ['mentor' => $mentor]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-warning" href="{{ route('mentor.edit', ['mentor' => $mentor]) }}">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('theme') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('theme') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('theme') }}/js/demo/datatables-demo.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
