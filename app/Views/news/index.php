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
            <div class="modal fade" id="detail_news" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail News</h4>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">Club ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_club_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">UID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_uid"> </p>
                                </div>
                            </div>
                            <label class="form-label">Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_title"> </p>
                                </div>
                            </div>
                            <label class="form-label">Excerpt</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_excerpt"> </p>
                                </div>
                            </div>
                            <label class="form-label">News Image</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <img id="detail_news_image" style="width: 120px; height: 120px;" class="img-responsive">
                                </div>
                            </div>
                            <label class="form-label">Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_content"> </p>
                                </div>
                            </div>
                            <label class="form-label">Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_news_status"> </p>
                                </div>
                            </div>
                            <label class="form-label">Create At</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_product_create_at"> </p>
                                </div>
                            </div>
                            <label class="form-label">Update At</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_product_update_at"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Create News -->
            <div class="modal fade" id="storeNews" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create News</h4>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">News Title</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="create_news_name" name="create_news_name" class="form-control">
                                </div>
                            </div>
                            <label class="form-label">News Excerpt</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="create_news_excerpt" name="create_news_excerpt" class="form-control">
                                </div>
                            </div>
                            <label class="form-label">News Content</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="create_news_content" name="create_news_content" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="news-btn-store" onclick="storeNews()" type="button" class="btn btn-primary btn-sm">SAVE</button>
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
                        <a onclick="createNews()" href="javascript:void(0)" class="btn btn-primary btn-sm">Add News</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <table id="product-lists" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tittle</th>
                                                <th>Excerpt</th>
                                                <th>Create At</th>
                                                <th>Update At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas->data as $data) : ?>
                                                <tr>
                                                    <td><?= $data->id ?></td>
                                                    <td><?= $data->title ?></td>
                                                    <td><?= $data->excerpt ?></td>
                                                    <td><?= $data->created_at ?></td>
                                                    <td><?= $data->updated_at ?></td>
                                                    <td width="125">
                                                        <button onclick="detailNews('<?= $data->id ?>')" type="button" class="btn btn-primary btn-sm">
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