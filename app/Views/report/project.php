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
                                 <?php foreach ($report as $arti) : ?>
                                    <h3><?php echo $arti->percentage ?></h3>
                                 <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?= $this->include("templates/admin/footdashboard.php") ?>
</body>

</html>