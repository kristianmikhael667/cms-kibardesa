<?php

use Config\Services;


function allProvinsi()
{
  helper('curl');
  $result = curlHelper('https://dev.kibardesa.id/member-service/club-tree/e608cb14-5ed3-4499-9609-f3b99f8e2070?level=1', 'GET');
  $result2 = $result->root;
  if (isset($result2->branch)) {
    $data = $result2->branch;
  }
  return $data;
}

// function parent()
// {
//   helper('curl');
//   // $request = Services::request();
//   // $club_id = $request->getPost('club_id');
//   $result = curlHelper('https://dev.kibardesa.id/member-service/clubs/' . $club_id, 'GET');
//   $data = $result->data->name;
//   return $data;
// }

function totalClub()
{
  helper('curl');
  $result = curlHelper('https://api.yamahanmaxclub.com/member-service/clubs', 'GET');
  $totalClub = count($result->data);
  return $totalClub;
}

function totalCategori()
{
  helper('curl');
  $result = curlPortHelper('167.172.68.215:2020/ads-service/category', 'GET', [], '');
  $totalCategori = count($result->data);
  return $totalCategori;
}


function totalTransaksi()
{
  helper('curl');
  $data = curlPortHelper('167.172.68.215:2020/transaction', 'GET', [], '');
  $totalTransaksi = count($data->results);
  return $totalTransaksi;
}

// function totalTransaksiPaid()
// {
//   helper('curl');
//   $data = curlPortHelper('https://jalindesaapi.connexist.com/ppob-service/report-detail?status=PAID', 'GET', [], '');
//   $totalTransaksi = count($data->report);
//   return $totalTransaksi;
// }
