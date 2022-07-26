// Call the dataTables jQuery plugin
// $(document).ready(function() {
//     $('#dataTable').DataTable({
//         dom: 'lBfrtip',
//         buttons: [{
//                 extend: 'colvis',

//             },
//             {
//                 extend: 'excelHtml5',
//                 title: 'data_export_penggajian',
//             },
//             {
//                 extend: 'pdfHtml5',
//                 title: 'penggajian',
//             },
//         ],
//         "lengthMenu": [
//             [10, 25, 50, -1],
//             [10, 25, 50, "All"]
//         ]
//     });
// });
















// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dt_penempatan').DataTable();
});

$(function() {
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $(".datepickerak").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $(".datepickerakhir").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $(".tanggal_lahir").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $("#join").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $("#awal_kontrak").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
    $("#akhir_kontrak").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
});

$(document).ready(function() {
    $('#join').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        ui: 'bootstrap'
    });
});