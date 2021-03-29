<?php

use Config\Services;

$request = Services::request();
?>


<!-- ADMIN -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="container" style="margin: 10px 0 0 30px;">
    <div class="row">
      <div style="margin: 6px 0 0 14px;">
        <img src="/images/Jalindesa.jpg" alt="yncilogoblack" class="brand-image img-square" style="width: 180px !important; height: 140px; left: -7px; position: relative;  ">
      </div>
    </div>
  </div>

  <div class="sidebar">
    <div class="user-panel mt-2 pb-3 mb-2 d-flex">
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
          <a href="<?= base_url('admin/dashboard') ?>" class="nav-link layoutside active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'club' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link layoutside active">
            <i class="nav-icon fa fa-map"></i>
            <p>
              Daerah
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/club/list') ?>" class="nav-link layoutside <?= $request->uri->getSegment(2) == '' ? 'active' : '' ?>">
                <p> List All Daerah</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/club/provinsi') ?>" class="nav-link layoutside <?= $request->uri->getSegment(2) == '' ? 'active' : '' ?>">
                <p> List Provinsi</p>
              </a>
            </li>
          </ul>

        </li>

        <li class="nav-item has-treeview <?= $request->uri->getSegment(2) == 'transaction' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link layoutside active">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Registrasi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/transaction/list') ?>" class="nav-link layoutside <?= $request->uri->getSegment(2) == 'transaction' ? '' : '' ?>">
                <p> List UNPAID User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/transaction/paid') ?>" class="nav-link layoutside <?= $request->uri->getSegment(2) == 'transaction' ? '' : '' ?>">
                <p> List PAID User</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
        <li class="nav-item">
          <a href="<?= base_url('admin/report/list') ?>" class="nav-link layoutside active">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Report Project
            </p>
          </a>
        </li>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link layoutside active">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              Account
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a onclick="logout();" href="javascript:void(0);" class="nav-link layoutside">
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>
</aside>