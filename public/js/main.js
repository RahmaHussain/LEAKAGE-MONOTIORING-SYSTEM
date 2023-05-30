// Page specific script
$(function() {
    $("#home-table").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo('#home-table_wrapper .col-md-6:eq(0)');
});
