<?php

use Config\Services;

$request = Services::request();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img src="<?= base_url('/images/Jalindesa.jpg') ?>" alt="PekiKJKT Logo" class="brand-image ml-2 " style="width: 200px !important; margin-left: -15px;">
      </div>
    </div>
  </div>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="margin-top: -20px !important;">
      <!-- <div class="image">
                <img src="https://freepikpsd.com/wp-content/uploads/2019/10/admin-logo-png-3-Free-PNG-Images-Transparent.png" style="width: 120px;" class="img-responsive img-circle elevation-2" alt="User Image">
            </div> -->
      <div class="info" style="position: relative; top: 20px;">
        <b><span id="welcome">Welcome, <?= session('full_name') ?> </span></b>

        <!-- <div class="dropdown show">
                    <a href="#" class="d-block dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div> -->
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2" style="overflow-y: scroll; height: 400px;">
      <ul class=" nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('admin/dashboard') ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class=""></i>
            </p>
          </a>
        </li>
        <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'users' ? 'menu-open' : '' ?> <?= $request->uri->getSegment(3) == 'seller' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-user"></i>
            <p>
              User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/users/createuser') ?>" class="nav-link <?= $current_page == 'createuser' ? 'active' : '' ?>">
                <p>Create User</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/users/list') ?>" class="nav-link <?= $current_page == 'list' ? 'active' : '' ?>">
                <p>All Users</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('admin/transaction/paid') ?>" class="nav-link active">
            <i class="nav-icon far fa-credit-card"></i>
            <p>
              Transaction
              <i class=""></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a onclick="logout();" href="javascript:void(0);" class="nav-link active">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>