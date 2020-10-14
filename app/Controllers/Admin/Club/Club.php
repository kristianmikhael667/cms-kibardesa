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

    public function provinsi()
    {
        $data = [];
        $result = curlHelper('https://dev.kibardesa.id/member-service/club-tree/e608cb14-5ed3-4499-9609-f3b99f8e2070?level=1', 'GET');
        $result2 = $result->root;
        $data["provinsi"] = $result2;
        return view('club/provinsi', $data);
    }

    public function kabkota()
    {
        return view('club/kabkota');
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
        $area_code  = $request->getPost('area_code');

        $fields = [
            "parent_club_id" => "e608cb14-5ed3-4499-9609-f3b99f8e2070",
            "name" => $name,
            "description" => $desc,
            "born_at" => "",
            "area_code" => $area_code,
            "status" => 1,
        ];

        $check = curlHelper('https://dev.kibardesa.id/member-service/clubs', 'POST', $fields);
        // var_dump($check);
    }


    public function storekota()
    {
        $request = Services::request();

        $name  = $request->getPost('name');
        $desc  = $request->getPost('desc');
        $area_code  = $request->getPost('area_code');
        $parent_club_id  = $request->getPost('parent_club_id');

        $fields = [
            "parent_club_id" => $parent_club_id,
            "name" => $name,
            "description" => $desc,
            "born_at" => "",
            "area_code" => $area_code,
            "status" => 1,
        ];

        // var_dump($fields);
        // die();
        $check = curlHelper('https://dev.kibardesa.id/member-service/clubs', 'POST', $fields);
        // var_dump($check);
    }

    // // UPDATE 
    public function update()
    {
        $request = Services::request();

        $club_id = $request->getPost('club_id');
        $parent_club_id = $request->getPost('parent_club_id');
        $name = $request->getPost('name');
        $desc = $request->getPost('desc');

        $fields = [
            "parent_club_id" => $parent_club_id,
            "name" => $name,
            "description" => $desc,
        ];

        // var_dump($fields);
        // die();
        curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'PATCH', $fields);
    }

    public function edit()
    {
        $request = Services::request();
        $club_id = $request->getPost('club_id');
        $result = curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'GET');
        // var_dump($result);
        // die();
        echo json_encode($result);
    }

    public function showparent()
    {
        $request = Services::request();
        $club_id = $request->getPost('club_id');
        $result = curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'GET');
        // var_dump($result);
        // die();
        echo json_encode($result);
    }

    public function storechild()
    {
        $request = Services::request();

        date_default_timezone_set("Asia/Jakarta");
        $born = date("Y-m-d H:i:s");
        $name  = $request->getPost('name');
        $desc  = $request->getPost('desc');
        $parent_club_id  = $request->getPost('parent_club_id');

        $fields = [
            "parent_club_id" => $parent_club_id,
            "name" => $name,
            "description" => $desc,
            "born_at" =>  $born,
        ];

        // var_dump($fields);
        // die();
        curlHelper('https://dev.kibardesa.id/member-service/clubs', 'POST', $fields);
    }

    /////////////////////
    ////// GET DATA TABLE
    /////////////////////
    public function get_datatables($club_id)
    {
        // var_dump($club_id);
        // die();
        $request = Services::request();

        $columns = [
            0 => 'Name',
            1 => 'Daerah ID',
            2 => 'Area Code',
            3 => 'Description',
            4 => 'Born at',
            5 => 'Action',
        ];

        // $guid = $request->getPost('guid');
        $result = curlHelper('https://dev.kibardesa.id/member-service/club-tree/' . $club_id . '?level=1', 'GET');
        $result = $result->root;

        $data = [];
        foreach ($result->branch as $item) {
            $nestedData['Name']  = $item->name;
            $nestedData['Daerah ID']  = $item->club_id;
            $nestedData['Area Code']  = $item->area_code;
            $nestedData['Description']  = $item->description;
            $nestedData['Born At']  = $item->created_at;
            $nestedData['Action']  =
                "<button onclick=\"detailOutlet('" . $item->guid . "')\" type=\"button\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-bars\"></i></button>
            <button onclick=\"editOutlet('" . $item->guid . "')\" type=\"button\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-edit\"></i></button>
            ";

            $data[] = $nestedData;
        }


        $totalKota = count($result);

        $json_data = [
            "draw" => intval($request->getPost('draw')),
            "recordsTotal" => intval($totalKota),
            "recordsFiltered" => intval($totalKota),
            "data" => $data
        ];
        echo json_encode($json_data);
    }

    public function get_datatables_empty()
    {
        $json_data = [
            "draw" => 0,
            "recordsTotal" => 0,
            "recordsFiltered" => 0,
            "data" => [],
        ];
        echo json_encode($json_data);
    }

    ////////////////////////////////////////////
    ///////////////////////////////////////////

}
