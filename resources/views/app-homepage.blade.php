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
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <style media="screen">
        .footer-kanan .row {
            margin-top: 7px !important;
        }
    </style>
</head>

<body>



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

    </section>
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
        <div class="modal-dialog">

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
    <footer>
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
    </footer>

    <!-- <script src="js/angular.min.js"></script> -->
    <!-- <script src="js/app.js" type="text/javascript"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/rAF.js"></script>
    <script src="js/demo-1.js"></script>
    <script src="js/grid.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
