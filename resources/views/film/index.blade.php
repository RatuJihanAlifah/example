@extends('layout.master')
@section('title', 'film')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Cast</h1>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Cast</h3>
                            </div>
                            <!-- /.card-header -->
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Judul</th>
                                    <th>Tahun</th>
                                    <th>Genre Film</th>
                                    <th>Action</th>
                                    <th style="width: 150px">Bio</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($films as $key=>$item)  
                                    <form action="{{ route('film.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')             
                                    <tr>
                                      <td>{{ $key + 1 }}</td>
                                      <td>{{ $item->judul }}</td>
                                      <td>{{ $item->tahun }}</td>
                                      <td>{{ $item->genre[0]->nama }}</td>
                                      <td>
                                        <a href="{{ route('film.show', $item->id) }}" class="btn-sm btn-info">show</a>
                                        <a href="{{ route('film.edit', $item->id) }}" class="btn-sm btn-warning">edit</a>
                                        <button type="submit" class="btn-sm btn-danger">Delete</button>
                                      </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data Masih Kosong</td>
                                    </tr>
                                    @endforelse
                                    </form>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection