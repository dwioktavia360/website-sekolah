@extends('main')
@section('content')

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/home">Dashboard</a></li>
              <li><i class="fa fa-book"></i>Presensi</li>
            </ol>
          </div>
        </div>
        

        <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="container">
                <form method="post" action="/presence/store">
                @csrf
                <div class="mb-3">
                  <label for="nama_siswa" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama_siswa" placeholder="Masukkan Nama Siswa" name="nama_siswa">
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <input type="text" class="form-control" id="status" placeholder="Masukkan Status Kesehatan: Sehat/Tidak Sehat" name="status">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                </div>
              </div>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

  </section>
  @endsection

