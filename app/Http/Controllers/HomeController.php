<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Kandidat;
use App\Models\PerolehanSuara;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        if(!Session::get('login')){
            return redirect('login')
                ->with('sweetError', 'Anda harus login terlebih dahulu!');
        }
        else{
            $data['jml_pengguna'] = Pengguna::all()->count();
            $data['sdh_memilih'] = PerolehanSuara::all()->count();
            $data['blm_memilih'] = Pengguna::all()->count() - PerolehanSuara::all()->count();
            $data['jml_kandidat'] = Kandidat::all()->count();
            $data['kandidat_laki'] = Kandidat::where('jk_kandidat','1')->get()->count();
            $data['kandidat_perempuan'] = Kandidat::where('jk_kandidat','0')->get()->count();
            return view('beranda')->with($data);
        }
    }
}
