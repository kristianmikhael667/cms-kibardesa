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

            <!-- Modal Detail News -->
            <div class="modal fade" id="get_project" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Project Detail</h4>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">Project ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="project_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_name"> </p>
                                </div>
                            </div>
                            <label class="form-label">User ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_user_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">Value Project</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_value_project"> </p>
                                </div>
                            </div>
                            <label class="form-label">Province</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_province"> </p>
                                </div>
                            </div>
                            <label class="form-label">City</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_city"> </p>
                                </div>
                            </div>
                            <label class="form-label">Sub District</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_sub_dis"> </p>
                                </div>
                            </div>
                            <label class="form-label">Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_address"> </p>
                                </div>
                            </div>
                            <label class="form-label">Type</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_type"> </p>
                                </div>
                            </div>
                            <label class="form-label">Picture</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <img id="detail_picture" style="width: 120px; height: 120px;" class="img-responsive">
                                </div>
                            </div>
                            <label class="form-label">Created</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_created"> </p>
                                </div>
                            </div><label class="form-label">Updated</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_updated"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <!-- <div class="row">
                    <div class="container">
                        <div id="chartdiv"></div>
                    </div>
                    </div> -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <table id="product-lists" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Project ID</th>
                                                <th>Type</th>
                                                <th>Address</th>
                                                <th>Value Project</th>
                                                <th>Create At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($report as $rp) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $rp->name ?></td>
                                                    <td><?= $rp->project_id ?></td>
                                                    <td><?= $rp->type ?></td>
                                                    <td><?= $rp->address ?></td>
                                                    <td><?= $rp->value_project ?></td>
                                                    <td><?= date("Y-m-d h:i:s", strtotime($rp->created_at)); ?></td>
                                                    <td>
                                                        <button onclick="getProject('<?= $rp->project_id ?>')" type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <button onclick="detailProject('<?= $rp->project_id ?>')" type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-project-diagram"></i>
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