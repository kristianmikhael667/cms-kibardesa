<?php

namespace App\Controllers\Admin\Category;

use App\Controllers\Base\BaseController;
use Config\Services;

class Category extends BaseController
{
  public function index()
  {
    $data = array();

    $result = curlPortHelper('167.172.68.215:2020/ads-service/category', 'GET', [], '');
    $data["success"] = false;
    if ($result->status === 200) {
      $data["success"] = true;
      $data["categories"] = $result->data;
      return view('category/index', $data);
    }
  }

  public function detail()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('167.172.68.215:2020/ads-service/category/' . $id, 'GET', [], '');
    echo json_encode($result);
  }

  public function store()
  {
    $request = Services::request();

    $name = $request->getPost('name');
    $desc  = $request->getPost('desc');
    if (isset($_FILES['img'])) {
      $fields1 = [
        "file" => $_FILES['img']
      ];
      $result1 = curlImageHelper('https://api.yamahanmaxclub.com/media-service/upload', $fields1);
    }
    $fields = [
      "categoryName" => $name,
      "categoryDescription" => $desc,
      "categoryImage" => '',
    ];
    curlPortHelper('167.172.68.215:2020/ads-service/category', 'POST', $fields, '');
  }


  // UPDATE 
  public function update()
  {
    // die(var_dump('masuk'));
    $request = Services::request();
    $id = $request->getPost('id');
    $name = $request->getPost('name');
    $fields2 = [
      "categoryName" => $name,
    ];
    curlPortHelper('167.172.68.215:2020/ads-service/category/', 'PUT', $fields2, $id);
  }

  public function edit()
  {
    $request = Services::request();
    $id = $request->getPost('id');
    $result = curlPortHelper('167.172.68.215:2020/ads-service/category/', 'GET', null, $id);
    echo json_encode($result);
  }
}
