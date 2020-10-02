<!-- jQuery -->
<script src="<?= base_url('public/adminLTE-3/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('public/adminLTE-3/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables -->
<script src="<?= base_url('public/adminLTE-3/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('public/adminLTE-3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('public/adminLTE-3/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('public/adminLTE-3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script>
    const token = '<?= getToken(); ?>';
    const baseUrl = '<?= base_url(); ?>';
    $('#product-lists').DataTable({
        responsive: true,
        autoWidth: false,
    })

    //////////////////////////////////////////
    ///////////// CURD CATEGORY //////////////
    //////////////////////////////////////////

    detailcategory = (id) => {
        $('#detail_category').modal('show');
        console.log('detail test');
        let fd = new FormData();
        fd.append('id', id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/categories/detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                $("#detail_category_id").text(result.data.id);
                $("#detail_category_name").text(result.data.category_name);
                $("#detail_category_description").text(result.data.category_description);
                $("#detail_category_image").attr('src', `167.172.68.215:2020${result.data.category_image}`);
                $("#detail_category_is_active").text(result.data.is_active);
            }
        });
    }

    ////////////////////////////
    //////// NEWS //////////////
    ////////////////////////////

    detailNews = (id) => {
        $('#detail_news').modal('show');
        console.log('MASUK FOOT');
        let fd = new FormData();
        fd.append('id', id);
        console.log(id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/news/detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                $("#detail_news_id").text(result.data.id);
                $("#detail_news_uid").text(result.data.uid);
                $("#detail_news_club_id").text(result.data.club_id);
                $("#detail_news_title").text(result.data.title);
                $("#detail_news_excerpt").text(result.data.excerpt);
                $("#detail_news_image").attr('src', `https://api.yamahanmaxclub.com${result.data.post_image}`);
                $("#detail_news_content").text(result.data.content);
                $("#detail_news_status").text(result.data.status);
                $("#detail_product_create_at").text(result.data.created_at);
                $("#detail_product_update_at").text(result.data.updated_at);
            }
        });
    }

    createNews = () => {
        $('#storeNews').modal('show');
    }
    storeNews = () => {
        console.log('store news');
        let fd = new FormData();
        let title = $("#create_news_name").val();
        let excerpt = $("#create_news_excerpt").val();
        let content = $("#create_news_content").val();
        // let desc = $("#create_news_name").val();
        // fd.append('name', name);
        fd.append('title', title);
        fd.append('excerpt', excerpt);
        fd.append('content', content);
        $('#news-btn-store').text(`PROCESS`);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/news/store`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#store').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'News Created !',
                    'success'
                )
                // window.location.reload();
                $('#news-btn-store').text('CREATE');
            }
        });
    }



    ////////////////////////////
    ////////////////////////////

    createCategory = () => {
        $('#storeCategory').modal('show');
    }
    storeCategory = () => {
        console.log('store cat');
        let fd = new FormData();
        let name = $("#create_category_name").val();
        let desc = $("#create_category_description").val();
        let img = $('#create_category_image')[0].files[0]; //image
        fd.append('name', name);
        fd.append('desc', desc);
        fd.append('img', img);
        $('#category-btn-store').text(`PROCESS`);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/categories/store`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#store').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Category Created !',
                    'success'
                )
                window.location.reload();
                $('#category-btn-store').text('CREATE');
            }
        });
    }

    editCategory = async (id) => {
        $('#edit_category').modal('show');
        let fd = new FormData();
        fd.append('id', id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/categories/edit`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data);
                $("#edit_category_id").val(result.data.id);
                $("#edit_category_name").val(result.data.category_name);
            }
        });
    }

    updateCategory = async () => {
        console.log('update')
        let fd = new FormData();
        let id = $('#edit_category_id').val();
        let name = $('#edit_category_name').val();
        fd.append('id', id);
        fd.append('name', name);
        $('#ate').text(`PROCESS`);
        console.log(id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/categories/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#edit_category').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Category Updated !',
                    'success'
                )
                window.location.reload();
                $('#category-btn-update').text('CREATE');
            }
        });
    }

    //////////////////////////////////////////
    //////////////////////////////////////////

    //////////////////////////////////////////
    ///////////// CURD PRODUCT ///////////////
    //////////////////////////////////////////

    detail = (id) => {
        $('#detail_product').modal('show');
        console.log('detail test');
        let fd = new FormData();
        fd.append('id', id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/products/detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                $("#detail_product_id").text(result.data.id);
                $("#detail_product_name").text(result.data.product_name);
                $("#detail_product_user_id").text(result.data.user_id);
                $("#detail_product_image").attr('src', `167.172.68.215:2020${result.data.product_image}`);
                $("#detail_product_description").text(result.data.product_description);
                $("#detail_product_price").text(result.data.product_price);
                $("#detail_product_is_active").text(result.data.is_active);
                $("#detail_product_is_sold").text(result.data.is_sold);
                $("#detail_product_category").text(result.data.category_id);
            }
        });
    }

    create = () => {
        $('#store_product').modal('show');
    }
    store = () => {

        let fd = new FormData();
        let name = $("#create_product_name").val();
        let desc = $("#create_product_description").val();
        let cond = $("#create_product_condition").val();
        let lat = $("#create_product_latitude").val();
        let long = $("#create_product_longtitude").val();
        let loc = $("#create_product_location").val();
        let img = $('#create_input_file_product_image')[0].files[0]; //image
        let price = $("#create_product_price").val();
        fd.append('name', name);
        fd.append('desc', desc);
        fd.append('cond', cond);
        fd.append('lat', lat);
        fd.append('long', long);
        fd.append('loc', loc);
        fd.append('img', img);
        fd.append('price', price);
        $('#product-btn-store').text(`PROCESS`);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/products/store`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#store').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Product Created !',
                    'success'
                )
                window.location.reload();
                $('#product-btn-store').text('CREATE');
            }
        });
    }

    edit = async (id) => {
        $('#edit_product').modal('show');
        let fd = new FormData();
        fd.append('id', id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/products/edit`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data);
                $("#product_id").val(result.data.id);
                $("#product_name").val(result.data.product_name);
            }
        });
    }

    update = async () => {
        let fd = new FormData();
        let id = $('#product_id').val();
        let name = $('#product_name').val();
        fd.append('id', id);
        fd.append('name', name);
        $('#product-btn-update').text(`PROCESS`);
        console.log(id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/products/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#editProduct').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Product Updated !',
                    'success'
                )
                window.location.reload();
                $('#product-btn-update').text('CREATE');
            }
        });
    }

    //////////////////////////////////////////
    //////////////////////////////////////////

    //////////////////////////////////////////
    ///////////// CURD USERS /////////////////
    //////////////////////////////////////////


    detailUser = (uid) => {
        $('#detail_user').modal('show');
        let fd = new FormData();
        fd.append('uid', uid);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/users/detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                $("#detail_user_uid").text(result.data.uid);
                $("#detail_user_fullname").text(result.data.full_name);
                $("#detail_user_username").text(result.data.username);
                $("#detail_user_nra").text(result.data.nra);
                $("#detail_user_ynci").text(result.data.ynci);
                $("#detail_user_alamat").text(result.data.alamat);
                $("#detail_user_noktp").text(result.data.no_ktp);
                $("#detail_user_nosim").text(result.data.no_sim);
                $("#detail_user_closestno").text(result.data.closest_no);
                $("#detail_user_email").text(result.data.email);
                $("#detail_user_create").text(result.data.created_at);
            }
        });
    }

    createUser = () => {
        $('#create_user').modal('show');
    }
    storeUser = () => {
        let fd = new FormData();
        let user = $("#create_user_username").val();
        let name = $("#create_user_fullname").val();
        let ktp = $("#create_user_ktp").val();
        let pass = $("#create_user_password").val();
        fd.append('user', user);
        fd.append('name', name);
        fd.append('ktp', ktp);
        fd.append('pass', pass);
        $('#user-add-button').text(`PROCESS`);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/users/create`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#store').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'User Created !',
                    'success'
                )
                window.location.reload();
                $('#user-add-button').text('CREATE');
            }
        });
    }


    //////////////////////////////////////////
    //////////////////////////////////////////

    //////////////////////////////////////////
    ///////////// CURD CLUB //////////////////
    //////////////////////////////////////////

    bikinClub = () => {
        $('#store_club').modal('show');
    }
    storeClub = () => {
        let fd = new FormData();
        let name = $("#create_club_name").val();
        let desc = $("#create_club_description").val();
        fd.append('name', name);
        fd.append('desc', desc);
        $('#club-add-button').text(`PROCESS`);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/club/store`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#store').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Daerah Created !',
                    'success'
                )
                window.location.reload();
                $('#club-add-button').text('CREATE');
            }
        });
    }

    detailClub = (club_id) => {
        $('#detail_club').modal('show');
        let fd = new FormData();
        fd.append('club_id', club_id);
        $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/club/detail`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data)
                $("#detail_club_id_id").text(result.data.id);
                $("#detail_club_parent_id").text(result.data.parent_club_id);
                $("#detail_club_id").text(result.data.club_id);
                $("#detail_club_name").text(result.data.name);
                $("#detail_club_areacode").text(result.data.area_code);
                $("#detail_club_description").text(result.data.description);
                $("#detail_club_phone").text(result.data.phone);
                $("#detail_club_address").text(result.data.address);
                $("#detail_club_born_at").text(result.data.born_at);
                // $("#detail_club_image").attr('src', `https://api.yamahanmaxclub.com${result.data.image_url}`);
            }
        });
    }

    editClub = async (club_id) => {
        $('#edit_club').modal('show');
        console.log('edit club')
        let fd = new FormData();
        fd.append('club_id', club_id);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/club/edit`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                let result = JSON.parse(data);
                // console.log(data)
                $("#edit_club_id_id").val(result.data.id);
                $("#edit_club_id").val(result.data.club_id);
                $("#edit_club_name").val(result.data.name);
                $("#edit_club_image").val(result.data.image_url);
                $("#edit_club_description").val(result.data.description);
                $("#edit_club_website").val(result.data.website);
                $("#edit_club_born_at").val(result.data.born_at);
            }
        });
    }

    updateClub = async () => {
        console.log('update club')
        let fd = new FormData();
        let club_id = $('#edit_club_id').val();
        let name = $('#edit_club_name').val();
        let img = $('#edit_input_file_image')[0].files[0];
        let desc = $('#edit_club_description').val();
        let web = $('#edit_club_website').val();
        let born = $('#edit_club_born_at').val();
        let update = $('#edit_club_update_at').val();
        fd.append('club_id', club_id);
        fd.append('name', name);
        fd.append('img', img);
        fd.append('desc', desc);
        fd.append('web', web);
        fd.append('born', born);
        fd.append('update', update);
        console.log(img)
        $('#create').text(`PROCESS`);
        await $.ajax({
            type: "POST",
            url: `${baseUrl}/admin/club/update`,
            cache: false,
            contentType: false,
            processData: false,
            data: fd,
            success: function(data) {
                $('#edit_category').modal('hide');
                Swal.fire(
                    'Successfully !',
                    'Club Updated !',
                    'success'
                )
                // window.location.reload();
                $('#category-btn-update').text('CREATE');
            }
        });
    }

    //////////////////////////////////////////

    logout = async () => {
        Swal.fire({
            title: 'Are you sure want to logout?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then(async (result) => {
            if (result.value) {
                await $.ajax({
                    type: "POST",
                    url: `${baseUrl}/admin/auth/logout`,
                    success: function(data) {
                        window.location.reload();
                    }
                });
            }
        });
    }
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('public/adminLTE-3/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('public/adminLTE-3/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('public/adminLTE-3/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('public/adminLTE-3/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('public/adminLTE-3/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- Jquery Lazy -->
<script src="<?= base_url('public/adminLTE-3/plugins/jquery-lazy/jquery.lazy.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('public/adminLTE-3/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('public/adminLTE-3/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('public/adminLTE-3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('public/adminLTE-3/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- Sweetalert 2 -->
<script src="<?= base_url('public/adminLTE-3/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('public/adminLTE-3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('public/adminLTE-3/dist/js/adminlte.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('public/adminLTE-3/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('public/adminLTE-3/dist/js/demo.js') ?>"></script>

</body>

</html>