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
        $url = 'longmsg.id:8117/project-service/project';
        $response = $client->get($url, [
            'headers' => $headers
        ]);
        if($response->getBody()){
            $response = $response->getBody()->getContents();
            $result = json_decode($response);
            $data["report"] = $result->body;
            return view('report/index', $data);
        }
    }

    //detail get id
    public function detail()
    {

        $request = Services::request();
        $project_id = $request->getPost('project_id');

        $client = new \GuzzleHttp\Client(array(
            'curl'              => array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false),
            'allow_redirects'   => false,
            'cookies'           => true,
            'verify'            => false
        ));

        $session = Services::session();
        $request = Services::request();
        $token = $session->get('token');

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];

        $response = $client->get('longmsg.id:8117/project-service/project/' . $project_id, [
            'headers' => $headers
        ]); //user

        $response = $response->getBody()->getContents(); //user
        $test = json_decode($response); //user
        return json_encode([
            "project_id" => $test->body->project_id,
            "name" => $test->body->name,
            "user_id" => $test->body->user_id,
            "value_project" => $test->body->value_project,
            "province" => $test->body->province,
            "city" => $test->body->city,
            "sub_district" => $test->body->sub_district,
            "address" => $test->body->address,
            "type" => $test->body->type,
            "picture" => $test->body->picture,
            "created_at" => $test->body->created_at,
            "updated_at" => $test->body->updated_at
        ]);
    }

    public function lihat()
    {
        $data = array();

        $session = Services::session();
        $client = new \GuzzleHttp\Client(array(
            'curl'              => array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false),
            'allow_redirects'   => false,
            'cookies'           => true,
            'verify'            => false
        ));
        $token = $session->get('token');
        $project_view =  $session->get('project_view');

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];
        $url = 'longmsg.id:8117/project-service/project-detail/' . $project_view;

        $response = $client->get($url, [
            'headers' => $headers
        ]);

        if ($response->getBody()) {
            $response = $response->getBody()->getContents();
            $result = json_decode($response);
            // die(dd($result));
            $data["report"] = $result->body;
            $data["persen"] = $result->body[0]->percentage;
            return view('report/project', $data);
        }
    }

    public function persentage()
    {

        $session = Services::session();
        $request = Services::request();
        $project_id = $request->getPost('project_id');
        $data["project_view"] = $project_id;
        $session->set($data);


        $client = new \GuzzleHttp\Client(array(
            'curl'              => array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false),
            'allow_redirects'   => false,
            'cookies'           => true,
            'verify'            => false
        ));
        $request = Services::request();
        $token = $session->get('token');

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];

        $response = $client->get('longmsg.id:8117/project-service/project-detail/' . $project_id, [
            'headers' => $headers
        ]);
        $response = $response->getBody()->getContents();
        $test = json_decode($response);
        return json_encode([
            "user_id" => $test->body[0]->user_id,
            "project_id" => $test->body[0]->project_id,
            "type" => $test->body[0]->type,
            "description" => $test->body[0]->description,
            "percentage" => $test->body[0]->percentage,
            "picture" => $test->body[0]->picture,
            "created_at" => $test->body[0]->created_at,
            "updated_at" => $test->body[0]->updated_at
        ]);
    }
}
