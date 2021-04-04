@extends('/main')

@section('content')

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-book"></i> Form Ubah Materi</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/home">Dashboard</a></li>
              <li><i class="fa fa-book"></i>Materi</li>
            </ol>
          </div>
        </div>
        

        <div class="row">
          <div class="col-lg-12">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="container">
                <form method="post" action="/materi/{{$materi->id}}">
                @method('patch')
                @csrf
                <div class="mb-3">
                  <label for="judul_materi" class="form-label">Nama Materi</label>
                  <input type="text" class="form-control" id="judul_materi" placeholder="Masukkan Nama Materi" name="judul_materi" value="{{$materi->judul_materi}}">
                </div>
                <div class="mb-3">
                  <label for="file_upload" class="form-label">Konten Materi</label>
                  <input type="text" class="form-control" id="file_upload" placeholder="Masukkan Isi Materi" name="file_upload" value="{{$materi->file_upload}}">
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

