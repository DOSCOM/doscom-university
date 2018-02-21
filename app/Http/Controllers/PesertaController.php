<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pesertas;
use App\Kelas;

use App\User;
use Auth;
class PesertaController extends Controller
{

    public function telegram()
    {
      // Laravel
      $response = \Telegram::getMe();

      $botId = $response->getId();
      $firstName = $response->getFirstName();
      $username = $response->getUsername();

      dd($username);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
        $pesertas = Pesertas::all();
        $kelass = Kelas::all();


        $jumlahPesertaBayar = 0;
        $jumlahAnakBootcampBayar = 0;
        $jumlahBukanAnakBootcampBayar = 0;
        $jumlahAnakBootcamp =0;
        $jumlahBukanAnakBootcamp =0;

        foreach($pesertas as $peserta)
        {
            if($peserta->status_pembayaran == 1)
            {
              // Mencari Jumlah hanya yang udah daftar
                if($peserta->anak_bootcamp == 1)
                {
                    $jumlahAnakBootcampBayar = $jumlahAnakBootcampBayar + $peserta->kelass->count();
                } else
                {
                    $jumlahBukanAnakBootcampBayar = $jumlahBukanAnakBootcampBayar + $peserta->kelass->count();
                }

                //$jumlahPesertaBayar = $jumlahPesertaBayar + $peserta->kelass->count();
            }
            // Mencari jumlah keseluruhan
            if($peserta->anak_bootcamp == 1)
            {
              $jumlahAnakBootcamp++;
            } else
            {
              $jumlahBukanAnakBootcamp++;
            }

        }

        $totalUangAnakBootcamp = $jumlahAnakBootcampBayar * 25000  ;

        $totalUangAnakBukanBootcamp = $jumlahBukanAnakBootcampBayar * 25000;

        $totalUangPendaftaran = $totalUangAnakBukanBootcamp + $totalUangAnakBootcamp;
        //dd($totalUangPendaftaran . " ". $totalUangAnakBootcamp . " ". $totalUangAnakBukanBootcamp);

        return view('du.peserta.index')->withPesertas($pesertas)
                                       ->withKelass($kelass)
                                       ->withTotaluangpendaftaran($totalUangPendaftaran)
                                       ->withJumlahanakbootcamp($jumlahAnakBootcamp)
                                       ->withJumlahbukananakbootcamp($jumlahBukanAnakBootcamp);
    }

//    Kalo mau coba coba disini
    public function cobacoba()
    {
           // $coba = Pesertas::find(1);
    //        $kelas = new Kelas(array('nama_kelas'=>'Sembarang'));
    //
    //        $coba->kelass()->save($kelas);

            $peserta = Pesertas::find(2);
        // save satu-satu
            $kelas = Kelas::find(1);

        $kelasIds = [5];

        dd($peserta->kelass()->sync($kelasIds));



        // saveMany = langsung banyak pake array
//            $kelasbanyak = [
//                Kelas::find(1),
//                Kelas::find(2),
//                Kelas::find(3),
//            ];
            // metode lempar object
            //$peserta->kelass()->save($kelas);
            // metode attach
            //$peserta->kelass()->attach([3,4]);

            // metode detach (kebalikanya attach)
            //$peserta->kelass()->detach([1,2,3]);
//            if($peserta->kelass->contains($kelasbanyak))
//            {
//                dd('sudah ada! - di kelas banyak.');
//
//            } else
//            {
//                // saveMany
//                $peserta->kelass()->saveMany($kelasbanyak);
//                dd('baru ditambhakan - di kalas banyak');
//            }
//
//            // cek apakah sudah ada dengan "contains"
//            if($peserta->kelass->contains($kelas))
//            {
//                dd('sudah ada! - di kelas tunggal');
//            } else
//            {
//                $peserta->kelass()->save($kelas);
//                dd('baru ditambhakan');
//            }
//        dd($peserta);


        return view('du.coba')->withPeserta($peserta)->withKelas($kelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kelas = Kelas::lists('nama_kelas', 'id');
        //dd($kelas);
        return view('du.pendaftaran');
    }

    // pembayaran

    public function pembayaran()
    {

      return view('du.pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $peserta = new Pesertas();
        $peserta->nama = $request->get('nama');
        $peserta->email = $request->get('email');
        $peserta->nohp = $request->get('nohp');
        $peserta->status_peserta = $request->get('status_peserta');
        $peserta->total_bayar = 0;
        //count($request->get('kelas')) * 25000;

        $peserta->status_pembayaran = 0;
        $peserta->alasan = $request->get('alasan');
        $peserta->updated_by = $request->get('updated_by') ;
        $peserta->save();

        $peserta->kelass()->sync($request->get('kelas'));


        return view('du.pembayaran')->withNamapeserta($peserta->nama);
    }

//    Lunasi

    public function lunasi($id)
    {

        $peserta = Pesertas::find($id);
        $peserta->status_pembayaran = 1;
        $peserta->updated_by = Auth::user()->name;
        $peserta->save();

        return redirect('peserta');

    }

    //    Batal Lunasi

    public function batal_lunasi($id)
    {
        $peserta = Pesertas::find($id);
        $peserta->status_pembayaran = 0;
        $peserta->updated_by = Auth::user()->name;
        $peserta->save();

        return redirect('peserta');

    }

    // ANAK BOOTCAMP

    public function anak_bootcamp($id)
    {
      $peserta = Pesertas::find($id);
      $peserta->anak_bootcamp = 1;
      $peserta->updated_by = Auth::user()->name;
      $peserta->save();

      return redirect('peserta');
    }

    // BUKAN ANAK BOOTCAMP

    public function bukan_anak_bootcamp( $id)
    {
      $peserta = Pesertas::find($id);
      $peserta->anak_bootcamp = 0;
        $peserta->updated_by = Auth::user()->name;
      $peserta->save();

      return redirect('peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Pesertas::find($id);
        $kelas = Kelas::lists('nama_kelas', 'id');
        return view('du.peserta.edit')->withPeserta($peserta)
                                      ->withKelas($kelas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $peserta_id = $request->input('peserta_id');

      $peserta = Pesertas::find($peserta_id);
      $peserta->nama = $request->input('nama');
      $peserta->email = $request->input('email');
      $peserta->nohp = $request->input('nohp');
      $peserta->status_peserta = $request->input('status_peserta');
      $peserta->updated_by = $request->get('updated_by');
      $peserta->total_bayar = 0;

      //count($request->get('kelas')) * 25000;
      $peserta->anak_bootcamp =  $request->input('anak_bootcamp');

      $peserta->status_pembayaran = $request->input('status_pembayaran');
      $peserta->alasan = $request->input('alasan');
      $peserta->save();

      $peserta->kelass()->sync($request->input('kelas'));

      return redirect('peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta= Pesertas::find($id);

        $peserta->delete();

        return redirect('peserta');
    }
}
