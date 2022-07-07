<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.view');
    }

    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        // if user

        $users = DB::table('anggota')->where("email", $email)->get();
        $petugas = DB::table('petugas')->where("email", $email)->get();
        // is user
        var_dump($users);
        var_dump($petugas);

        if (isset($petugas[0])) { //apakah email tersebut ada atau tidak
            if ($petugas[0]->password == $password) {
                session(['login-sess' => TRUE]);
                session(['isPetugas' => TRUE]);
                return redirect()->intended('/');
            } else {
                return back()->with('loginErr', 'Failed');
            }
        } else {
            if (isset($users[0])) {

                if ($users[0]->password == $password) {
                    session(['login-sess' => TRUE]);
                    session(['isAnggota' => TRUE]);
                    return redirect()->intended('/');
                } else {
                    return back()->with('loginErr', 'Failed');
                }
            }
        }
        // } else {
        //     return back()->with('loginErr', 'Failed');
        // }
    }
}
