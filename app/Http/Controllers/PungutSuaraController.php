<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\PerolehanSuara;
use Illuminate\Http\Request;
use Session;

class PungutSuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }else{
            $suara = PerolehanSuara::find(Session::get('nis'));
            if($suara==null){
                // Tampilkan kandidat 1
                $kandidat = Kandidat::where('jk_kandidat','1')->get();
                $data['nama_sesi'] = "Pemungutan Suara Kandidat Laki - Laki";
                $data['daftar_kandidat'] = $kandidat;
                return view('pungut_suara')->with($data);
            }else{
                if($suara->no_kandidat_1==null){
                    // Tampilkan kandidat 1
                    $kandidat = Kandidat::where('jk_kandidat','1')->get();
                    $data['nama_sesi'] = "Pemungutan Suara Kandidat Laki - Laki";
                    $data['daftar_kandidat'] = $kandidat;
                    return view('pungut_suara')->with($data);
                }else if($suara->no_kandidat_2==null){
                    // Tampilkan kandidat 2
                    $kandidat = Kandidat::where('jk_kandidat','0')->get();
                    $data['nama_sesi'] = "Pemungutan Suara Kandidat Perempuan";
                    $data['daftar_kandidat'] = $kandidat;
                    return view('pungut_suara')->with($data);
                }else{
                    return redirect('home')
                    ->with('sweetInfo', 'Anda sudah melakukan pemungutan suara!');
                }
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Melakukan pemungutan suara.
     *
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function pungutSuara(Kandidat $kandidat)
    {
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }else{
            if($kandidat->jk_kandidat==1){
                // Jika kandidat laki laki
                $suara = PerolehanSuara::updateOrCreate(
                    ['nis_pemilih' => Session::get('nis')],
                    ['no_kandidat_1' => $kandidat->no_kandidat]
                );

                return redirect('pungut-suara')
                ->with('sweetInfo', 'Berhasil memilih '. $kandidat->pengguna->nama.'!');
            }else{
                // Jika kandidat perempuan
                $suara = PerolehanSuara::updateOrCreate(
                    ['nis_pemilih' => Session::get('nis')],
                    ['no_kandidat_2' => $kandidat->no_kandidat]
                );
                return redirect('home')
                ->with('sweetInfo', 'Berhasil memilih '. $kandidat->pengguna->nama.'!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function show(Kandidat $kandidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Kandidat $kandidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kandidat $kandidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kandidat $kandidat)
    {
        //
    }
}
