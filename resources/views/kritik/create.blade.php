@extends('layout.master')
@section('title', 'kritik')
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
                        <form action="{{ route('kritik.store', $films[0]->id ) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <input type="text" name="user" id="user" class="form-control" value="{{ auth()->user()->name }}" disabled>
                                </div>
                                <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                <div class="form-group">
                                    <label for="judul">Judul Film</label>
                                    <input type="text" name="judul" id="judul" class="form-control" value="{{ $films[0]->judul }}" disabled>
                                </div> 
                                <input type="hidden" value="{{$films[0]->id}}" name="film_id">
                                <div class="form-group">
                                    <label for="content">Komentar</label>
                                    <textarea type="text-area" name="content" id="content" class="form-control @error('content') is-invalid @enderror" placeholder="Beri komentar" required></textarea>
                                    @error('content')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="point">Rating</label>
                                    <input type="number" name="point" id="point" class="form-control @error('point') is-invalid @enderror" placeholder="Beri rating" required>
                                    @error('point')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror 
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                                </div>
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