@extends('app-du')

@section('content')

    <div class="head">
        <i class=" glyphicon glyphicon-list-alt"></i><br> Terimakasi <u> {{$namapeserta}}</u> telah mendaftar (:
    </div>
    <h3 style="padding: 30px;line-height: 40px;text-align: center;">Silahkan lakukan pembayaran di <b>stand pendaftaran</b> kami di Gedung H atau <b>Camp Doscom</b> di Gedung D Lantai 1 [ Dekat Kantin ] Universitas Dian Nuswantoro - Udinus</h3>
    <h3 style="padding: 30px;line-height: 40px;text-align: center;"><a href="{{url('daftar')}}">Kembali / Daftar lagi</a></h3>

     <!-- Sudah bayar ? <br/>

     <a href="{{ url('/pembayaran/cek') }}"> Cek Pembayaran</a> -->

@endsection
