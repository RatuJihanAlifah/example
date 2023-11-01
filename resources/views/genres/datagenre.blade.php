@extends('layout.master')
@section('title', 'genre')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Genre</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">List Data Genre</li>
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
                                <h3 class="card-title">Genre</h3>
                            </div>
                            <!-- /.card-header -->
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($genre as $key=>$item)               
                                    <tr>
                                      <td>{{ $key + 1 }}</td>
                                      <td>{{ $item->nama }}</td>
                                      <td>
                                        <form action="{{ route('genres.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('genres.edit', $item->id)}}" class="btn-sm btn-warning"><i class="fas fa-edit">Edit</i></a>
                                            <button type="submit" class="btn-sm btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button>
                                        </form>
                                      </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data Masih Kosong</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection