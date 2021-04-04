@extends('main')

@section('sidebar')
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="deactive">
            <a class="" href="home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <li class="active">
            <a href="users" class="" >
                          <i class="icon_table"></i>
                          <span>Pengguna</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
@endsection
@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_profile"></i> Pengguna</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home">Dashboard</a></li>
              <li><i class="fa fa-laptop"></i>Pengguna</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
            <a href="{{ url('pengguna/insert') }}" class="btn btn-primary"><i class="icon_plus"></i> Tambah Pengguna</a>
          </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">
          <div class="col-lg-12 md-6 xs-3">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
              <div class="container">
                <div class="row">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <thead>
                  <tr>
                    <th><i class="icon_profile"></i>Nama Lengkap</th>
                    <th><i class="icon_calendar"></i>Jenis Kelamin</th>
                    <th><i class="icon_mail_alt"></i>Agama</th>
                    <th><i class="icon_pin_alt"></i>Alamat</th>
                    <th><i class="icon_archive_alt"></i>Role</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                </thead>
                  @foreach ($data_pengguna as $p)
                  <tr>
                    <td>{{ $p->nama_depan }} {{$p->nama_belakang}}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->agama }}</td>
                    <td>{{ $p->alamat}}</td>
                    <td></td>
                    <td>
                      
                      <div class="btn-group">
                        
                        <a class="btn btn-success" href="/pengguna/{{$p->id}}/edit">Edit</a>
                        <a href="/pengguna/{{$p->id}}/delete" class="btn btn-danger" onclick="return confirm('data dihapus')">Delete</a>
                        </form>
                        
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                
              </table>
            </section>
          </div>
        </div>
        <!--end tabel-->
@endsection