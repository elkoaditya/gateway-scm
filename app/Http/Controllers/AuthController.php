<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }
    public function login (Request $request) {
        // create validator untuk username password
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        // jika validator gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $user = DataUser::where('username', $request->username)->first();
            $key = 'fresto6';
            $password = md5($request->password.$key).md5($request->password);
            if ($user->password == $password) {
                Auth::loginUsingId($user->id);
                return redirect('/');
            } else {
                dd($request->password, $password, $user->password);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
