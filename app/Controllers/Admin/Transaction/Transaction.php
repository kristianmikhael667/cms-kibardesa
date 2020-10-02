<?php

namespace App\Controllers\Admin\Transaction;

use App\Controllers\Base\BaseController;
use Config\Services;

class Transaction extends BaseController
{
  public function index()
  {
    $data = [];
    $result = curlPortHelper('http://api.kepasar.co.id:8087/payment-service/report/list/nmax/PAID', 'GET', [], '');
    $data["results"] = $result;

    return view('transaction/index', $data);
  }
  public function periode()
  {
    $request = Services::request();
    $start_date = $request->getPost('start_date');
    $end_date = $request->getPost('end_date');

    $session = Services::session();
    $client = Services::curlrequest([
      'base_uri' => 'http://api2.kepasar.co.id:8000/'
    ]);
    $result = $client->request('get', "transaction?stDate='.$start_date.'&enDate='.$end_date.'", [
      'headers' => [
        'Authorization' => 'Bearer ' . $session->get('token'),
        'Accept' => 'application/json',
      ]
    ]);
    $body = json_decode($result->getBody());
    echo $body;
  }
  public function detailTransaction()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('http://api2.kepasar.co.id:8000/transaction/', 'GET', [], $id);
    echo json_encode($result);
  }
}
