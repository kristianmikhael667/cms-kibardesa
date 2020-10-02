<?php

use Config\Services;

function curlHelper($url = '', $method = 'GET', $fields = [])
{
  $curl = curl_init();
  $session = Services::session();
  $token = NULL;
  $username = NULL;
  $ifadmin = NULL;
  if ($session->has('token')) {
    $token = $session->get('token');
    $username = $session->get('username');
  }
  $ifadmin = "If-Match: 6eb4ee3b3e5c9a4908e43d22d26a451f";
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
  if ($method === 'POST' || $method === 'PUT' || $method === "PATCH") {
    $template = "";
    $values = $fields;
    $keys = array_keys($fields);
    for ($i = 0; $i < count($keys); $i++) {
      $template .= $keys[$i] . '=' . $values[$keys[$i]] . '&';
      $query_string = substr($template, 0, -1);
    }
    curl_setopt($curl, CURLOPT_POSTFIELDS, $query_string);
  }
  curl_setopt($curl, CURLOPT_VERBOSE, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type : application/json',
    'If-Match: 6eb4ee3b3e5c9a4908e43d22d26a451f'
  ]); /* NOTICE : Penulisan 'Authorization: Bearer' titik koma ':' tidak boleh diberi spasi 
   seperti ini 'Authorization : Bearer' */
  /* NOTICE : Penulisan 'Content-Type : application/json' titik koma ':' harus diberi spasi 
   seperti ini 'Content-Type : application/json' */
  $result = curl_exec($curl);
  $resultDecoded = json_decode($result);
  // die(var_dump($result));
  curl_close($curl);
  return $resultDecoded;
}

function curlPortHelper($url = '', $method = 'GET', $fields = [], $path)
{
  $session = \Config\Services::session();
  $client = \Config\Services::curlrequest([
    'base_uri' => $url
  ]);
  if ($method == "GET") {
    $result = $client->request($method, $path, [
      'headers' => [
        'Authorization' => 'Bearer ' . $session->get('token'),
        'Accept'     => 'application/json',
      ]
    ]);
  }
  if ($method == "POST") {
    $result = $client->request('POST', $path, [
      'headers' => [
        'Authorization' => 'Bearer ' . $session->get('token'),
        'Accept'     => 'application/json',
      ],
      'json' => $fields
    ]);
  }
  if ($method == "PUT") {
    $result = $client->request('PUT', $path, [
      'headers' => [
        'Authorization' => 'Bearer ' . $session->get('token'),
        'Accept'     => 'application/json',
      ],
      'json' => $fields
    ]);
  }
  $body = json_decode($result->getBody());
  return $body;
}

function curlImageHelper($url, $data)
{
  $session = Services::session();
  $token = $session->get('token');
  $headers = ["Content-Type : application/json", "Authorization: Bearer " . $token];
  $postfields = [
    "tags" => "test",
    "file" => curl_file_create($data['file']['tmp_name'], $data['file']['type'], basename($data['file']['name']))
  ];
  $curl = curl_init();
  $options = [
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $postfields,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
  ];
  curl_setopt_array($curl, $options);
  $result = curl_exec($curl);
  $decoded = json_decode($result);
  return $decoded;
}
