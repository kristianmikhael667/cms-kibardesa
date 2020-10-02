<?= $this->include('Views/templates/admin/head') ?>
<div class="wrapper">
    <!-- Navbar -->
    <?= $this->include("templates/admin/navbar.php") ?>

    <!-- Main Sidebar Container -->
    <?= $this->include("templates/admin/sidebar.php") ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
                <a onclick="createUser()" href="javascript:void(0)" class="btn btn-primary btn-sm">Add User</a>
            </div>
        </div>

        <input type="hidden" id="users_id" name="users_id">
        <!-- Modal Edit Category -->
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Full Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="edit_user_full_name" name="edit_user_full_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="user-btn-update" onclick="updateUser()" type="button" class="btn btn-primary btn-sm">SAVE</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Detail User -->
        <div class="modal fade" id="detailUser" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail User</h4>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">User UID</label>
                        <div class="form-group">
                            <div class="form-line">
                                <p id="detail_user_uid"></p>
                            </div>
                        </div>
                        <label class="form-label">Full Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <p id="detail_user_full_name"></p>
                            </div>
                        </div>
                        <label class="form-label">Username</label>
                        <div class="form-group">
                            <div class="form-line">
                                <p id="detail_user_username"></p>
                            </div>
                        </div>
                        <label class="form-label">Email</label>
                        <div class="form-group">
                            <div class="form-line">
                                <p id="detail_user_email"></p>
                            </div>
                        </div>
                        <label class="form-label">Phone</label>
                        <div class="form-group">
                            <div class="form-line">
                                <p id="detail_user_phone"></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
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
                                            <th>UID</th>
                                            <th>Full Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users->data as $user) : ?>
                                            <tr>
                                                <td><?= $user->uid ?></td>
                                                <td><?= $user->full_name ?></td>
                                                <td><?= $user->username ?></td>
                                                <td><?= $user->email ?></td>
                                                <td width="125">
                                                    <button onclick="detailUser('<?= $user->uid ?>')" type="button" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-bars"></i>
                                                    </button>
                                                    <button onclick="editUser('<?= $user->uid ?>')" type="button" class="btn btn-primary btn-sm">
                                                        <i class="far fa-edit"></i>
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

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-pre
        </div>
    </footer>


    <?= $this->include('Views/templates/admin/foot') ?>