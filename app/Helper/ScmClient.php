<?php
namespace App\Helper;
use http\Message\Body;
use Illuminate\Support\Facades\Http;

class ScmClient {
    protected $host;
    protected $api;
    public function __construct() {
        $this->host = 'https://scm-v2.elco.systems/api/scm/';
        $this->api = Http::withHeaders([
           'api-key' => 'UunMZCvvreujKp4pIvPErxRFQRFbOXdUG7NZhJXZM6EciKMpV4gQ9VmUGXSp1XCMK8emIaMxb8Dq5qEOkvXCRXaDCF1zz4FdgwHohZHqkokQuIMArPE3OKz9kvWH1syx'
        ]);
    }
    public function GetProjects($instansi_id) {
        $response = $this->api->post($this->host.'projects', [
            'instansi_id' => $instansi_id
        ]);
        return json_decode($response->body())->status != 'error' ? json_decode($response->body())->data : [];
    }


}
