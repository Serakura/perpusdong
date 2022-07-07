<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function show()
    {
        return view('signup');
    }

    public function register(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $nama = $request->nama;

        $is_user = DB::table('anggota')->where('email', $email)->get();

        if (isset($is_user[0])) {
            echo "<script>alert('email sudah digunakan')</script>";
        } else {
            DB::table('anggota')->insert([
                'nama' => $nama,
                'email' => $email,
                'password' => $password
            ]);

            return redirect('/login');
        }
    }
}
