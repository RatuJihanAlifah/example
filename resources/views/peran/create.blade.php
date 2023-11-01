@extends('layout.master')
@section('title', 'peran')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data Film</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Data Film</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('peran.store', $film->id) }}" method="POST">
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Enter judul Film" disabled value="{{ $film->judul }}">
                                </div>
                                <div class="form-group">
                                    <label for="cast">Cast</label>
                                    <select name="cast_id" id="cast" class="form-control">
                                        <option disabled selected>--Pilih Salah Satu--</option>
                                        @forelse ($casts as $key => $value )
                                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                        @empty
                                            <option disabled>--Data Masih Kosong--</option>
                                        @endforelse 
                                        {{-- ($casts as $key => $value) --}}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Peran</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter nama Peran">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection