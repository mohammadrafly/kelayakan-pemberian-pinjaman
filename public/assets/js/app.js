const BASE_URL = 'http://127.0.0.1:8000/';
const DASHBOARD = BASE_URL + 'dashboard/';

function performLogout() {
    $.ajax({
        type: 'GET',
        url: BASE_URL + 'dashboard/logout',
        dataType: 'json',
        success: function(response) {
            window.location.href = response.redirect;
        },
        error: function(error) {
            console.log(error);
        }
    });
}

$(document).ready(function() {
    $('#datatable').DataTable();
    $('.js-example-basic-single').select2({
        placeholder: "Pilih Karyawan",
        allowClear: true
    });
    $('#errorContainer').hide();
    $('.submenu').hide();
    $('.submenu-toggle').click(function (e) {
        e.preventDefault();
        $(this).next('.submenu').toggle();
    });
});