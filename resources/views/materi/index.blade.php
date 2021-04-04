@extends('/main')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-book"></i> Materi</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/home">Dashboard</a></li>
              <li><i class="fa fa-book"></i>Materi</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
            <a href="/materi/create" class="btn btn-primary"><i class="icon_plus"></i> Tambah Materi</a>
          </div>
        </div>
        <br>
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
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>File Pendukung</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($materis as $materi)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$materi->judul_materi}}</td>
                        <td>{{$materi->file_upload}}</td>
                        <td>
                            <a class="badge bg-info" href="materi/{{$materi->id}}">detail</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                      
                      
                  </table>
                </div>
              </div>
            </section>
            <!--Project Activity end-->
          </div>
          </div>
        </div><br><br>


          
        <!-- project team & activity end -->
    <!--main content end-->
  </section>
  @endsection
