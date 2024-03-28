@extends('layouts.dashboard')
@section('content')
      <section class="content">
        <div class="container-fluid">
  
          <!-- card info -->
          <div class="row">

            <!-- users box -->
            @hasanyrole('Admin')
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{ $users->count() }}</h3> 
                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('users.create') }}" class="small-box-footer"><i class="fas fa-plus m-2"></i> Tambah</a>
              </div>
            </div>
  
            <!-- roles box -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $roles->count() }}</h3>
                  <p>Roles</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('roles.create') }}" class="small-box-footer"><i class="fas fa-plus m-2"></i> Tambah</a>
              </div>
            </div>
  
            <!-- posts box -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $posts->count() }}</h3>
                  <p>Berita</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('posts.create') }}" class="small-box-footer"><i class="fas fa-plus m-2"></i> Tambah</a>
              </div>
            </div>

            <!-- kategori box -->
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $categories->count() }}</h3>
                  <p>Kategori</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('categories.create') }}" class="small-box-footer"><i class="fas fa-plus m-2"></i> Tambah</a>
              </div>
            </div>
            @endhasanyrole

            <!-- posts user box -->
            @hasanyrole('Copywriter')
            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $postUser->count() }}</h3>
                  <p>Berita</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('posts.create') }}" class="small-box-footer"><i class="fas fa-plus m-2"></i> Tambah</a> 
              </div>
            </div>
            @endhasanyrole

          </div>
  
          <!-- left and right column -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
  
              <!-- user table-->
              @hasanyrole('Admin')
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    User Table
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Created_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ Carbon\Carbon::parse($user->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, repellendus?</p> --}}
                  </div>
                </div><!-- /.card-body -->
              </div>

              <!-- role table-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Roles Table
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Created_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($roles as $role)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $role->name }}</td>
                              <td>{{ Carbon\Carbon::parse($role->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, repellendus?</p> --}}
                  </div>
                </div><!-- /.card-body -->
              </div>
              @endhasanyrole

              <!-- posts table user -->
              @hasanyrole('Copywriter')
              @if (count($postUser) > 0)
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    User Posts Table
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th><i class="fas fa-link"></i> Judul</th>
                          <th><i class="fas fa-user-edit"></i> Penulis</th>
                          <th><i class="fas fa-tags"></i> Category</th>
                          <th><i class="fas fa-eye"></i> Tayangan</th>
                          <th><i class="fas fa-calendar-alt"></i> Created_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($postUser as $post)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->user->name }}</td>
                              <td>{{ $post->category->name }}</td>
                              <td>{{ views($post)->count() }}</td>
                              <td>{{ Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $postUser->links() }}
                  </div>
                </div><!-- /.card-body -->
              </div>   
              @else
              <p>sepertinya Anda belum menulis berita apapun. <a href="{{ route('posts.create') }}">Buat sekarang !</a></p>
              @endif
              @endhasanyrole
  
            </section>

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- user table-->
              @hasanyrole('Admin')
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    All Posts Table
                  </h3>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Penulis</th>
                          <th>Category</th>
                          <th>Created_at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                            <tr>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->user->name }}</td>
                              <td>{{ $post->category->name }}</td>
                              <td>{{ Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y H:i') }} WIB</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $posts->links() }}
                    {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, repellendus?</p> --}}
                  </div>
                </div><!-- /.card-body -->
              </div>
              @endhasanyrole
              
  
            </section>
            <!-- right col -->
          </div>

        </div>
      </section>
    </div>
      <!-- /.content -->
@endsection