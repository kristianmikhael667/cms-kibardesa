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
                  <input placeholder="Input End Date" type="text" class="form-control pull-right" id="start_date">
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
                  <input placeholder="Input End Date" type="text" class="form-control pull-right" id="end_date">
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
                  <h5><span id="tanggaltransaksi"></span></h5>
                  <p>Date Now</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-calendar"></i>
                </div>
                <a href="<?= base_url('admin/transaction/paid') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f39f86;
background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
">
                <div class="inner">
                  <h5>Total <span id="jumlahtransaksi"></span></h5>
                  <p>Jumlah Transaksi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-pulse"></i>
                </div>
                <a href="<?= base_url('admin/transaction/paid') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f876de;
background-image: linear-gradient(315deg, #f876de 0%, #b9d1eb 74%);">
                <div class="inner">
                  <h5>Rp <span id="totaltransaksi"></span></h5>
                  <p>Total Transaksi</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="<?= base_url('admin/transaction/paid') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f876de;
background-image: linear-gradient(315deg, #f876de 0%, #b9d1eb 74%);">
                <div class="inner">
                  <h5>Rp <span id="totalbiaya"></span></h5>
                  <p>Total Biaya</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="<?= base_url('admin/transaction/paid') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger" style="background-color: #f876de;
background-image: linear-gradient(315deg, #f876de 0%, #b9d1eb 74%);">
                <div class="inner">
                  <h5>Rp <span id="totalkeuntungan"></span></h5>
                  <p>Total Keuntungan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
                <a href="<?= base_url('admin/transaction/paid') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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