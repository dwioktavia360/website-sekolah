@extends('/main')

@section('content')

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-book"></i> Form Ubah Tugas</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/home">Dashboard</a></li>
              <li><i class="fa fa-book"></i>Tugas</li>
            </ol>
          </div>
        </div>
        

        <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="container">
                <form method="post" action="/assignment/{{$assignment->id}}">
                @method('patch')
                @csrf
                <div class="mb-3">
                  <label for="nama_tugas" class="form-label">Nama Tugas</label>
                  <input type="text" class="form-control" id="nama_tugas" placeholder="Masukkan Nama Tugas" name="nama_tugas" value="{{$assignment->nama_tugas}}">
                </div>
                <div class="mb-3">
                  <label for="lampiran" class="form-label">Konten Tugas</label>
                  <input type="text" class="form-control" id="lampiran" placeholder="Masukkan Isi Tugas" name="lampiran" value="{{$assignment->lampiran}}">
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

