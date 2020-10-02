<?= $this->include('Views/templates/admin/head') ?>
<div class="wrapper">
    <!-- Navbar -->
    <?= $this->include("templates/admin/navbar.php") ?>

    <!-- Main Sidebar Container -->
    <?= $this->include("templates/admin/sidebar.php") ?>

    <div class="content-wrapper">

        <div class="content-header"></div>

        <input type="hidden" id="users_id" name="users_id">

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
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

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