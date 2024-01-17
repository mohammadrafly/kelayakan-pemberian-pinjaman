function loginUser() {
    var formData = $('#loginForm').serialize();

    $.ajax({
        url: BASE_URL,
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                window.location.href = response.redirect;
            } else {
                $('#errorContainer').text(response.message).show();

                setTimeout(function() {
                    $('#errorContainer').hide();
                }, 3000);
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}