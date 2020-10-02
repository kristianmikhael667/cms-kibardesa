<?php 
namespace App\Controllers\Admin\Courier;

use App\Controllers\Base\BaseController;
use Config\Services;

class Courier extends BaseController 
{
  public function assignToCourier() 
  {
    $request = Services::request();

    $kurirId  = $request->getPost('kurirId');
    $marketId = $request->getPost('marketId');
    $fcmSecret = $request->getPost('fcmSecret');
    $deliveryTotal = $request->getPost('deliveryTotal');

    $fields = [
      "kurirId" => "1da0df2a-c0f8-4762-8706-1343e6be12d1",
      "marketId" => "fb12d118-e0a8-44d0-9c73-2d1472319b35",
      "fcmSecret" => "Xeash53fkjddaj3242kkkkk",
      "deliveryTotal" => 0
    ];
    curlHelper('http://167.172.68.215:1000/kurir','POST', $fields);
  }
}