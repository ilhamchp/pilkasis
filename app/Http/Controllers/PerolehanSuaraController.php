<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\PerolehanSuara;
use Illuminate\Http\Request;

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
            $kandidat = Kandidat::all();
            $data['daftar_kandidat'] = $kandidat;
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
