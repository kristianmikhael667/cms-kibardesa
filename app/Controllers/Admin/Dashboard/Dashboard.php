<?php

namespace App\Controllers\Admin\Dashboard;

use App\Controllers\Base\BaseController;

class Dashboard extends BaseController
{

  public function index()
  {
    // $data = array();
    $data = [];
    $result = curlHelper('https://jalindesaapi.connexist.com/ppob-service/report?status=PAID', 'GET');
    // die();
    $data["results"] = $result;

    // $data["totalProduct"] = totalProduct();
    // $data["totalUser"] = totalUser();
    // $data["totalClub"] = totalClub();
    // $data["totalCategori"] = totalCategori();
    return view('dashboard/index', $data);
  }
}
