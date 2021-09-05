<?php

namespace App\Controllers\Admin\Dashboard;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{

  public function index()
  {
    // $data = array();
    $data = [];
    $result = curlHelper('https://jalindesaapi.connexist.com/ppob-service/report-detail?status=PAID', 'GET');
    // dd($result);
    // die();
    $data["results"] = totalTransaksiPaid();

    // $data["totalProduct"] = totalProduct();
    // $data["totalUser"] = totalUser();
    // $data["totalClub"] = totalClub();
    // $data["totalCategori"] = totalCategori();
    return view('dashboard/index', $data);
  }
}
