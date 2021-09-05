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
                                                <th>TRX ID</th>
                                                <th>TRX No</th>
                                                <th>Grand Total</th>
                                                <th>Sub Total</th>
                                                <th>Paid By</th>
                                                <th>User ID</th>
                                                <th>Price</th>
                                                <th>SKU</th>
                                                <th>Name</th>
                                                <th>Account Number</th>
                                                <th>Base Price</th>
                                                <th>Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results->report as $trx) : ?>
                                                <tr>
                                                    <td><?= $trx->trx_id ?></td>
                                                    <td><?= $trx->trx_no ?></td>
                                                    <td><?= $trx->grand_total ?></td>
                                                    <td><?= $trx->sub_total ?></td>
                                                    <td><?= $trx->paid_by ?></td>
                                                    <td><?= $trx->user_id ?></td>
                                                    <td><?= $trx->price ?></td>
                                                    <td><?= $trx->sku ?></td>
                                                    <td><?= $trx->name ?></td>
                                                    <td><?= $trx->account_no ?></td>
                                                    <td><?= $trx->base_price ?></td>
                                                    <td><?= $trx->t_type ?></td>

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