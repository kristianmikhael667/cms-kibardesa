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
                    <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <table id="product-lists" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Payment ID</th>
                                                <th>Payment Gateway</th>
                                                <th>Payment Channel</th>
                                                <th>Payment Code</th>
                                                <th>Payment Ref ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results->report as $trx) : ?>
                                                <tr>
                                                    <td><?= $trx->payment_id ?></td>
                                                    <td><?= $trx->payment_gateway ?></td>
                                                    <td><?= $trx->payment_channel ?></td>
                                                    <td><?= $trx->payment_code ?></td>
                                                    <td><?= $trx->payment_ref_id ?></td>
                                                    <td><?= $trx->payment_status ?></td>
                                                    <td width="125">

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