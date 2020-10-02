<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers\Admin\Dashboard');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->group('admin', function ($routes) {
  $routes->get('/', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->get('dashboard', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->group('auth', function ($routes) {
    $routes->get('login', 'Login::index', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->post('login', 'Login::store', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->post('logout', 'Logout::logout', ['namespace' => 'App\Controllers\Admin\Auth']);
  });
  $routes->group('products', function ($routes) {
    $routes->get('datatables', 'Product::datatables', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->get('list', 'Product::index', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('edit', 'Product::edit', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('detail', 'Product::detail', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('store', 'Product::store', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('update', 'Product::update', ['namespace' => 'App\Controllers\Admin\Product']);
  });
  $routes->group('categories', function ($routes) {
    $routes->get('list', 'Category::index', ['namespace' => 'App\Controllers\Admin\Category']);
    $routes->post('detail', 'Category::detail', ['namespace' => 'App\Controllers\Admin\Category']);
    $routes->post('store', 'Category::store', ['namespace' => 'App\Controllers\Admin\Category']);
    $routes->post('edit', 'Category::edit', ['namespace' => 'App\Controllers\Admin\Category']);
    $routes->post('update', 'Category::update', ['namespace' => 'App\Controllers\Admin\Category']);
  });
  $routes->group('users', function ($routes) {
    $routes->get('list', 'User::index', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('edit', 'User::editUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('detail', 'User::detailUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('update', 'User::updateUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('create', 'User::createUser', ['namespace' => 'App\Controllers\Admin\User']);
  });
  $routes->group('user-roles', function ($routes) {
    $routes->get('list', 'User::index', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('detail', 'User::detailUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('banned-user', 'User::bannedUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('courier-user', 'User::courierUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('admin-user', 'User::adminUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('vendor-user', 'User::vendorUser', ['namespace' => 'App\Controllers\Admin\User']);
  });
  $routes->group('courier', function ($routes) {
    $routes->post('assign-courier', 'Courier::assignToCourier', ['namespace' => 'App\Controllers\Admin\Courier']);
  });
  $routes->group('seller', function ($routes) {
    $routes->get(
      'assign-seller',
      'Seller::assignToSeller',
      ['namespace' => 'App\Controllers\Admin\Seller']
    );
  });
  $routes->group('club', function ($routes) {
    $routes->get('list', 'Club::index', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('store', 'Club::store', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('detail', 'Club::detail', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('update', 'Club::update', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('edit', 'Club::edit', ['namespace' => 'App\Controllers\Admin\Club']);
  });
  $routes->group('transaction', function ($routes) {
    $routes->get('list', 'Transaction::index', ['namespace' => 'App\Controllers\Admin\Transaction']);
    $routes->post('periode', 'Transaction::periode', ['namespace' => 'App\Controllers\Admin\Transaction']);
    $routes->post('detail', 'Transaction::detailTransaction', ['namespace' => 'App\Controllers\Admin\Transaction']);
  });
  $routes->group('news', function ($routes) {
    $routes->get('list', 'News::index', ['namespace' => 'App\Controllers\Admin\News']);
    $routes->post('detail', 'News::detail', ['namespace' => 'App\Controllers\Admin\News']);
    $routes->post('store', 'News::store', ['namespace' => 'App\Controllers\Admin\News']);
  });
});

$routes->group('partner', function ($routes) {
  $routes->get('/', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->get('dashboard', 'Dashboard::index', ['namespace' => 'App\Controllers\Admin\Dashboard']);
  $routes->group('auth', function ($routes) {
    $routes->get('login', 'Login::index', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->post('login', 'Login::store', ['namespace' => 'App\Controllers\Admin\Auth']);
    $routes->post('logout', 'Logout::logout', ['namespace' => 'App\Controllers\Admin\Auth']);
  });
  $routes->group('products', function ($routes) {
    $routes->get('datatables', 'Product::datatables', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->get('list', 'Product::index', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('edit', 'Product::edit', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('detail', 'Product::detail', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('store', 'Product::store', ['namespace' => 'App\Controllers\Admin\Product']);
    $routes->post('update', 'Product::update', ['namespace' => 'App\Controllers\Admin\Product']);
  });
  // $routes->group('categories', function ($routes) {
  //   $routes->get('list', 'Category::index', ['namespace' => 'App\Controllers\Admin\Category']);
  //   $routes->post('detail', 'Category::detail', ['namespace' => 'App\Controllers\Admin\Category']);
  //   $routes->post('store', 'Category::store', ['namespace' => 'App\Controllers\Admin\Category']);
  //   $routes->post('edit', 'Category::edit', ['namespace' => 'App\Controllers\Admin\Category']);
  //   $routes->post('update', 'Category::update', ['namespace' => 'App\Controllers\Admin\Category']);
  // });
  $routes->group('users', function ($routes) {
    $routes->get('list', 'User::index', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('edit', 'User::editUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('detail', 'User::detailUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('update', 'User::updateUser', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('create', 'User::createUser', ['namespace' => 'App\Controllers\Admin\User']);
  });
  $routes->group('user-roles', function ($routes) {
    $routes->get('list', 'User::index', ['namespace' => 'App\Controllers\Admin\User']);
    $routes->post('detail', 'User::detailUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('banned-user', 'User::bannedUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('courier-user', 'User::courierUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('admin-user', 'User::adminUser', ['namespace' => 'App\Controllers\Admin\User']);
    //$routes->get('vendor-user', 'User::vendorUser', ['namespace' => 'App\Controllers\Admin\User']);
  });
  // $routes->group('courier', function ($routes) {
  //   $routes->post('assign-courier', 'Courier::assignToCourier', ['namespace' => 'App\Controllers\Admin\Courier']);
  // });
  // $routes->group('seller', function ($routes) {
  //   $routes->get(
  //     'assign-seller',
  //     'Seller::assignToSeller',
  //     ['namespace' => 'App\Controllers\Admin\Seller']
  //   );
  // });
  $routes->group('club', function ($routes) {
    $routes->get('list', 'Club::index', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('store', 'Club::store', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('detail', 'Club::detail', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('update', 'Club::update', ['namespace' => 'App\Controllers\Admin\Club']);
    $routes->post('edit', 'Club::edit', ['namespace' => 'App\Controllers\Admin\Club']);
  });
  // $routes->group('transaction', function ($routes) {
  //   $routes->get('list', 'Transaction::index', ['namespace' => 'App\Controllers\Admin\Transaction']);
  //   $routes->post('periode', 'Transaction::periode', ['namespace' => 'App\Controllers\Admin\Transaction']);
  //   $routes->post('detail', 'Transaction::detailTransaction', ['namespace' => 'App\Controllers\Admin\Transaction']);
  // });
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
