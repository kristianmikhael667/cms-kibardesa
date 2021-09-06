<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\Base\BaseController;
use Config\Services;
use Firebase\JWT\JWT;

class Login extends BaseController
{
  public function index()
  {
    return view('login/index');
  }
  public function store()
  {
    $data = array();

    $session = Services::session();
    $request = Services::request();

    $username = $request->getPost('username');
    $password = $request->getPost('password');
    // var_dump($username);
    // die();
    $fields = [
      "username" => $username,
      "password" => $password
    ];
    $result = curlHelper('https://jalindesaapi.connexist.com/user-service/login', 'POST', $fields);
    $data["success"] = false;
    if ($result->status === "ok") {
      $data['token']            = $result->token;
      $data['refresh_token']    = $result->refresh_token;
      $data['uid']              = $result->user->uid;
      $data['full_name']        = $result->user->full_name;
      $data['username']         = $result->user->username;
      $data['short_bio']        = $result->user->short_bio;
      $data['avatar_url']       = $result->user->avatar_url;
      $data['email']            = $result->user->email;
      $data['phone']            = $result->user->phone;
      $data['auth_key']         = $result->user->auth_key;
      $data['status']           = $result->user->status;
      $data['area_code']        = $result->user->area_code;
      $data['alamat']           = $result->user->alamat;
      $data['posisi']           = $result->user->posisi;
      $data['penugasan_kab']    = $result->user->penugasan_kab;
      $data['penugasan_kec']    = $result->user->penugasan_kec;
      $data['tgl_lahir']        = $result->user->tgl_lahir;
      $data['kode_kab']         = $result->user->kode_kab;
      $data['kode_pen']         = $result->user->kode_pen;
      $data['kode_kec']         = $result->user->kode_kec;
      $data['kode_pd_pld']      = $result->user->kode_pd_pld;
      $data['add']              = $result->user->add;
      $data['reg']              = $result->user->reg;
      $data['nipd']             = $result->user->nipd;
      $data['created_at']       = $result->user->created_at;
      $data['updated_at']       = $result->user->updated_at;
      $data['links']            = [
        'self' => $result->user->links->self
      ];
      // $key = 'Z3WjahOHn6rlYcdopd3FzC9hHAeThiEZqR7mg0cs5ARCCBqSyiT3ny3kwGrCBrWVFxgRNYP31Z4TfnDVy6PRGv3QrLTYvNtXoclPqHzI2q8MXFSCGaTPSz8Y1QA7f7sRW5gcxoYqkGudLeVR5tMdVTqOvVEbgnxhpW9Wedumfiv4mOQIKjCIm06JElJ8itISQkbQO3ENPXB78N7OSlB2dAVMkBX4GUXMiLqJZUefpiuIJY2gYFpeGRWmIaeZ8KB';
      // $decode = JWT::decode($result->token, $key, ['HS256']);
      // $data['isAdmin'] = $decode->isAdmin;
      // // die(var_dump($data));
      $session->set($data);
      $data["success"] = true;
    } else {
      return redirect()->to(base_url('/'));
    }
  }
}
