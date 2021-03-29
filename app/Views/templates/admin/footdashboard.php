<!-- jQuery -->
<script src="/adminLTE-3/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminLTE-3/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables -->
<script src="/adminLTE-3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminLTE-3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminLTE-3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminLTE-3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<!-- Resources Pie -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_material);
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = [ {
  "country": "Persentage",
  "litres": <?php echo $persen ?>
}, {
  "country": "Total",
  "litres": 301.9
},
];

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


}); // end am4core.ready()
</script>


<script>
    const token = '<?= getToken(); ?>';
    const baseUrl = '<?= base_url(); ?>';
    $('#product-lists').DataTable({
        responsive: true,
        autoWidth: false,
    })

    /////////////////////
    ////// GET DATA TABLE
    /////////////////////
    let table = $('#kota_lists').DataTable({
        responsive: true,
        autoWidth: false,
        serverside: true,
        processing: true,
        ajax: {
            url: `${baseUrl}/admin/club/get-datatables-empty`,
            dataType: "json",
            type: "POST",
        },
        columns: [{
                data: "Name"
            },
            {
                data: "Daerah ID"
            },
            {
                data: "Area Code"
            },
            {
                data: "Description"
            },
            {
                data: "Born at"
            },
            {
                data: "Action"
            },
        ]
    });

    $("#select_kota").change(function() {

        let club_id = $("#select_kota").val();
        table.ajax.url(`${baseUrl}/admin/club/get_datatables/${club_id}`).load()

    })

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
<script src="/adminLTE-3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/adminLTE-3/plugins/chart.js/Chart.min.js"></script>
<!-- JQVMap -->
<script src="/adminLTE-3/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/adminLTE-3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminLTE-3/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Jquery Lazy -->
<script src="/adminLTE-3/plugins/jquery-lazy/jquery.lazy.min.js"></script>
<!-- daterangepicker -->
<script src="/adminLTE-3/plugins/moment/moment.min.js"></script>
<script src="/adminLTE-3/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/adminLTE-3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/adminLTE-3/plugins/summernote/summernote-bs4.min.js"></script>
<!-- Sweetalert 2 -->
<script src="/adminLTE-3/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- overlayScrollbars -->
<script src="/adminLTE-3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE-3/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/adminLTE-3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminLTE-3/dist/js/demo.js"></script>

</body>

</html>