<?= $this->include('Views/templates/admin/head') ?>
<div class="wrapper">
  <!-- Navbar -->
  <?= $this->include("templates/admin/navbar.php") ?>

  <!-- Main Sidebar Container -->
  <?= $this->include("templates/admin/sidebar.php") ?>

  <div class="modal fade" id="create_courier_to_market_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Assign Courier to Market</h4>
        </div>
        <div class="modal-body">
          <label class="form-label">Couriers</label>
          <div class="form-group">
            <div class="form-line">
              <select id="assign_courier_select" class="form-control form-control-sm">
                <?php foreach (allCouriers()->users as $user) : ?>
                  <option value="<?= $user->uid ?>"><?= $user->full_name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <label class="form-label">Markets</label>
            <div class="form-group">
              <div class="form-line">
                <select id="assign_market_select" class="form-control form-control-sm">
                  <?php foreach (allMarkets()->markets as $market) : ?>
                    <option value="<?= $market->guid ?>"><?= $market->market_name ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="assign-courier-btn" onclick="assignCourierToMarket()" type="button" class="btn btn-primary btn-sm">ASSIGN</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
        <a onclick="createCourierToMarket()" href="javascript:void(0)" class="btn btn-primary btn-sm">Assign Courier to Market</a>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card" style="border-radius: 20px;">
              <div class="card-body">
                <table id="user-lists" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>uid</th>
                      <th>full_name</th>
                      <th>username</th>
                      <th>short_bio</th>
                      <th>email</th>
                      <th>phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($couriers->users as $user) : ?>
                      <tr>
                        <td><?= $user->uid ?></td>
                        <td><?= $user->full_name ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->short_bio ?></td>
                        <td><?= $user->phone ?></td>
                        <td><?= $user->email ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>


  <?= $this->include('Views/templates/admin/foot') ?>