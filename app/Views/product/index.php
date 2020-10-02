<?= $this->include('Views/templates/admin/head') ?>
<div class="wrapper">

  <!-- Navbar -->
  <?= $this->include("templates/admin/navbar") ?>

  <!-- Main Sidebar Container -->
  <?= $this->include("templates/admin/sidebar") ?>

  <!-- Modal Detail Product -->
  <div class="modal fade" id="detail_product" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Product</h4>
        </div>
        <div class="modal-body">
          <label class="form-label">Product ID</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_id"> </p>
            </div>
          </div>
          <label class="form-label">Product Name</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_name"> </p>
            </div>
          </div>
          <label class="form-label">ID Penjual</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_user_id"> </p>
            </div>
          </div>
          <label class="form-label">Product Images</label>
          <div class="form-group">
            <div class="form-line">
              <img id="detail_product_image" style="width: 120px; height: 120px;" class="img-responsive">
            </div>
          </div>
          <label class="form-label">Product Price</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_price"> </p>
            </div>
          </div>
          <label class="form-label">Product Description</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_description"> </p>
            </div>
          </div>
          <label class="form-label">Product Active</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_is_active"> </p>
            </div>
          </div>
          <label class="form-label">Product Sold</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_is_sold"> </p>
            </div>
          </div>
          <label class="form-label">Product Category</label>
          <div class="form-group">
            <div class="form-line">
              <p id="detail_product_category"> </p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Create Product -->
  <div class="modal fade" id="store_product" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Create Product</h4>
        </div>
        <div class="modal-body">
          <label class="form-label">Product Name</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_name" name="create_product_name" class="form-control">
            </div>
          </div>
          <label class="form-label">Product Description</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_description" name="create_product_description" class="form-control">
            </div>
          </div>
          <label class="form-label">Product Condition</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_condition" name="create_product_condition" class="form-control">
            </div>
          </div>
          <label class="form-label">Latitude</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_latitude" name="create_product_latitude" class="form-control">
            </div>
          </div>
          <label class="form-label">Longtitude</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_longtitude" name="create_product_longtitude" class="form-control">
            </div>
          </div>
          <label class="form-label">Location</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_location" name="create_product_location" class="form-control">
            </div>
          </div>
          <label class="form-label">Product Images</label>
          <div class="form-group">
            <div class="form-line">
              <input id="create_input_file_product_image" type="file" />
              <img id="create_input_file_product_image" style="width: 120px; height: 120px;" class="img-responsive">
            </div>
          </div>
          <label class="form-label">Product Price</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="create_product_price" name="create_product_price" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="product-btn-store" onclick="store()" type="button" class="btn btn-primary btn-sm">SAVE</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Product -->
  <div class="modal fade" id="edit_product" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Product</h4>
        </div>
        <div class="modal-body">
          <input id="product_id" name="product_id" type="hidden" />
          <label class="form-label">Product Name</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="product_name" name="product_name" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button id="product-btn-update" onclick="update()" type="button" class="btn btn-primary btn-sm">SIMPAN</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </div>



  <div class="content-wrapper">
    <div class="content-header">

    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="ml-2" style="position: relative; left: -5px; margin-bottom: 20px;">
          <a onclick="create()" href="javascript:void(0)" class="btn btn-primary btn-sm">Add Product</a>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card" style="border-radius: 20px;">
              <div class="card-body">
                <table id="product-lists" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Location</th>
                      <th>SOLD</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($products as $product) : ?>
                      <tr>
                        <td><?= $product->id ?></td>
                        <td><?= $product->product_name ?></td>
                        <td><?= number_to_currency((int) $product->product_price, "IDR") ?></td>
                        <td><?= $product->product_description ?></td>
                        <td><?= $product->location ?></td>
                        <td><?= $product->is_sold ?></td>
                        <td width="125">
                          <button onclick="detail('<?= $product->id ?>')" type="button" class="btn btn-primary btn-sm">
                            <i class="fas fa-bars"></i>
                          </button>
                          <button onclick="edit('<?= $product->id ?>')" type="button" class="btn btn-primary btn-sm">
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

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

</div>

<?= $this->include("templates/admin/foot.php") ?>