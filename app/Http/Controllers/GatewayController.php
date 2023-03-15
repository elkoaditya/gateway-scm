<?php

namespace App\Http\Controllers;

use App\Helper\ScmClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $Scm = new ScmClient();
        $result = $Scm->GetProjects(INSTANSI_ID);
        return view('gateway.index', compact('result'));
    }
    public function requestToken($token) {
        try {
            $url = Crypt::decrypt($token);

            $res = Http::withHeaders([
                'api-key' => 'UunMZCvvreujKp4pIvPErxRFQRFbOXdUG7NZhJXZM6EciKMpV4gQ9VmUGXSp1XCMK8emIaMxb8Dq5qEOkvXCRXaDCF1zz4FdgwHohZHqkokQuIMArPE3OKz9kvWH1syx',
                'verify' => false,
            ])->withOptions([
                'verify' => false,
            ])->post('https://'.$url.'/api/login/generate-token', [
                'id' => Auth::user()->id,
                'username' => Auth::user()->username,
                'hash' => Auth::user()->password,
            ]);
            $res = json_decode($res->body());
            $token = $res->token;
            if ($res->status == 'success') {
                return view('gateway.loading', compact('token', 'url'));
            } else {
                Auth::logout();
                return redirect('/login');
            }

        } catch (\Exception $err) {
            dd($err);
        }
    }
}
