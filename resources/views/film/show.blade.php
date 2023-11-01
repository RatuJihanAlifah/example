@extends('layout.master')
@section('title', 'cast')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ $film->poster }}"
                         alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center">{{ $film->judul }}</h3>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Genre</b> <a class="float-right">{{ $film->genre[0]->nama }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Tahun</b> <a class="float-right">{{ $film->tahun }}</a>
                    </li>
                    <li class="list-group-item"></li>
                      <b>Ringkasan</b>
                      <p>{{ $film->ringkasan}}</p>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Cast</strong>
                  <p class="text-muted">
                    @foreach ($film->peran()->get() as $peran)
                      {{ $peran->cast[0]->nama }} <br>
                      {{$peran->nama}}
                    @endforeach
                  </p>
                  <hr>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Kritik</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="template/dist/img/user1-128x128.jpg" alt="user image">
                          <span class="username">
                            <a href="#">{{ auth()->user()->name }}</a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Shared publicly - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          {{-- content kritik --}}
                          @foreach ($film->kritik()->get() as $kritik)
                          {{ $kritik->content }} <br>
                          @endforeach
                        </p>
  
                        <p>
                          <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                          Rating : @foreach ($film->kritik()->get() as $kritik) {{ $kritik->point}} <br>
                          @endforeach
                          </a>
                          <span class="float-right">
                            <a href="#" class="link-black text-sm">
                              <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                          </span>
                        </p>
  
                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                      </div>
                      <!-- /.post -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
@endsection