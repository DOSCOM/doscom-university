<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doscom University</title>
    <meta name="description" content="Doscom University (DU) adalah kegiatan belajar mengajar yang berbentuk workshop dengan para dosen pengurus Doscom. DU tahun 2017 membuka 5 kelas yaitu Linux, Pemrograman Mobile, Pemrograman Web, Jaringan Komputer, dan Multimedia. Masing-masing kelas terdapat 4 pertemuan dengan jumlah peserta maksimal 30 orang/ kelas.">
    <link rel="shortcut icon" type="image/png" href="http://www.doscom.org/favicon.png" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">



    <script type="text/javascript" src="{{ asset('/js/jquery.1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-scrolltofixed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/classie.js') }}"></script> 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.fa {
  padding: 15px;
  font-size: 30px;
  width: 55px;
  text-align: center;
  text-decoration: none;
  margin: 1px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: purple;
  color: white;
}
.fa-git{

    background:#3B5998;
  color: white;


}


</style>

  
    <!-- <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

<!-- 
    <style media="screen">
        .footer-kanan .row {
            margin-top: 7px !important;
        }
    </style> -->
</head>

<body>

<!-- 

    <header class="">
    </header>
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <div class="welcome">
            <img src="{{ asset('images/logo-doscom.png')}}" alt="" />
            <h1>DOSCOM <span class="thin">UNIVERSITY</span></h1>
            <br>
            <a href="#tentang" id="more">more</a>
        </div>
    </div>

    <section class="tentang" id="tentang">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6 col-sm-12 text-center ">

                    <div class="posters">

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 bg-abu">
                    <br>
                    <h1><strong>DOSCOM UNIVERSITY</strong></h1>
                    <br>
                    <br>
                    <p>Doscom University <b>(DU)</b> adalah kegiatan belajar mengajar yang berbentuk workshop dengan para dosen pengurus Doscom. DU tahun 2017 membuka <b>5 kelas</b> yaitu Linux, Pemrograman Mobile, Pemrograman Web, Jaringan Komputer, dan Multimedia. Masing-masing kelas terdapat <b>5 pertemuan</b> dengan jumlah peserta maksimal 25 orang/ kelas.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="kelas">
            <div class="container-fluid text-center">
                <h2><strong>KELAS</strong></h2>
                <p>
                    Klik untuk detail informasi
                </p>
                <br>
                <a data-toggle="modal" data-target="#myModal">
                    <div class="pilih-kelas ">
                        <a data-toggle="modal" data-target="#modalLinux">
                            <div class="grow">
                                <img src="images/icon/black/linux-fundamental-400x400.png">
                            </div>
                            <h4 class="label-biru"> Linux Fundamental  </h4>
                        </a>
                        <a class="btn " data-toggle="modal" data-target="#modalLinux">Lihat Detail</a>
                    </div>
                </a>
                <div class="pilih-kelas ">
                    <a data-toggle="modal" data-target="#modalMobile">
                        <div class="grow">
                            <img src="images/icon/black/mobile-programming-400x400.png">
                        </div>
                        <h4 class="label-biru"> Pemrograman Mobile  </h4>
                    </a>
                    <a class="btn " data-toggle="modal" data-target="#modalMobile">Lihat Detail</a>
                </div>
                <div class="pilih-kelas ">
                    <a data-toggle="modal" data-target="#modalWeb">
                        <div class="grow">
                            <img src="images/icon/black/web-dev-400x400.png">
                        </div>
                        <h4 class="label-biru"> Web Programming </h4>
                    </a>
                    <a class="btn " data-toggle="modal" data-target="#modalWeb">Lihat Detail</a>

                </div>
                <div class="pilih-kelas ">
                    <a data-toggle="modal" data-target="#modalNetworking">
                        <div class="grow">
                            <img src="images/icon/black/computer-network-400x400.png">
                        </div>
                        <h4 class="label-biru"> Jaringan Komputer </h4>
                    </a>
                    <a class="btn " data-toggle="modal" data-target="#modalNetworking">Lihat Detail</a>
                </div>
                <div class="pilih-kelas ">
                    <a data-toggle="modal" data-target="#modalMultimedia">
                        <div class="grow">
                            <img src="images/icon/black/inkscape-400x400.png">
                        </div>
                        <h4 class="label-biru"> Multimedia Inkscape </h4>
                    </a>
                    <a class="btn " data-toggle="modal" data-target="#modalMultimedia">Lihat Detail</a>
                </div>
            </div>
        </section>
        <section class="jadwal">
            <div class="container text-center">
                <h2 class="text-biru"><strong>JADWAL</strong></h2>
                <br>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <th>Linux</th>
                                    <th>Pemrograman Mobile</th>
                                    <th>Pemrograman Web</th>
                                    <th>Jaringan Komputer</th>
                                    <th>Multimedia Inkscape</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Hari / Waktu</th>
                                    <th>Senin /16:30-19:30</th>
                                    <th>Rabu / 16:30-19:30</th>
                                    <th>Senin / 16:30-19:30</th>
                                    <th>Selasa / 14:30-17:30</th>
                                    <th>Kamis / 14:30-17:30</th>
                                </tr>
                                <tr>
                                    <th>Pertemuan 1</th>
                                    <td>20 Maret 2017</td>
                                    <td>22 Maret 2017</td>
                                    <td>20 Maret 2017</td>
                                    <td>21 Maret 2017</td>
                                    <td>23 Maret 2017</td>
                                </tr>
                                <tr>
                                    <th>Pertemuan 2</th>
                                    <td>27 Maret 2017</td>
                                    <td>29 Maret 2017</td>
                                    <td>27 Maret 2017</td>
                                    <td>Jumat, 31 Maret 2017 (D.2.K) = 16.30 - 19.30</td>
                                    <td>30 Maret 2017</td>
                                </tr>
                                <tr>
                                    <th>Pertemuan 3</th>
                                    <td>3 April 2017</td>
                                    <td>5 April 2017</td>
                                    <td>3 April 2017</td>
                                    <td>4 April 2017</td>
                                    <td>6 April 2017</td>

                                </tr>
                                <tr>
                                    <th>Pertemuan 4</th>
                                    <td>10 April 2017</td>
                                    <td>12 April 2017</td>
                                    <td>10 April 2017</td>
                                    <td>11 April 2017</td>
                                    <td>13 April 2017</td>

                                </tr>
                                <tr>
                                    <th>Tempat</th>
                                    <td>D.3.L</td>
                                    <td>D.3.L</td>
                                    <td>D.2.K</td>
                                    <td>D.3.L</td>
                                    <td>D.2.K</td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="pendaftaran">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-sm-12 bg-biru ">

                    <h2><strong>ALUR PENDAFTARAN</strong></h2>
                    <br>
                    <ol>
                        <li>Mengisi formulir pendaftaran dengan menekan tombol daftar dibawah</li>
                        <li>Bayar biaya pendaftaran sebesar <strong>Rp 25.000,00</strong>
                            <br/> Pembayaran bisa dilakukan langsung di camp Doscom, gedung D Lantai 1 Universitas Dian Nuswantoro </li>
                    </ol>
                </div>
                <div class="col-md-6 col-sm-12 fasilitas">

                    <h2><strong>FASILITAS</strong></h2>
                    <br>
                    <p>Fasilitas yang akan didapat berupa makanan ringan dan minum setiap pertemuan, bertanya sepuasnya dengan orang yang ahli dibidangnya, serta sertifikat.
                        <br>
                        <br> * Kami akan memilih 1 lulusan terbaik dari tiap kelas yang nantinya berhak mendapatkan hadiah serta free entry ke Seminar dan Release Party TealinuxOS pada bulan Mei 2017 mendatang.</p>
                </div>
            </div>

        </div>
    </section>
    <section id="daftar">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center bagian-daftar">
                    <a class="btn btn-default btn-lg" href="{{ url('daftar') }}">DAFTAR SEKARANG</a>
                </div>
                <div class="col-md-6 col-sm-12 fasilitas bg-biru" style="padding: 40px 20px 40px 50px;">
                    <h2><strong>KONTAK</strong></h2>
                    <div class="row">
                        <div class="col-md-3">
                            Tama
                        </div>
                        <div class="col-md-9">
                            <b><i class="fa fa-mobile fa-lg"></i>  &nbsp 0856 4281 5514</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Lita
                        </div>
                        <div class="col-md-9">
                            <i class="fa fa-mobile fa-lg"></i><b> &nbsp 0856 0025 2767</b>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section> -->




    <!-- Modal -->


    <div class="modal fade" id="modalLinux" role="dialog">
        <div class="modal-dialog"> 

            <!-- Modal content-->
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas <b>Linux Fundamental</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Mengenal, Mengoprasikan Linux, Teriminal dan Membuat varian Linux sendiri (Remastering)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat varian Linux sendiri dengan metode remastering.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            <b> -</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Linux</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Senin /16:30-19:30 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>20 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>27 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>3 April 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 4</th>
                                        <td>10 April 2017</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>

                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>

        </div>
    </div> 


    <!-- Modal -->
    <div class="modal fade" id="modalMobile" role="dialog">
        <div class="modal-dialog"> 

            <!-- Modal content-->
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas <b>Pemprograman Mobile</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Pengenalan OOP (Object Oriented Programming), Pengenalan tools untuk membuat aplikasi Android (Android Studio, AVD, Emulator), Membuat tampilan Aplikasi di Android, Membuat aplikasi lebih interaktif.
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat aplikasi Android yang interaktif.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            Mengerti dasar OOP (Object Oriented Programming)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Rabu / 16:30-19:30 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>22 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>29 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>5 April 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 4</th>
                                        <td>12 April 2017</td>
                                    </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> 


    <!-- Modal -->
     <div class="modal fade" id="modalWeb" role="dialog">
        <div class="modal-dialog"> 
            <!-- Modal content-->
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas <b>Pemprograman Web</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap), Belajar Backend dengan PHP, Berinteraksi dengan database MySql.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat aplikasi My Todo List dengan PHP dan MySql
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            HTML dan CSS (Dasar)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Web</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Senin / 16:30-19:30 /D.2.K</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>20 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>27 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>3 April 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 4</th>
                                        <td>10 April 2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>

                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="modalNetworking" role="dialog">
        <div class="modal-dialog"> 

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas <b>Jaringan Komputer</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Instalasi dan setting Mikrotik, Subnetting, Routing, Vpn, dan Hotspot.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Ketrampilan</b>
                        </div>
                        <div class="col-md-9">
                            Menguasai teknik instalasi dan setting Mikrotik, Subnetting, Routing, Vpn, dan Hotspot.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            Subnetting
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Jaringan Komputer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu /Tempat</th>
                                        <th>Selasa /14:30-17:30 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>21 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>Jumat, 31 Maret 2017 (D.2.K) = 16.30 - 19.30</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>4 April 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 4</th>
                                        <td>11 April 2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> 


    <!-- Modal -->
     <div class="modal fade" id="modalMultimedia" role="dialog">
        <div class="modal-dialog"> -->

            <!-- Modal content-->
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas <b>Multimedia Inkscape</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Belajar basic 2D dengan menggunakan aplikasi Inkscape
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat Objek 2D sesuai dengan materi
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            -
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Multimedia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu /Tempat</th>
                                        <th>Sabtu / 14:30-17:30 /D.2.K</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>23 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>30 Maret 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>6 April 2017</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 4</th>
                                        <td>13 April 2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>

        </div>
    </div>
   
    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Didukung penuh oleh
                    </p><a href="http://www.doscom.org">Dinus Open Source Community</a>
                </div>
                <div class="col-md-6 col-sm-12 footer-kanan">
                    <p>Tetap terhuhung </p>

                    <div class="row">
                        <div class="col-md-4">
                            <a class="white-text" href="https://www.facebook.com/doscomedia/"> <i class="fa fa-facebook-official"></i> doscomedia</a>
                        </div>
                        <div class="col-md-4">
                            <a class="white-text" href="https://twitter.com/doscomedia"><i class="fa fa-twitter"></i> @doscomedia</a>
                        </div>
                        <div class="col-md-4">
                            <a class="white-text" href="http://instagram.com/doscomedia"><i class="fa fa-instagram"></i> doscomedia</a>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="white-text" href="https://telegram.me/doscom"><i class="fa fa-paper-plane-o"></i> telegram.me/doscom</a>
                        </div>
                        <div class="col-md-8">
                            <a class="white-text" href="mailto:sekretariat@doscom.org?Subject=Hello%20Doscom"><i class="fa fa-envelope-o"></i> sekretariat@doscom.org</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --> 



    <!-- <script src="js/angular.min.js"></script> -->
    <!-- <script src="js/app.js" type="text/javascript"></script> -->


    <header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="{{ asset('images/logo-doscom.png')}}" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">
Doscom University<br></h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<!-- <li>Kelas Pemrograman  di Semarang, Indonesia</li> -->
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="#service">About</a></li>
				<li><a href="#program">Program</a></li>
				<li class="small-logo"><a href="#header"><img src="{{ asset('images/logo-menu.png')}}"  alt=""></a></li>
				<li><a href="#jadwal">Jadwal</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#daftar">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>About</h2>
			<h6>Tentang Doscom University</h6>
			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
						</div>
						<div class="service-list-col2">
							<h3>Doscom University</h3>
							<p><b>Doscom University adalah program pemblajaran Full Stack JavaScript
							immersive pertama di Indonesia. Kurikulum kami dirancang untuk membangun
							keahlian yang dapat diaplikasikan pada perkembangan dunia teknologi terkini.</b> <br>


						</div>
					</div>



				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="{{ asset('images/Suasana-Doscom-University-Kelas-Web.jpg')}}" width="630px" alt="">
				</figure>

			</div>
		</div>
	</section>
	<!--main-section-end-->



	<section class="main-section alabaster" id="program">
		<!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="img/about2.jpg" width="400px" alt="">
									<img src="img/about3.jpg" width="400px" alt="">

				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>Apa Yang Kita Lakukan?</h2>
					<P class="padding-b">Beberapa Pilihan Program Yang Anda Bisa Ikuti</P>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
                            <!-- <i class="fa-magic"></i> -->
                            <img src="{{ asset('images/icon/5.png')}}"  alt="">
                            
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3> &nbsp Web Programming </h3>
                            
                            <p >&nbsp Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap),<br> &nbsp Belajar Backend dengan PHP, Berinteraksi dengan database MySql.   </p>
                       
                            <br>
                            <a class="btn " data-toggle="modal" data-target="#modalWeb">Lihat Detail</a>

                        </div>
					</div>

                    <div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
                            <!-- <i class="fa-magic"></i> -->
                            <img src="{{ asset('images/icon/5.png')}}"  alt="">
                            
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3> &nbsp Female Dev </h3>
                            
                            <p>&nbsp Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap),<br> &nbsp Belajar Backend dengan PHP, Berinteraksi dengan database MySql.   </p>
                       <br>
                            <a class="btn " data-toggle="modal" data-target="#modalWeb">Lihat Detail</a>

                        </div>
					</div>


					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">

                        <img src="{{ asset('images/icon/4.png')}}" alt="">
                    </div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3> &nbsp Mobile Programing </h3>
                            <p>&nbsp  Pengenalan OOP (Object Oriented Programming), Pengenalan tools untuk <br> &nbsp membuat aplikasi Android (Android Studio, AVD, Emulator), Membuat tampilan 
                            <br> &nbsp Aplikasi di Android, Membuat aplikasi lebih interaktif.
 </p>
<a class="btn " data-toggle="modal" data-target="#modalMobile">Lihat Detail</a>
        

        </div>
                    </div>
                    

					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-06s">

                        <img src="{{ asset('images/icon/6.png')}}" alt="">

                    </div>
                        
                        
                        <div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>&nbsp Linux  Fundamental </h3>
                        <p>&nbsp  Mengenal, Mengoprasikan Linux, Teriminal dan Membuat varian Linux sendiri <br> &nbsp (Remastering)
 </p>
        
<br>

<a class="btn " data-toggle="modal" data-target="#modalLinux">Lihat Detail</a>


        </div>
                        
                    </div>
                    
                    <div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
                        <img src="{{ asset('images/icon/3.png')}}" alt="">


                    </div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>&nbsp Jaringan Komputer </h3>
                            <p>&nbsp Instalasi dan setting Mikrotik, Subnetting, Routing, Vpn, dan Hotspot </p>
                        
                            <br>
                <a class="btn " data-toggle="modal" data-target="#modalNetworking">Lihat Detail</a>


                    </div>
                    </div>
                    
                    <div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
                        <img src="{{ asset('images/icon/1.png')}}" alt="">


                    </div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>&nbsp Multimedia Inkscape </h3>
                            <p>&nbsp  Belajar basic 2D dengan menggunakan aplikasi Inkscape  </p>
                    <br>
                <a class="btn " data-toggle="modal" data-target="#modalMultimedia">Lihat Detail</a>


                    </div>
                    </div>
                    

                    <div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
                        <img src="{{ asset('images/icon/2.png')}}" alt="">


                    </div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>&nbsp Godot Game Engine </h3>
                            <p>&nbsp  Belajar basic 2D dengan menggunakan aplikasi Inkscape  </p>
                    <br>
                <a class="btn " data-toggle="modal" data-target="#modalMultimedia">Lihat Detail</a>


                    </div>
                    </div>


				</div>
			</div>
		</div>
	</section>
	<!--main-section alabaster-end-->


<!-- 
	<section class="main-section paddind" id="Portfolio">
		<div class="container">
			<h2>Blog</h2>
			<h6>Beberapa Foto Kegiatan di Knight Studio</h6>
			<div class="portfolioFilter">
			</div>

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box printdesign">
				<a href="blog.html"><img src="img/hacktiv1.jpg" alt=""></a>

			</div>
			<div class="Portfolio-box webdesign">
				<a href="blog.html"><img src="img/hacktiv2.jpg" alt=""></a>

			</div>
			<div class=" Portfolio-box branding">
				<a href="blog.html"><img src="img/hacktiv3.jpg" alt=""></a>

			</div>
			<div class=" Portfolio-box photography">
				<a href="blog.html"><img src="img/hacktiv4.jpg" alt=""></a>

			</div>
			<div class=" Portfolio-box branding">
				<a href="blog.html"><img src="img/hacktiv5.jpg" alt=""></a>

			</div>
			<div class=" Portfolio-box photography">
				<a href="blog.html"><img src="img/hacktiv1.jpg" alt=""></a>

			</div>
		</div>
	</section> -->
	<!--main-section-end-->

    <section class="jadwal" id="jadwal">
            <div class="container text-center">
                <h2 ><strong>JADWAL</strong></h2>
                <br>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <th>Linux</th>
                                    <th>Pemrograman Mobile</th>
                                    <th>Pemrograman Web</th>
                                    <th>Jaringan Komputer</th>
                                    <th>Multimedia Inkscape</th>
                                </tr>
    
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Hari / Waktu</th>
                                    <th>Senin /16:30-19:30</th>
                                    <th>Rabu / 16:30-19:30</th>
                                    <th>Senin / 16:30-19:30</th>
                                    <th>Selasa / 14:30-17:30</th>
                                    <th>Kamis / 14:30-17:30</th>
                                </tr>
                                <tr>
                                    <th>Pertemuan 1</th>
                                    <td>20 Maret 2017</td>
                                    <td>22 Maret 2017</td>
                                    <td>20 Maret 2017</td>
                                    <td>21 Maret 2017</td>
                                    <td>23 Maret 2017</td>
                                </tr>
                                <tr>
                                    <th>Pertemuan 2</th>
                                    <td>27 Maret 2017</td>
                                    <td>29 Maret 2017</td>
                                    <td>27 Maret 2017</td>
                                    <td>Jumat, 31 Maret 2017 (D.2.K) = 16.30 - 19.30</td>
                                    <td>30 Maret 2017</td>
                                </tr>
                                <tr>
                                    <th>Pertemuan 3</th>
                                    <td>3 April 2017</td>
                                    <td>5 April 2017</td>
                                    <td>3 April 2017</td>
                                    <td>4 April 2017</td>
                                    <td>6 April 2017</td>

                                </tr>
                                <tr>
                                    <th>Pertemuan 4</th>
                                    <td>10 April 2017</td>
                                    <td>12 April 2017</td>
                                    <td>10 April 2017</td>
                                    <td>11 April 2017</td>
                                    <td>13 April 2017</td>

                                </tr>
                                <tr>
                                    <th>Tempat</th>
                                    <td>D.3.L</td>
                                    <td>D.3.L</td>
                                    <td>D.2.K</td>
                                    <td>D.3.L</td>
                                    <td>D.2.K</td>


                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="main-section client-part" id="client">
		<div class="container">
			<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05"> “Saya lulusan SMK Multimedia dan tidak pernah coding sebelumnya.
					Setelah masuk Doscom University, saya yang awalnya tidak bisa, dengan bantuan dari instruktur dan materi
					pembelajaran Doscom University, saya mahir dalam 3 bulan, bahkan saya bisa membuat aplikasi hanya dalam waktu 5 hari”</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li><a href="#">
            	<img src="img/testi.jpg" width="100px" alt="">
                <h3>Mark Zuckerberg</h3>
                <span>Co-Founder, CEO Facebook	</span>
            </a></li>
			</ul>
		</div>
	</section> -->
	<!--main-section client-part-end-->
<!--     
    <div class="c-logo-part">
		<div class="container">
		<br><center>
		<h2>Jaringan Kerjasama<h2>
		</center>
			<ul>
				<li><a href="#"><img src="img/logo1.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo2.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo3.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo4.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo5.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo6.png" alt=""></a></li>
				<li><a href="#"><img src="img/logo7.png" width="250px" alt=""></a></li>
				<li><a href="#"><img src="img/logo8.png"  width="160px" alt=""></a></li>



			</ul>
		</div>
	</div> -->
	<!--c-logo-part-end-->






	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/rizki.jpg')}}" width="300px" alt="">
						<ul>
							<li><a href="https://twitter.com/rzlnx" class="fa fa-twitter"></a></li>
							<!-- <li><a href="https://facebook.com/rizki.mufti" class="fa fa-facebook"></a></li> -->
							<li><a href="https://github.com/rizkimufti" class="fa fa-git"></a></li>
							<li><a href="https://instagram.com/rzlnx.id" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Rizki Mufti Ilmawan</h3>
					<span class="wow fadeInDown delay-03s">Instruktur Web Programming</span>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/farah.jpg')}}" height="280px" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-git"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Farah Luthfi Oktarina</h3>
					<span class="wow fadeInDown delay-06s">Instruktur Female Dev</span>
				</div>
				
                <div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/punk.jpg')}}" height="120px" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-git"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Seviana Pungky Brilianti</h3>
					<span class="wow fadeInDown delay-06s">Instruktur Mobile Programming</span>
				</div>
				
                
                <div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/okta.jpeg')}}" height="280px" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-git"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Okta Arif Cahyawan</h3>
					<span class="wow fadeInDown delay-06s">Instruktur Linux Fundamental</span>
				</div>
				
                
                <div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/bayu.jpeg')}}" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-git"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Muhammad Bayu Hermawan</h3>
					<span class="wow fadeInDown delay-06s">Instruktur Jaringan Komputer</span>
				</div>
				
                
                
    
                
                <div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/abas.jpeg')}}" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<!-- <li><a href="https://facebook.com/" class="fa fa-facebook"></a></li> -->
							<li><a href="https://github.com/" class="fa fa-git"></a></li>
							<li><a href="https://instagram.com/" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Ahmad Basir</h3>
					<span class="wow fadeInDown delay-09s">Instruktur Multimedia Inkscape</span>
				</div>
		
          
                <div class="team-leader-box1">
                <center>

					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="{{ asset('images/.jpeg')}}" width="230px" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-git"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Reno Kurniawan</h3>
					<span class="wow fadeInDown delay-06s">Instruktur </span>
				</div>
				
        
        	</div>
		</div>


        
	</section>

	<!--main-section team-end-->
	<section class="business-talking" id="daftar">
		<!--business-talking-start-->
		<div class="container">
			<h2>DAFTAR DOSCOM UNIVERSITY </h2>
			<a class="link animated fadeInUp delay-1s servicelink" href="{{ url('daftar') }}">DAFTAR</a>
			<br>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=""></i>Address:</h3>
						<span>Universitas Dian Nuswantoro</span>
					</div>
				
					<div class="contact-info-box email clearfix">
						<h3><i class=""></i>email:</h3>
						<span>doscom@gmail.com</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
						<h3><i class=""></i>Phone:</h3>
                        <span>082123456789 ()</span>
                        <span>082123456789 ()</span>

					</div>

					<!-- <div class="contact-info-box hours clearfix">
						<h3><i class="fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> 1pm - 6pm<br><strong>Saturday - Sunday:</strong> Closed</span>
					</div> -->
                    <center>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/doscomedia" class="fa fa-twitter"></a>
                    <a href="https://instagram.com/doscomedia" class="fa fa-instagram"></a>
                    <center>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.51506429899533!2d110.40929010353575!3d-6.980860011903814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4c1c405183%3A0x3943842b992e87fb!2sCafetaria+udinus!5e0!3m2!1sid!2sid!4v1518617683734" width="550" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
	</div>
	
	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="{{ asset('images/logo-doscom.png')}}" alt=""></a></div>
			<span class="copyright">&copy;Doscom University. All Rights Reserved</span>
		
		</div><br>

	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
