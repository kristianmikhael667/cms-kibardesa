<?= $this->include('Views/templates/admin/head') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include("templates/admin/navbar.php") ?>

    <!-- Main Sidebar Container -->
    <?= $this->include("templates/admin/sidebar.php") ?>

    <!-- Modal Detail Product -->
    <div class="modal fade" id="detail_category" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detail Category</h4>
          </div>
          <div class="modal-body">
            <label class="form-label">Category ID</label>
            <div class="form-group">
              <div class="form-line">
                <p id="detail_category_id"> </p>
              </div>
            </div>
            <label class="form-label">Category Name</label>
            <div class="form-group">
              <div class="form-line">
                <p id="detail_category_name"> </p>
              </div>
            </div>
            <label class="form-label">Category Description</label>
            <div class="form-group">
              <div class="form-line">
                <p id="detail_category_description"> </p>
              </div>
            </div>
            <label class="form-label">Category Image</label>
            <div class="form-group">
              <div class="form-line">
                <img id="detail_category_image" style="width: 120px; height: 120px;" class="img-responsive">
              </div>
            </div>
            <label class="form-label">Category isActive</label>
            <div class="form-group">
              <div class="form-line">
                <p id="detail_category_is_active"> </p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Create Category -->
    <div class="modal fade" id="storeCategory" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Category</h4>
          </div>
          <div class="modal-body">
            <label class="form-label">Category Name</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" id="create_category_name" name="create_category_name" class="form-control">
              </div>
            </div>
            <label class="form-label">Category Description</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" id="create_category_description" name="create_category_description" class="form-control">
              </div>
            </div>
            <label class="form-label">Product Images</label>
            <div class="form-group">
              <div class="form-line">
                <input id="create_category_image" type="file" />
                <img id="create_category_image" style="width: 120px; height: 120px;" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="category-btn-store" onclick="storeCategory()" type="button" class="btn btn-primary btn-sm">SAVE</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit Category -->
    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Category</h4>
          </div>
          <div class="modal-body">
            <input id="edit_category_id" name="edit_category_id" type="hidden" />
            <label class="form-label">Category Name</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" id="edit_category_name" name="edit_category_name" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="category-btn-update" onclick="updateCategory()" type="button" class="btn btn-primary btn-sm">SAVE</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>


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
            <a onclick="createCategory()" href="javascript:void(0)" class="btn btn-primary btn-sm">Add Category</a>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" style="border-radius: 20px;">
                <div class="card-body">
                  <table id="product-lists" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>isActive</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($categories as $categorie) : ?>
                        <tr>
                          <td><?= $categorie->id ?></td>
                          <td><?= $categorie->category_name ?></td>
                          <td><?= $categorie->category_description ?></td>
                          <td><?= $categorie->is_active ?></td>
                          <td width="125">
                            <button onclick="detailcategory('<?= $categorie->id ?>')" type="button" class="btn btn-primary btn-sm">
                              <i class="fas fa-bars"></i>
                            </button>
                            <button onclick="editCategory('<?= $categorie->id ?>')" type="button" class="btn btn-primary btn-sm">
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
  </div>


  <?= $this->include("templates/admin/foot.php") ?>

</body>

</html>