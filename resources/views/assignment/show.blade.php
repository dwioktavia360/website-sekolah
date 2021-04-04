@extends('/main')

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
                
                    <br>
                    <a href="{{$assignment->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$assignment->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
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

