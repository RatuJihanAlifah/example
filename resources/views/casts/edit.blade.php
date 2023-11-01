@extends('layout.master')
@section('title', 'cast')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Cast</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Cast</li>
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
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Cast</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('casts.update', $casts[0]->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ $casts[0]->nama}}">
                                    </div>
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Masukan Umur" value="{{ $casts[0]->umur}}">
                                    </div>
                                    @error('umur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label>Bio</label>
                                        <textarea class="form-control" rows="3" name="bio" class="form-control @error('bio') is-invalid @enderror" placeholder="Masukan Bio">"{{ $casts[0]->bio}}"</textarea>
                                    </div>
                                    @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!-- /.content -->
                            </form>
                        </div>
@endsection