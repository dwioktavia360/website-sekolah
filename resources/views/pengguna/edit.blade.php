@extends('main')

@section('sidebar')
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="deactive">
            <a class="" href="admin">
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
<form action="/pengguna/{{$pengguna->id}}/update" method="POST">
    {{@csrf_field()}}

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Tambahkan Pengguna</h3>
            <ol class="breadcrumb">
              <li><i class="icon_profile"></i><a href="/pengguna">Pengguna</a></li>
              <li><i class="fa fa-file-text-o"></i>Input</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Pengguna
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Depan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$pengguna->nama_depan}}" name="nama_depan" placeholder="Nama Depan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Belakang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$pengguna->nama_belakang}}"" name="nama_belakang" placeholder="Nama Belakang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$pengguna->jenis_kelamin}}" name="jenis_kelamin" placeholder="L/P">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="{{$pengguna->agama}}" name="agama" placeholder="Agama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input class="form-control" value="{{$pengguna->alamat}}" name="alamat" placeholder="Alamat Lengkap">
                    </div>
                  </div>
                  <!--
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Role</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15">
                                              <option value="siswa" @if($pengguna->role == "siswa") selected @endif>Siswa</option>
                                              <option value="guru" @if($pengguna->role == "guru") selected @endif>Guru</option>
                                          </select>
                    </div>
                  </div>
                -->
                  <button type="submit" class="btn btn-primary">Update</button>
        </ul>
    </div>
                </form>
              </div>
            </section>
          </div>
        </div>
    </section>
  </section>
  @endsection