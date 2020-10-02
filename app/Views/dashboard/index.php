<?= $this->include('Views/templates/admin/head') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include("templates/admin/navbar.php") ?>

    <!-- Main Sidebar Container -->
    <?= $this->include("templates/admin/sidebar.php") ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="ml-5">
          <div class="row">
          </div>
        </div>
      </div>

      <!-- Main content -->

      <section class="content">
        <!-- DASHBOARD -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>


  <?= $this->include("templates/admin/foot.php") ?>

</body>

</html>