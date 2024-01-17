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
    $('#errorContainer').hide();
});

