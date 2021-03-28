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
                <div class="container">
                    <div class="row">
                    <div class="container">
                        <div id="chartdiv"></div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <table id="product-lists" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User ID</th>
                                                <th>Project ID</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Percentage</th>
                                                <th>Update At</th>
                                                <th>Picture</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                            <?php foreach ($report as $rp) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $rp->user_id ?></td>
                                                    <td><?= $rp->project_id ?></td>
                                                    <td><?= $rp->type ?></td>
                                                    <td><?= $rp->description ?></td>
                                                    <td><?= $rp->percentage ?></td>
                                                    <td><?= $rp->updated_at ?></td>
                                                    <td><img src="<?= $rp->picture ?>"></td>
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
