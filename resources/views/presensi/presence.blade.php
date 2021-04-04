@extends('/main')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-book"></i> Presensi Siswa</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/home">Dashboard</a></li>
              <li><i class="fa fa-book"></i>Presensi Siswa</li>
            </ol>
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
                        <th>Nama Siswa</th>
                        <th>Status</th>
                        <th>Waktu Presensi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($presences as $presence)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$presence->nama_siswa}}</td>
                        <td>{{$presence->status}}</td>
                        <td>{{$presence->created_at}}</td>
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
