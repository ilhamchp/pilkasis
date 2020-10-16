<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class LoginController extends Controller
{
    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return view('login');
        }else{
            return redirect('home');
        }
    }

    /**
     * Authenticate user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // Message untuk error validasi
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'exists' => ':attribute tidak terdapat di database.',
            'min' => ':attribute minimal :min karakter!'
        ];
        // Validasi form
        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:App\Models\Pengguna,username',
            'password' => 'required|min:6',
        ],$messages);

        // Cek validasi
        if($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput()
                ->with('sweetError', 'Periksa kembali form!');
        }else{
            // Jika validasi selesai dilakukan
            $pengguna = Pengguna::where('username',$request->username)->first();
            if (Hash::check($request->password, $pengguna->password)) {
                // Password cocok
                Session::put('nis',$pengguna->nis);
                Session::put('nama',$pengguna->nama);
                Session::put('username',$pengguna->username);
                Session::put('is_admin',$pengguna->is_admin);
                Session::put('login',TRUE);
                return redirect('home');
            }else{
                // Password salah
                return redirect('login')
                ->withInput()
                ->with('sweetError', 'Password salah!');
            }
        }
    }

    /**
     * Logout from apps.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session::flush();
        return view('login');
    }
}
