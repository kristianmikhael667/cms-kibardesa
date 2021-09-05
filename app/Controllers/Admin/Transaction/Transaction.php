<?php

namespace App\Controllers\Admin\Transaction;

use App\Controllers\Base\BaseController;
use Config\Services;

class Transaction extends BaseController
{

  //UNPAID USER
  public function index()
  {
    $data = [];
    $result = curlHelper('https://dev.kibardesa.id/payment-service/report/user-info/kibar-reg/UNPAID', 'GET');
    $data["results"] = $result;


    return view('transaction/index', $data);
  }

  public function paid()
  {
    $data = [];
    $result = curlHelper('https://jalindesaapi.connexist.com/ppob-service/report-detail?status=PAID', 'GET');
    $data["results"] = $result;


    return view('transaction/paid', $data);
  }

  public function periode()
  {
    $request = Services::request();
    $session = Services::session();
    $client = new \GuzzleHttp\Client();
    $start_date = $request->getPost('start_date');
    $end_date = $request->getPost('end_date');

    $headers = [
      'Authorization' => 'Bearer ' . $session->get('token'),
      'Accept'     => 'application/json',
    ];

    $url = 'https://jalindesaapi.connexist.com/ppob-service/report-detail?status=PAID&stdate=' . $start_date . '&endate=' . $end_date;
    // var_dump($url);
    // die();
    $response = $client->get($url, [
      'headers' => $headers
    ]);
    $body = json_decode($response->getBody());
    $bego = $body->report;

    // $client = Services::curlrequest([
    //   'base_uri' => 'https://jalindesaapi.connexist.com/ppob-service/report-detail/?status=PAID'
    // ]);
    // $result = $client->request('get', "&stDate='.$start_date.'&enDate='.$end_date", [
    //   'headers' => [
    //     'Authorization' => 'Bearer ' . $session->get('token'),
    //     'Accept' => 'application/json',
    //   ]
    // ]);
    // $result = curlHelper('https://jalindesaapi.connexist.com/ppob-service/report-detail?status=PAID&stDate' . $start_date . '&enDate=' . $end_date, 'GET');


    $total_transaction = count($body->report);

    $total_amount = 0;
    foreach ($body->report as $result) {
      $total_amount += $result->grand_total;
    }
    $data = [
      "total_transaction" => $total_transaction,
      "total_amount" => $total_amount
    ];
    // var_dump($data);
    // die();
    echo json_encode($data);
  }
  public function detailTransaction()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('http://api2.kepasar.co.id:8000/transaction/', 'GET', [], $id);
    echo json_encode($result);
  }
}
