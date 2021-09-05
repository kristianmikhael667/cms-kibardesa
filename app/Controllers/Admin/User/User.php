<?php

namespace App\Controllers\Admin\User;

use App\Controllers\Base\BaseController;
use Config\Services;

class User extends BaseController
{
    public function index()
    {
        $data = [];
        $result = curlHelper('https://jalindesaapi.connexist.com/user-service/users', 'GET');
        $data["users"] = $result;
        return view('user/index', $data);
    }

    public function createUser()
    {
        $request = Services::request();

        $user = $request->getPost('user');
        $ktp  = $request->getPost('ktp');
        $name  = $request->getPost('name');
        $pass  = $request->getPost('pass');

        $fields = [
            "username" => $user,
            "no_ktp" => $ktp,
            "full_name" => $name,
            "password" => $pass,
        ];
        curlHelper('https://api.yamahanmaxclub.com/user-service/register', 'POST', $fields);
    }

    public function editUser()
    {
        $request = Services::request();
        $id = $request->getPost('id');
        $result = curlHelper('https://api2.kepasar.co.id/user-service/users/' . $id, 'GET');
        echo json_encode($result);
    }

    public function detailUser()
    {
        $request = Services::request();
        $uid = $request->getPost('uid');
        $result = curlHelper('https://api.yamahanmaxclub.com/user-service/users/' . $uid, 'GET');
        echo json_encode($result);
    }


    // public function updateUser()
    // {
    //     $request = Services::request();
    //     $id = $request->getPost('id');
    //     $fullname = $request->getPost('fullname');
    //     if (isset($_FILES['avatar_url'])) {
    //         $fields1 = [
    //             "tags" => $fullname,
    //             "file" => $_FILES['avatar_url']
    //         ];

    //         $result1 = curlImageHelper('https://api2.kepasar.co.id/media-service/upload', $fields1);
    //     }

    //     $fields = [
    //         "full_name" => $fullname,
    //         "avatar_url" => isset($_FILES['avatar_url']) ? $result1->data->download->actual : '',
    //     ];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/users/' . $id, 'PATCH', $fields);
    // }


    // public function commonUser()
    // {
    //     $data = [];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/common.user', 'GET');

    //     $data["common_users"] = $result;

    //     return view('user/common_user', $data);
    // }
    // public function bannedUser()
    // {
    //     $data = [];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/banned.user', 'GET');

    //     $data["banneds"] = $result;

    //     return view('user/banned_user', $data);
    // }
    // public function courierUser()
    // {
    //     $data = [];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/courier.user', 'GET');
    //     $data["couriers"] = $result;
    //     return view('user/courier_user', $data);
    // }
    // public function adminUser()
    // {
    //     $data = [];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/admin', 'GET');
    //     $data["admins"] = $result;
    //     return view('user/admin_user', $data);
    // }
    // public function vendorUser()
    // {
    //     $data = [];
    //     $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/vendor.user', 'GET');
    //     $data["users"] = $result;
    //     return view('user/vendor_user', $data);
    // }
}
