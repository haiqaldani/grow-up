@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Jenis Imunisasi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_toi" class="table" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Imunisasi</th>
                                <th>Umur Pemakai(Bulan)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse($tois as $toi)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $toi->immunazation_name }}</td>
                                    <td>{{ $toi->age }}</td>
                                    <td>
                                        <a href="{{ route('toi.edit', $toi->id) }}" class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <form action="{{ route('toi.destroy', $toi->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#table_toi').DataTable(

            );
        });
    </script>
@endsection
