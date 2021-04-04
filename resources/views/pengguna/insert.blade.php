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
<form action="{{ url('pengguna/create') }}" method="POST">
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
                      <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Belakang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis_kelamin" placeholder="L/P">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="agama" placeholder="Agama">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Role</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="role">
                                              <option value="siswa">Siswa</option>
                                              <option value="guru">Guru</option>
                                          </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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