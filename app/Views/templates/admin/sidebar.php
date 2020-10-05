<?php

use Config\Services;

$request = Services::request();
?>


<!-- ADMIN -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="container" style="margin: 15px 0 0 30px;">
    <div class="row">
      <div style="margin: 6px 0 0 14px;">
        <img src="<?= base_url('public/images/yncilogoblack.png') ?>" alt="yncilogoblack" class="brand-image img-square" style="width: 180px !important; left: -7px; position: relative;  ">
      </div>
    </div>
  </div>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://dev.kibardesa.id<?= session('avatar_url') ?>" style="width: 120px;" class="img-responsive img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <span id="welcome">Welcome,</span>
        <a href="#" class="d-block"><?= session('full_name') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview">
        <li class="nav-item">
          <a href="" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'products' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Products
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/products/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'products' ? 'active' : '' ?>">
                <p>List Product</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'news' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              News
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/news/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'news' ? 'active' : '' ?>">
                <p>List News</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'categories' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fab fa-buffer"></i>
            <p>
              Categories Product
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/categories/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'categories' ? 'active' : '' ?>">
                <p>List Category Product</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'club' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-motorcycle "></i>
            <p>
              Daerah
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/club/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'club' ? 'active' : '' ?>">
                <p> List Daerah</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'club' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-shopping-cart "></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/transaction/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'transaction' ? '' : '' ?>">
                <p> List UNPAID User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/transaction/paid') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'transaction' ? '' : '' ?>">
                <p> List PAID User</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'users' ? 'menu-open' : '' ?> <?= $request->uri->getSegment(2) == 'user-roles' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-user"></i>
            <p>
              User Roles
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/user-roles/list') ?>" class="nav-link <?= $request->uri->getSegment(2) == 'users' ? 'active' : '' ?>">
                <p>All Users</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              Account
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a onclick="logout();" href="javascript:void(0);" class="nav-link">
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>
</aside>