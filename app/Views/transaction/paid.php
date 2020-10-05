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
                                                <th>UID</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Phone</th>
                                                <th>Area Code</th>
                                                <th>Kota</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results->report as $trx) : ?>
                                                <tr>
                                                    <td><?= $trx->billing_uid ?></td>
                                                    <td><?= $trx->billing_name ?></td>
                                                    <td><?= $trx->amount ?></td>
                                                    <td><?= $trx->billing_phone ?></td>
                                                    <td><?= $trx->user->area_code ?></td>
                                                    <td><?= $trx->user->kota ?></td>
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