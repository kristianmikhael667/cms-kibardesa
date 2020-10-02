<?php
// function allProduct()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/product-service/product-master', 'GET');
//   return $result;
// }
function totalProduct()
{
  helper('curl');
  $result = curlPortHelper('167.172.68.215:2020/ads-service/product', 'GET', [], '');
  $totalProduct = count($result->data);
  return $totalProduct;
}

function totalUser()
{
  helper('curl');
  $result = curlHelper('https://api.yamahanmaxclub.com/user-service/users', 'GET');
  $totalUser = count($result->data);
  return $totalUser;
}

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

// function allCategories()
// {
//   helper('curl');
//   $data = [];
//   $result = curlHelper('https://api2.kepasar.co.id/product-service/category', 'GET');
//   if (isset($result->categories)) {
//     $data = $result->categories;
//   }
//   return $data;
// }

// function totalUser()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/user-service/users', 'GET');
//   $totalUser = count($result->data);
//   return $totalUser;
// }

// function totalMarket()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/product-service/market', 'GET');
//   $totalMarket = count($result->markets);
//   return $totalMarket;
// }

// function allRoles()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types', 'GET');
//   return $result;
// }

// function totalKonsumen()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/common.user', 'GET');
//   $totalKonsumen = count($result->users);
//   return $totalKonsumen;
// }

// function totalKurir()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/courier.user', 'GET');
//   $totalKurir = count($result->users);
//   return $totalKurir;
// }

// function totalVendor()
// {
//   helper('curl');
//   $result = curlHelper('https://api2.kepasar.co.id/user-service/user-types/vendor.user', 'GET');
//   $totalVendor = count($result->users);
//   return $totalVendor;
// }

function totalTransaksi()
{
  helper('curl');
  $data = curlPortHelper('167.172.68.215:2020/transaction', 'GET', [], '');
  $totalTransaksi = count($data->results);
  return $totalTransaksi;
}

// function jumlahTransaksi()
// {
//   helper('curl');
//   $data = curlPortHelper('http://api2.kepasar.co.id:8000/transaction', 'GET', [], '');
//   $jumlahTransaksi = 0;
//   foreach ($data->results as $item) {
//     $jumlahTransaksi += $item->total_amount;
//   }
//   return $jumlahTransaksi;


  //   function incomeperday()
  //   {
  //     helper('curl');
  //     $data = curlHelper('https://api2.kepasar.co.id/transaction', 'GET');
  //     $totalTransaksi = count($data->results);
  //     return $totalTransaksi;
  //   }
// }
