@extends('materi/layout/main')
@section('sidebar')
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a href="siswa/materi/index" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
          </li>
          <li class="active">
            <a href="siswa/assignment/index" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="siswa/presence/index" class="">
                          <i class="icon_check"></i>
                          <span>Presensi</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
@endsection
@section('content')

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-book"></i>Detail Tugas</h3>
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
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$assignment->nama_tugas}}</h4>
                    <p class="card-text">{{$assignment->lampiran}}</p>
                
                  
                    
                  </div>
                  </div>
              </div>
              </div>
            </div>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

  </section>
  @endsection

