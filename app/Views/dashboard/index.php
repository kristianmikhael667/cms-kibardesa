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
            <div class="col-md-4">
              <div class="form-group">
                <label>Start Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="text" class="form-control pull-right" id="start_date" value="<?php echo date("Y/m/01"); ?>">
                  <input type="hidden" id="value_start_date">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>End Date</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="text" class="form-control pull-right" id="end_date" value="<?php echo date("Y/m/d"); ?>">
                  <input type="hidden" id="value_end_date">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div style="margin-top: 31px;">
                <button id="btn_apply_periode" type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">

              <div class="small-box bg-info" style="background-color: #abe9cd;
          background-image: linear-gradient(315deg, #abe9cd 0%, #3eadcf 74%);
          ">
                <div class="inner">
                  <h3>Rp <span id="income_per_hari"></span></h3>
                  <p>Total Omset</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="<?= base_url('admin/transaction/list') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f39f86;
background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
">
                <div class="inner">
                  <h3>Total <span id="total_transaction"></span></h3>
                  <p>Jumlah Transaksi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="<?= base_url('admin/transaction/list') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f876de;
background-image: linear-gradient(315deg, #f876de 0%, #b9d1eb 74%);">
                <div class="inner">
                  <h3>Total </h3>
                  <p>All Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="<?= base_url('admin/users/list') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>


    <!-- /.card -->

    </section>
  </div>
  </div>


  <?= $this->include("templates/admin/foot.php") ?>

</body>

</html>