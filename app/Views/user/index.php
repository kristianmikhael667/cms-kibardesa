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

      <!-- Modal Detail User -->
      <div class="modal fade" id="detail_user" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail User</h4>
            </div>
            <div class="modal-body">
              <label class="form-label">UID</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_uid"> </p>
                </div>
              </div>
              <label class="form-label">Fullname</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_fullname"> </p>
                </div>
              </div>
              <label class="form-label">User Name</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_username"> </p>
                </div>
              </div>
              <label class="form-label">NRA</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_nra"> </p>
                </div>
              </div>
              <label class="form-label">YNCI</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_ynci"> </p>
                </div>
              </div>
              <label class="form-label">Alamat</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_alamat"> </p>
                </div>
              </div>
              <label class="form-label">No. KTP</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_noktp"> </p>
                </div>
              </div>
              <label class="form-label">No. SIM</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_nosim"> </p>
                </div>
              </div>
              <label class="form-label">Closet no</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_closestno"> </p>
                </div>
              </div>
              <label class="form-label">Email</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_email"> </p>
                </div>
              </div>
              <label class="form-label">Create At</label>
              <div class="form-group">
                <div class="form-line">
                  <p id="detail_user_create"> </p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Create User -->
      <div class="modal fade" id="create_user" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
            </div>
            <div class="modal-body">
              <label class="form-label">Username</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="create_user_username" name="create_user_username" class="form-control">
                </div>
              </div>
              <label class="form-label">Full Name</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="create_user_fullname" name="create_user_fullname" class="form-control">
                </div>
              </div>
              <label class="form-label">No. KTP</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="create_user_ktp" name="create_user_ktp" class="form-control">
                </div>
              </div>
              <label class="form-label">Password</label>
              <div class="form-group">
                <div class="form-line">
                  <input type="text" id="create_user_password" name="create_user_password" class="form-control">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button id="user-add-button" onclick="storeUser()" type="button" class="btn btn-primary btn-sm">SAVE</button>
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container">
          <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
            <a onclick="createUser()" href="javascript:void(0)" class="btn btn-primary btn-sm">Add User</a>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" style="border-radius: 20px;">
                <div class="card-body">
                  <table id="product-lists" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($users->data as $user) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $user->full_name ?></td>
                          <td><?= $user->username ?></td>
                          <td><?= $user->email ?></td>
                          <td><?= $user->phone ?></td>
                          <td width="125">
                            <button onclick="detailUser('<?= $user->uid ?>')" type="button" class="btn btn-primary btn-sm">
                              <i class="fas fa-bars"></i>
                            </button>
                          </td>
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
  </div>
  <?= $this->include("templates/admin/foot.php") ?>

</body>

</html>