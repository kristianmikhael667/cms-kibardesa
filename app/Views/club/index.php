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

            <!-- Modal Create Child -->
            <div class="modal fade" id="add_child" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Daerah</h4>
                        </div>
                        <div class="modal-body">
                            <input id="create_parent_id" name="create_parent_id" type="hidden" />
                            <label class="form-label">Daerah Parent</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="create_parent_name"> </p>
                                </div>
                            </div>
                            <label class="form-label">Nama Daerah</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="create_child_name" name="create_child_name" class="form-control">
                                </div>
                            </div>
                            <label class="form-label">Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="create_child_description" name="create_child_description" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="child-add-button" onclick="storeChild()" type="button" class="btn btn-primary btn-sm">SAVE</button>
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Create Daerah -->
            <div class="modal fade" id="store_kota" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Daerah</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active daerahplus" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Provinsi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link daerahplus" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Kabupaten/Kota</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <!-- TAMBAH PROVINSI -->
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <label class="form-label">Nama Daerah</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="create_club_name" name="create_club_name" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-label">Description</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="create_club_description" name="create_club_description" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-label">Area Code</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="create_club_area_code" name="create_club_area_code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="club-add-button" onclick="storeClub()" type="button" class="btn btn-primary btn-sm">SAVE</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                                <!-- TAMBAH KOTA -->
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <label class="form-label">Nama Kota</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="create_kota_name" name="create_kota_name" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-label">Description</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="create_kota_description" name="create_kota_description" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-label">Area Code</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" id="create_kota_area_code" name="create_kota_area_code" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-label">Assign Kota to Provinsi</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select id="kota_club_parent_id" class="form-control form-control-sm">
                                                <?php foreach (allProvinsi() as $provinsi) : ?>
                                                    <option value="<?= $provinsi->parent_club_id ?>"><?= $provinsi->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="kota-add-button" onclick="storeKota()" type="button" class="btn btn-primary btn-sm">SAVE</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail Club -->
            <div class="modal fade" id="detail_club" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Daerah</h4>
                        </div>
                        <div class="modal-body">
                            <label class="form-label">ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_id_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">Parent Daerah ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_parent_id"></p>
                                </div>
                            </div>
                            <label class="form-label">Daerah ID</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_id"> </p>
                                </div>
                            </div>
                            <label class="form-label">Daerah Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_name"> </p>
                                </div>
                            </div>
                            <label class="form-label">Area Code</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_areacode"> </p>
                                </div>
                            </div>
                            <label class="form-label">Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_description"></p>
                                </div>
                            </div>
                            <label class="form-label">Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_address"> </p>
                                </div>
                            </div>
                            <label class="form-label">Phone</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_phone"> </p>
                                </div>
                            </div>
                            <label class="form-label">Born At</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <p id="detail_club_born_at"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit Club -->
            <div class="modal fade" id="edit_club" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Daerah</h4>
                        </div>
                        <div class="modal-body">
                            <input id="edit_club_id" name="edit_club_id" type="hidden" />
                            <label class="form-label">Daerah Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="edit_club_name" name="edit_club_name" class="form-control">
                                </div>
                            </div>
                            <label class="form-label">Daerah Description</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="edit_club_description" name="edit_club_description" class="form-control">
                                </div>
                            </div>
                            <label class="form-label">Assign Daerah</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select id="edit_club_parent_id" class="form-control form-control-sm">
                                        <?php foreach (allProvinsi() as $provinsi) : ?>
                                            <option value="<?= $provinsi->parent_club_id ?>"><?= $provinsi->name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="product-btn-update" onclick="updateClub()" type="button" class="btn btn-primary btn-sm">SIMPAN</button>
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
                            <a onclick="bikinKota()" href="javascript:void(0)" class="btn btn-primary btn-sm">Tambah Daerah</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body">
                                    <table id="product-lists" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Daerah ID</th>
                                                <th>Area Code</th>
                                                <th>Description</th>
                                                <th>Born at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($clubs->data as $club) : ?>
                                                <tr>
                                                    <td><?= $club->name ?></td>
                                                    <td><?= $club->club_id ?></td>
                                                    <td><?= $club->area_code ?></td>
                                                    <td><?= $club->description ?></td>
                                                    <td><?= $club->born_at ?></td>
                                                    <td width="125">
                                                        <button onclick="detailClub('<?= $club->club_id ?>')" type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-bars"></i>
                                                        </button>
                                                        <button onclick="editClub('<?= $club->club_id ?>')" type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button onclick="addChild('<?= $club->club_id ?>')" type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa fa-plus"></i>
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