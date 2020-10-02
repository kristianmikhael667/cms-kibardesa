<?php

namespace App\Controllers\Admin\Product;

use App\Controllers\Base\BaseController;
use Config\Services;

class Product extends BaseController
{
  public function index()
  {
    $data = array();

    $result = curlPortHelper('167.172.68.215:2020/ads-service/product', 'GET', [], '');
    $data["success"] = false;

    if ($result->status === 200) {
      $data["success"] = true;
      $data["products"] = $result->data;
      return view('product/index', $data);
    }
  }

  public function detail()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('167.172.68.215:2020/ads-service/product/' . $id, 'GET', [], '');
    echo json_encode($result);
  }

  public function store()
  {
    $request = Services::request();

    $name = $request->getPost('name');
    $desc  = $request->getPost('desc');
    $cond  = $request->getPost('cond');
    $lat  = $request->getPost('lat');
    $long = $request->getPost('long');
    $loc = $request->getPost('loc');
    $price =  $request->getPost('price');
    if (isset($_FILES['img'])) {
      $fields1 = [
        "file" => $_FILES['img']
      ];
      $result1 = curlImageHelper('https://api.yamahanmaxclub.com/media-service/upload', $fields1);
    }
    $fields = [
      "productName" => $name,
      "productDescription" => $desc,
      "productCondition" => $cond,
      "latitude" => $lat,
      "longitude" => $long,
      "location" =>  $loc,
      "productPrice" => $price,
      "images" => isset($_FILES['img']) ? $result1->data->download->actual : '',
      "tags" => '',
      "meta_data" => ''
    ];
    curlPortHelper('167.172.68.215:2020/ads-service/product', 'POST', $fields, '');
  }

  // UPDATE 
  public function update()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $name = $request->getPost('name');
    $fields2 = [
      "productName" => $name,
    ];
    curlPortHelper('167.172.68.215:2020/ads-service/product/', 'PUT', $fields2, $id);
  }

  public function edit()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('167.172.68.215:2020/ads-service/product/', 'GET', null, $id);
    echo json_encode($result);
  }
}
