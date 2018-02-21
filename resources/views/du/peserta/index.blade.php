@extends('app')

@section('script-at-header')

	{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"
		  xmlns="http://www.w3.org/1999/html">
@endsection

@section('title')
	Peseta
@endsection

@section('content')
	@if(count($pesertas) > 0)

		<table id="example" class="table table-striped " width="100%" cellspacing="0">
			<thead>
			<td>ID</td>
			<td>Nama</td>
			<td>Email	</td>

			<td>Nomer Handphone	</td>
			<td>Kelas</td>
			<td>Total Bayar</td>
			<td>Status Bayar	</td>
			<td>SFD ?</td>
			<td>Aksi	</td>
			<td>Petugas</td>


			</thead>
			<tbody>
			<?php $no = 1; ?>
			@foreach($pesertas as $peserta)
				<tr>
					<td>{{$no}}</td>
					<td><a href="{{url('peserta/edit/'. $peserta->id )}}"> {{$peserta->nama}}</a></td>
					<td>{{$peserta->email}}</td>
					<td>{{$peserta->nohp}}</td>
					<td>
						@foreach($peserta->kelass as $kelasPeserta)
							{{ $kelasPeserta->nama_kelas  }} -
						@endforeach
					</td>
					<td>
						@if($peserta->anak_bootcamp == 1)
							{{(count($peserta->kelass) * 25000) - 25000}}
						@else
							{{count($peserta->kelass) * 25000}}

						@endif

					</td>
					<td>
						@if($peserta->status_pembayaran == 0)
							<span style="color:red;font-weight: bold;">Belum Lunas</span>
						@else
							<span style="color:limegreen;">Lunas</span>
						@endif
					</td>
					<td>
						@if($peserta->anak_bootcamp == 1)
							Ya <br/>
							<a href="{{ url('peserta/anak-bootcamp/bukan/'.$peserta->id )}}">Bukan</a>
						@else
							Tidak<br/>
							<a href="{{ url('peserta/anak-bootcamp/iya/'.$peserta->id )}}">Iya</a>
						@endif

					</td>
					<td>
						@if($peserta->status_pembayaran == 0)
							<a href="{{ url('peserta/lunasi/'.$peserta->id )}}">Lunasi</a>
						@else
							<a href="{{ url('peserta/batal-lunasi/'.$peserta->id )}}">Batal Lunasi</a>
						@endif
						<a style="color:red;" href="{{ url('peserta/delete/'. $peserta->id ) }}">Hapus</a>
					</td>
					<td>{{$peserta->updated_by}}</td>

				</tr>
				<?php $no++; ?>

			@endforeach

			@else
				Belum ada yg daftar ): - semangat promosi
			@endif



			</tbody>

		</table>
		<h3>Jumlah Peserta</h3>


		<div class="row text-center">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-9 text-left">
						<h4>Anak SFD</h4>
					</div>
					<div class="col-md-3">
						<h4>{{ $jumlahanakbootcamp}}</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 text-left">
						<h4>Bukan Anak SFD</h4>
					</div>
					<div class="col-md-3">
						<h4>{{$jumlahbukananakbootcamp}}</h4>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-md-6">
						<h4>Mendaftar </h4>
					</div>
					<div class="col-md-6">
						<h4>Membayar </h4>
					</div>

				</div>
				<div class="row">
					<div class="col-md-6">
						<h1 style="color: #2e6da4">{{count($pesertas)}}</h1>
					</div>
					<div class="col-md-6">
						<h1 style="color: limegreen"> {{ count($pesertas->where('status_pembayaran', 1)) }}</h1>
					</div>

				</div>


			</div>
			<div class="col-md-8">
				<table class="table table-responsive table-striped ">
					<thead>
					<td>Nama Kelas</td>
					<td>Mendaftar</td>
					<td>Membayar</td>
					</thead>
					<tbody>
					@foreach($kelass as $kelas)

						<tr>

							<td class="text-right">{{ $kelas->nama_kelas}}</td>

							<td>{{ $kelas->pesertass->count() }}</td>

							<td>{{ $kelas->pesertass->where('status_pembayaran', 1)->count() }}</td>
						</tr>

					@endforeach

					<tr style="font-weight: bold">
						<td></td>
						<td>Total </td>
						<td>
							{{ $totaluangpendaftaran - ($jumlahanakbootcamp * 25000 ) }}
						</td>
					</tr>

					</tbody>
				</table>
			</div>
		</div>



@endsection

@section('script-at-footer')
	<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>

@endsection

