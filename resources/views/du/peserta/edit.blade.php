@extends('app')

@section('script-at-header')
<style media="screen">
	select[multiple], select[size]{
		height: 100px;
	}
</style>

@endsection

@section('title')
Peseta : {{$peserta->nama}}
@endsection

@section('content')


    <form class="form-horizontal" method="post" action='{{ url("/peserta/update") }}'>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="peserta_id" value="{{ $peserta->id }}{{ old('peserta') }}">
		<input type="hidden" name="updated_by" value="{{ Auth::user()->name}}">
        <div class="form-group">
            <label for="inputNama" class="control-label col-xs-2">Nama</label>
            <div class="col-xs-6">
                <input value="@if(!old('nama')){{$peserta->nama}}@endif{{ old('nama') }}" type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">Email</label>
            <div class="col-xs-6">
                <input value="@if(!old('email')){{$peserta->email}}@endif{{ old('email') }}" type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
				<div class="form-group">
						<label for="inputNope" class="control-label col-xs-2">Nomer Hape</label>
						<div class="col-xs-6">
								<input value="@if(!old('nohp')){{$peserta->nohp}}@endif{{ old('nohp') }}" type="text" name="nohp" class="form-control" id="inputNope" placeholder="Nomor Nope">
						</div>
				</div>
				<div class="form-group">
						<label for="inputStatus" class="control-label col-xs-2">Status Peserta</label>
						<div class="col-xs-6">
							<select class="form-control" name="status_peserta" required="required">
									<option >--Pilih--</option>
									<option value="mahasiswa" {{ $peserta->status_peserta == 'mahasiswa' ? "selected" : "" }} >Mahasiswa</option>
									<option value="pelajar" {{ $peserta->status_peserta == 'pelajar' ? "selected" : "" }} >Pelajar</option>
									<option value="umum" {{ $peserta->status_peserta == 'umum' ? "selected" : "" }} >Umum</option>
							</select>

						</div>
				</div>
				<div class="form-group">
						<label for="inputBootcamp" class="control-label col-xs-2">Anak SFD</label>
						<div class="col-xs-6">
							<select class="form-control" name="anak_bootcamp" required="required">
									<option >--Pilih--</option>
									<option value="0" {{ $peserta->anak_bootcamp == 0 ? "selected" : "" }} >Ya</option>
									<option value="1" {{ $peserta->anak_bootcamp == 1 ? "selected" : "" }} >Tidak</option>

							</select>

						</div>
				</div>
				<div class="form-group">
						<label for="inputStaKelas" class="control-label col-xs-2">Kelas</label>
						<div class="col-xs-6">
							{!! Form::select('kelas[]', $kelas,
									$peserta->kelass->lists('id')->toArray(),
									['class' => 'form-control',
									'multiple' => 'multiple']) !!}
									* Untuk memilih beberapa kelas, gunakan [CRTL] atau [SHIFT] saat memilih ( :
						</div>
				</div>
				<div class="form-group">
						<label for="inputBayar" class="control-label col-xs-2">Status Bayar</label>
						<div class="col-xs-6">
							<select class="form-control" name="status_pembayaran" required="required">
									<option >--Pilih--</option>
									<option value="0" {{ $peserta->status_pembayaran == 0 ? "selected" : "" }} >Belum Lunas</option>
									<option value="1" {{ $peserta->status_pembayaran == 1 ? "selected" : "" }} >Lunas</option>

							</select>

						</div>
				</div>
				<div class="form-group">
						<label for="inputAlasan" class="control-label col-xs-2">Alasan</label>
						<div class="col-xs-6">
								<textarea name="alasan" class="form-control">@if(!old('alasan')){{$peserta->alasan}}@endif{{ old('alasan') }}</textarea>
								<!-- <input value="@if(!old('alasan')){{$peserta->alasan}}@endif{{ old('alasan') }}" type="text" name="alasan" class="form-control" id="inputAlasan" placeholder="ALasan"> -->
						</div>
				</div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Perbaharui</button>
								<a href="{{  url('peserta/delete/'.$peserta->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Hapus</a>

            </div>
        </div>
    </form>





@endsection

@section('script-at-footer')

@endsection
