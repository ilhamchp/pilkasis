<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pengguna'] = Pengguna::all();
        return view('pengguna')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // untuk validasi form
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'unique' => ':attribute sudah dipakai.',
            'boolean' => ':attribute harus bernilai true / false.',
            'password' => ':attribute tidak valid.',
            'min' => ':attribute minimal 6 karakter!'
        ];
        $validator = Validator::make($request->all(), [
            'nis' => 'required|unique:App\Models\Pengguna,nis',
            'nama' => 'required',
            'username' => 'required|unique:App\Models\Pengguna,username',
            'password' => 'required|min:6',
            'is_admin' => 'required|boolean'
        ],$messages);

        if($validator->fails()) {
            toast('Error Toast','error');
            return redirect('pengguna/create')
                        ->withErrors($validator)
                        ->withInput()->with('sweet', 'Periksa kembali form!');
        }else{
            Pengguna::create([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'is_admin' => $request->is_admin
            ]);
            return redirect('pengguna')->with('sweet', 'Berhasil simpan data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
