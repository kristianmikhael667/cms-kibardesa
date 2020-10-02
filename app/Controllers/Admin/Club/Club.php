<?php

namespace App\Controllers\Admin\Club;

use App\Controllers\Base\BaseController;
use Config\Services;


class Club extends BaseController
{
    public function index()
    {
        $data = [];
        $result = curlHelper('https://dev.kibardesa.id/member-service/clubs', 'GET');
        $data["clubs"] = $result;
        return view('club/index', $data);
    }

    public function detail()
    {
        $request = Services::request();
        $club_id = $request->getPost('club_id');
        // die(var_dump($club_id));
        $result = curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'GET');
        echo json_encode($result);
    }

    public function store()
    {
        $request = Services::request();

        $name  = $request->getPost('name');
        $desc  = $request->getPost('desc');

        $fields = [
            "parent_club_id" => "",
            "name" => $name,
            "description" => $desc,
            "born_at" => "",
        ];

        // var_dump($fields);
        // die();
        curlHelper('https://dev.kibardesa.id/member-service/clubs', 'POST', $fields);
    }

    // // UPDATE 
    // public function update()
    // {
    //     $request = Services::request();
    //     $club_id = $request->getPost('club_id');
    //     $name = $request->getPost('name');
    //     $desc = $request->getPost('description');
    //     $web = $request->getPost('website');
    //     $born = $request->getPost('born_at');
    //     $update = $request->getPost('updated_at');
    //     $tags = $request->getPost('tags');
    //     $metaData = $request->getPost('metaData');
    //     if (isset($_FILES['img'])) {
    //         $fields1 = [
    //             "tags" => $tags,
    //             "file" => $_FILES['img']
    //         ];
    //         $result1 = curlImageHelper('https://dev.kibardesa.id/media-service/upload', $fields1);
    //     }

    //     $fields2 = [
    //         "name" => $name,
    //         "image_url" => isset($_FILES['img']) ? $result1->data->download->actual : '',
    //         // "image_url" => "imagee",
    //         "description" => $desc,
    //         "website" => $web,
    //         "born_at" => $born,
    //         "updated_at" => $update,
    //         "tags" => $tags,
    //         "meta_data" => $metaData
    //     ];
    //     curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'PATCH', $fields2);

    //     // var_dump($fields2);
    //     // die();
    // }

    // public function edit()
    // {
    //     $request = Services::request();
    //     $club_id = $request->getPost('club_id');
    //     $result = curlHelper('https://dev.kibardesa.id/member-service/clubs/' .  $club_id, 'GET');
    //     echo json_encode($result);
    // }
}
