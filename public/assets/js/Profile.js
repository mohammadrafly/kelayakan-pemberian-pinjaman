const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + 'profile/' + id,
            type: 'POST',
            data: $('#profileForm').serialize(),
        });

        if (response.success) {
            console.log(response.message);
            location.reload(true);
            alert(response.message);
        } else {
            alert('Save failed: ' + response.message);
        }
    } catch (error) {
        console.error('Error saving Users:', error.responseText);
    }
};

const savePassword = async () => {
    const id = $('#id').val();
    const password = $('#new_password').val();
    const passwordConfirm = $('#new_password_confirm').val();

    if (password !== passwordConfirm) {
        alert(response.message);
        return;
    }

    try {
        const response = await $.ajax({
            url: DASHBOARD + 'profile/change/password/' + id,
            type: 'POST',
            data: $('#changePasswordForm').serialize(),
        });

        if (response.success) {
            console.log(response.message);
            location.reload(true);
            alert(response.message);
        } else {
            alert('Save failed: ' + response.message);
        }
    } catch (error) {
        console.error('Error saving Password:', error.responseText);
    }
}