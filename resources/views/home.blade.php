@extends('main')

@section('content')

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>PROFIL SEKOLAH</strong></h2>
              </div>
              <div class="panel-body">
                <img src="img/school.jpg">
                <p>
                <p>
                    ini adalah profil sekolah sekolah
                <br>
                berisi nama sekolah, alamat sekolah, visi misi
              </div>

            </div>

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <h2><strong>find us</strong></h2>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <h2><strong>find us</strong></h2>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <h2><strong>find us</strong></h2>
            </div>
            <!--/social-box-->

          </div>

@endsection
