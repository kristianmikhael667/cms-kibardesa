<?php

use Config\Services;

$request = Services::request();
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <?php
      switch ($request->uri->getSegment(2)) {
        case 'dashboard':
          echo '<h4 class="ml-2 text-dark">Dashboard</h4>';
          break;
        case 'products':
          echo '<div class="row">
              <h4 class="ml-3 text-dark">List Product</h4>
            </div>';
          break;
        case 'categories':
          echo '<div class="row">
              <h4 class="ml-3 text-dark">List Category Product</h4>
            </div>';
          break;
        case 'users':
          echo '<div class="row">
              <h3 class="ml-3 text-dark">Lists All Users</h3>
              </div>';
          break;
        case 'transaction':
          echo '<div class="row">
                <h3 class="ml-3 text-dark">List Transaksi Paid</h3>
                </div>';
          break;
        case 'club':
          echo '<div class="row">
            <h4 class="ml-3 text-dark">List Daerah</h4>
          </div>';
          break;
        case 'report':
          echo '<div class="row">
              <h4 class="ml-3 text-dark">List Report</h4>
            </div>';
        default;
          break;
      }
      ?>

      <?php
      switch ($request->uri->getSegment(3)) {
        case 'dashboard':
          echo '<h4 class="ml-2 text-dark">Dashboard</h4>';
          break;
        default;
          break;
      }
      ?>
    </li>
  </ul>
</nav>