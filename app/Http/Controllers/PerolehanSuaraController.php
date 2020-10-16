<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\PerolehanSuara;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Session;

class PerolehanSuaraController extends Controller
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
            $daftar_kandidat = Kandidat::all();
            $perolehan_suara = new Collection();
            foreach($daftar_kandidat as $kandidat){
                $no_kandidat = $kandidat->no_kandidat;
                if($kandidat->jk_kandidat == 1){
                    $data_kandidat = Kandidat::where('no_kandidat', $kandidat->no_kandidat)
                    ->with(['perolehanSuara1'])
                    ->first();
                    $perolehan_suara->push($data_kandidat);
                }else{
                    $data_kandidat = Kandidat::where('no_kandidat', $kandidat->no_kandidat)
                    ->with(['perolehanSuara2'])
                    ->first();
                    $perolehan_suara->push($data_kandidat);
                }
            }
            $data['daftar_kandidat'] = $perolehan_suara;
            return view('perolehan_suara')->with($data);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerolehanSuara  $perolehanSuara
     * @return \Illuminate\Http\Response
     */
    public function show(PerolehanSuara $perolehanSuara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerolehanSuara  $perolehanSuara
     * @return \Illuminate\Http\Response
     */
    public function edit(PerolehanSuara $perolehanSuara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerolehanSuara  $perolehanSuara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerolehanSuara $perolehanSuara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerolehanSuara  $perolehanSuara
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerolehanSuara $perolehanSuara)
    {
        //
    }
}
