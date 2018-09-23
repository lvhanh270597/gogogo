<script src="table/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="table/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="table/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="table/js/mdb.min.js"></script>
<!-- DataTables.net -->
<script type="text/javascript" src="table/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="table/js/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<!--Custom scripts-->
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
    });

    $(document).ready(function() {
        $('#datatables').DataTable();
    });

    // Material Select Initialization
    $(document).ready(function () {
        $('select[name="datatables_length"]').material_select();
    });

</script>