@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3 justify-content-between">
            <h3 class="m-0 font-weight-bold text-primary">Jenis Imunisasi</h3>
        </div>

        <div class="card-body">
            <!-- Content Row -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('car-type.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="immunization_name">Jenis Imunisasi</label>
                    <input type="text" class="form-control" name="immunization_name" placeholder="Nama Imunisasi"
                        value="{{ old('immunization_name') }}">
                </div>
                <div class="form-group">
                    <label for="age">Umur Pemakai(Bulan)</label>
                    <input type="text" class="form-control" name="age" placeholder="Umur Pemakai"
                        value="{{ old('age') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
