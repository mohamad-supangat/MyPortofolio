@extends('layouts.master')
@section('title')
    Selamat Datang di portofolio saya
@endsection
@push('css')
    <style type="text/css">
        body {
            margin-top: 80px;
        }
    </style>
@endpush

@section('content')
<nav class="navbar fixed-top  navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand font-jos" href="#">Supangat <small>My Portofolio</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#tentang">Tentang Saya</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#skill">Skill</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portofolio">Portofolio</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
    <div class="card" id="tentang">
        <div class="card-header">
            <h2 class="card-title font-jos">
                Tentang Saya
            </h2>
        </div>
        <div class="card-body" style="font-size: 18px">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('img/image823.png') }}" class="rounded rounded-circle  img-fluid" >
                </div>
                <div class="col-md-9">
                    <p>
                        Hello, nama saya <b>Mohmad Supangat</b>, sering dipanggil <b>Supangat</b>
                    </p>
                    <p>
                        Hobi saya sejak kecil berselancaar di dunia internet, dan belajar tentang bagaimana perkembangan di dunia maya. 
                    </p>
                    <p>
                        Saya tidak suka bermain game, dan lebih suka belajar mengenai bahasa pemrograman.
                    </p>
                    <table class="table">
                        <tr>
                            <td nowrap="nowrap">
                                Tempat, Tanggal lahir
                            </td>
                            <td>
                                : Banyumas, 17 desember 2000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                : Jl. Anjir Rt9/2 Kasegeran, Cilongok , Banyumas, Jawa Tengah
                            </td>
                        </tr>
                        <tr>
                            <td>
                                No. Telp
                            </td>
                            <td>
                                : <b>
                                    083873272419 <i class="text-danger">(Wa & Telegram)</i>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                : <b>supangatoy@gmail.com</b>
                            </td>
                        </tr>
                        <tr>
                            <td>Github</td>
                            <td>
                                : <i><a href="https://github.com/supangatoy/">https://github.com/supangatoy</a></i>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card " id="skill">
                <div class="card-header">
                    <h2 class="card-title font-jos">
                        Kemampuan & Skill
                    </h2>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="timeline">
                            <li>
                                <span class="lead">
                                    HTML5, CSS3, JavaScript
                                </span>
                            </li>
                            <li>
                                <span class="lead">
                                    Jquery, Bootstrap, Materialize, adminLTE, 
                                </span>
                            </li>
                            <li>
                                <span class="lead">
                                    PHP Native, CodeIgniter, Laravel
                                </span>
                            </li>
                            <li>
                                <span class="lead">
                                    MySQL, MariaDB, PostgresSQL
                                </span>
                            </li>
                            <li>
                                <span class="lead">
                                    Windows OS, GNU/ Linux , Server
                                </span>
                            </li>
                            <li>
                                <span class="lead">
                                    Microsoft Office
                                </span>
                            </li>
                        </ul>         
                    </div>
                </div>
                
            </div>
        </div>

        <div class="col-md-8">
            <div class="card " id="portofolio">
                <div class="card-header">
                    <h2 class="card-title font-jos">
                        Portofolio
                    </h2>
                </div>
                <div class="card-body" style="font-size: 18px">
                    <p>
                        Bagian ini berisi <b><i>penghargaan dan project</i></b> yang pernah saya kerjakan dan yang sedang dikerjakan.
                    </p>
                    <div class="overflow-auto" style="max-height: 500px;padding: 10px">
                        <ul class="timeline">
                            <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            Juara 3 LKS Web Design 2016 & 2017 (Kabupaten)
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('img/lks.png') }}" class="img-fluid">
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            Portal SMK Ma'arif NU 1 Ajibarang
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Status : <span class="badge badge-success">Production</span></li>
                                            <li>URL : <a href="https://smkmaarifnu1ajibarang.sch.id/public/">https://smkmaarifnu1ajibarang.sch.id/</a></li>
                                        </ul>
                                        <hr>
                                        <p>
                                            Portal Resmi Website <b>SMK Ma'arif NU 1 Ajibarang </b> sebagai ucapan selamat datang kepada pengunjung / masyarakat yang ingin mengenal lebih lanjut mengenai <b>SMK Ma'arif NU 1 AJibarang</b>
                                        </p>
                                        <p>
                                            <img src="{{ asset('img/smkmanusa.png') }}" class="img-fluid">
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            PPDB SMK Ma'arif NU 1 Ajibarang
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Status : <span class="badge badge-success">Production</span></li>
                                            <li>URL : <a href="https://ppd.smkmaarifnu1ajibarang.sch.id//">https://ppd.smkmaarifnu1ajibarang.sch.id/</a></li>
                                        </ul>
                                        <hr>
                                        <p>
                                            <i>Aplikasi Pendafaran Peserta didik baru</i> <b>SMK Ma'arif NU 1 Ajibarang</b> bertugas sebagai portal pendaftaran siswa dan siswi baru
                                        </p>
                                        <p>
                                            <img src="{{ asset('img/2019-07-22_10-25.png') }}" class="img-fluid">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                             <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            Pembayaran Daftar Ulang Peserta Baru SMK Ma'arif NU 1 Ajibarang
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Status : <span class="badge badge-success">Production</span></li>
                                            <li>URL : <i>Private</i></li>
                                        </ul>
                                        <hr>
                                        <p>
                                            <i>Aplikasi pembayaran Daftar Ulang Pendafaran Peserta didik baru</i> <b>SMK Ma'arif NU 1 Ajibarang</b> bertugas sebagai pengelolaan pembayaran daftar ulang bagi  siswa dan siswi baru
                                        </p>
                                        <p>
                                            <img src="{{ asset('img/2019-07-22_10-32.png') }}" class="img-fluid">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                            
                             <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            Aplikasi E-learning & CBT
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Status : <span class="badge badge-success">Production</span></li>
                                            <li>URL : <i>Private</i></li>
                                        </ul>
                                        <hr>
                                        <p>
                                            Aplikasi yang bekerja sebagai wadah sekolah waya / sekolah online, yang berisi pelajaran, serta kuis / ujian dengan prinsip mirip dengan <i>UNBK</i>
                                        </p>
                                        <p>
                                            Pengguna :
                                            <ul>
                                                <li>
                                                    <b>SMK Ma'arif NU 1 Ajibarang</b>
                                                </li>
                                            </ul>
                                        </p>
                                        <p>
                                            <img src="{{ asset('img/2019-07-22_10-37.png') }}" class="img-fluid">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                             <li>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="lead">
                                            Aplikasi Pembayaran  SMK Ma'arif NU 1 Ajibarang
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul>
                                            <li>Status : <span class="badge badge-primary">Negotation</span></li>
                                            <li>URL : <a href="https://tu.smkmaarifnu1ajibarang.sch.id/">https://tu.smkmaarifnu1ajibarang.sch.id/</a></li>
                                        </ul>
                                        <hr>
                                        <p>
                                            Aplikasi yang bekerja sebagai pengelola pembayaran bulanan dan daftar ulang yang akan digunakan sebagai master data di <b>SMK Ma'arif NU 1 Ajibarang</b></i>
                                        </p>
                                        <p>
                                            <img src="{{ asset('img/2019-07-22_10-41.png') }}" class="img-fluid">
                                        </p>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection