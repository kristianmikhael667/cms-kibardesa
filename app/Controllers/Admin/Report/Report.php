<?php

namespace App\Controllers\Admin\Report;

use App\Controllers\Base\BaseController;
use Config\Services;


class Report extends BaseController
{
    public function index()
    {
        $request = Services::request();
        $session = Services::session();
        $client = new \GuzzleHttp\Client(array(
            'curl'              => array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false),
            'allow_redirects'   => false,
            'cookies'           => true,
            'verify'            => false
        ));
        $token = $session->get('token');
        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ];
        $url = 'longmsg.id:8117/project-service/project-detail/7';
        $response = $client->get($url, [
            'headers' => $headers
        ]);
        if($response->getBody()){
            $response = $response->getBody()->getContents();
            $result = json_decode($response);
            // die(dd($result->body[0]->percentage));
            $data["report"] = $result->body;
            $data["result"] = $result->body[0]->percentage;
            return view('report/index', $data);

        }
        // $data = [];
        // $result = curlHelper('', 'GET');
        // $data["report"] = $result;
    }
}
