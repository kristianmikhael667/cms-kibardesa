<?php

namespace App\Controllers\Admin\News;

use App\Controllers\Base\BaseController;
use Config\Services;


class News extends BaseController
{
    public function index()
    {
        $data = [];
        $result = curlHelper('https://api.yamahanmaxclub.com/article-service/posts/a7be6b94-9290-460e-9866-9c81c64e4d80?type=1', 'GET');
        $data["datas"] = $result;
        return view('news/index', $data);
    }

    public function detail()
    {
        $request = Services::request();
        $id = $request->getPost('id');
        $result = curlHelper('https://api.yamahanmaxclub.com/article-service/posts/a7be6b94-9290-460e-9866-9c81c64e4d80/' . $id, 'GET');
        echo json_encode($result);
    }

    public function store()
    {
        $request = Services::request();

        $title  = $request->getPost('title');
        $excerpt  = $request->getPost('excerpt');
        $content  = $request->getPost('content');

        $fields = [
            "post_type" => 1,
            "title" => $title,
            "excerpt" => $excerpt,
            "content" => $content,
        ];
        curlHelper('https://api.yamahanmaxclub.com/article-service/posts/a7be6b94-9290-460e-9866-9c81c64e4d80', 'POST', $fields);
    }

    // UPDATE 
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
    //         $result1 = curlImageHelper('https://api.yamahanmaxclub.com/media-service/upload', $fields1);
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
    //     curlHelper('https://api.yamahanmaxclub.com/member-service/clubs/' . $club_id, 'PATCH', $fields2);

    //     // var_dump($fields2);
    //     // die();
    // }

    // public function edit()
    // {
    //     $request = Services::request();
    //     $club_id = $request->getPost('club_id');
    //     $result = curlHelper('https://api.yamahanmaxclub.com/member-service/clubs/' .  $club_id, 'GET');
    //     echo json_encode($result);
    // }
}
