<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;

class KandidatController extends Controller
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
            $data['kandidat'] = Kandidat::all();
            return view('kandidat')->with($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }else{
            $kandidatAvailable = Pengguna::whereNotIn('nis',Kandidat::select('nis')->get()->toArray())->get();
            $data['data_kandidat'] = $kandidatAvailable;
            return view('kandidat_create')->with($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Message untuk error validasi
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'exists' => ':attribute tidak terdapat di database.',
            'unique' => ':attribute sudah dipakai.',
            'boolean' => ':attribute harus bernilai true / false.',
        ];

        // Validasi form
        $validator = Validator::make($request->all(), [
            'no_kandidat' => 'required|unique:App\Models\Kandidat,no_kandidat',
            'nis' => 'required|exists:App\Models\Pengguna,nis|unique:App\Models\Kandidat,nis',
            'jk_kandidat' => 'required|boolean',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'required'
        ],$messages);

        // Cek validasi
        if($validator->fails()) {
            return redirect('kandidat/create')
                ->withErrors($validator)
                ->withInput()
                ->with('sweet', 'Periksa kembali form!');
        }else{
            if($request->hasFile('foto')){
                // Simpan foto ke folder asset
                $storagePath = 'assets/images/';
                $fotoKandidat = $request->file('foto');
                $namaFoto   = 'Kandidat_'. $request->no_kandidat .'.'. $fotoKandidat->extension();
                $fotoKandidat->move($storagePath, $namaFoto);

                // Simpan data kandidat
                Kandidat::create([
                    'no_kandidat' => $request->no_kandidat,
                    'nis' => $request->nis,
                    'jk_kandidat' => $request->jk_kandidat,
                    'visi' => $request->visi,
                    'misi' => $request->misi,
                    'foto' => $namaFoto,
                ]);
                return redirect('kandidat')->with('sweet', 'Berhasil simpan data!');
            }
            // Jika foto gagal diupload
            return redirect('kandidat/create')
                ->withInput()
                ->with('sweet', 'Foto gagal upload! Silahkan coba lagi...');
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
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }else{
            $kandidatAvailable = Pengguna::whereNotIn('nis',Kandidat::select('nis')->where('nis','!=',$kandidat->nis)->get()->toArray())->get();
            $data['list_kandidat'] = $kandidatAvailable;
            $data['data_kandidat'] = $kandidat;
            return view('kandidat_edit')->with($data);
        }
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
        // Message untuk error validasi
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'exists' => ':attribute tidak terdapat di database.',
            'unique' => ':attribute sudah dipakai.',
            'boolean' => ':attribute harus bernilai true / false.',
        ];

        // Validasi form
        $validator = Validator::make($request->all(), [
            'no_kandidat' => 'required|unique:App\Models\Kandidat,no_kandidat,'. $kandidat->no_kandidat,
            'nis' => 'required|exists:App\Models\Pengguna,nis|unique:App\Models\Kandidat,nis,'. $kandidat->no_kandidat,
            'jk_kandidat' => 'required|boolean',
            'visi' => 'required',
            'misi' => 'required'
        ],$messages);

        // Cek validasi
        if($validator->fails()) {
                return redirect('kandidat/'. $kandidat->no_kandidat .'/edit')
                ->withErrors($validator)
                ->withInput()
                ->with('sweet', 'Periksa kembali form!');
        }else{
            if($request->foto==null){
                // Update data kandidat
                $kandidat->update([
                    'no_kandidat' => $request->no_kandidat,
                    'nis' => $request->nis,
                    'jk_kandidat' => $request->jk_kandidat,
                    'visi' => $request->visi,
                    'misi' => $request->misi
                ]);
                return redirect('kandidat')->with('sweet', 'Berhasil simpan data!');
            }else if($request->hasFile('foto')){
                // Simpan foto ke folder asset
                $storagePath = 'assets/images/';
                $fotoKandidat = $request->file('foto');
                $namaFoto   = 'Kandidat_'. $request->no_kandidat .'.'. $fotoKandidat->extension();
                $fotoKandidat->move($storagePath, $namaFoto);

                // Hapus foto lama
                $file_path = public_path('assets/images/'. $kandidat->foto);
                if(\File::exists($file_path)){
                    \File::delete($file_path);
                }
                
                // Update data kandidat
                $kandidat->update([
                    'no_kandidat' => $request->no_kandidat,
                    'nis' => $request->nis,
                    'jk_kandidat' => $request->jk_kandidat,
                    'visi' => $request->visi,
                    'misi' => $request->misi,
                    'foto' => $namaFoto,
                ]);
                return redirect('kandidat')->with('sweet', 'Berhasil simpan data!');
            }else{
                // Jika gagal upload foto
                return redirect('kandidat/'. $kandidat->no_kandidat .'/edit')
                ->withInput()
                ->with('sweet', 'Gagal upload foto!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kandidat  $kandidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kandidat $kandidat)
    {
        $file_path = public_path('assets/images/'. $kandidat->foto);
        if(\File::exists($file_path)){
            \File::delete($file_path);
        }
        $kandidat->delete();
        return redirect('kandidat')->with('sweet', 'Berhasil menghapus data!');
    }
}
