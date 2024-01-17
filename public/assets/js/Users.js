var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    const password = $('#password').val();
    const passwordConfirm = $('#password_confirmation').val();

    if (password !== passwordConfirm) {
        alert('Password tidak sama! Silahkan ketik ulang.');
        return;
    }

    try {
        const response = await $.ajax({
            url: DASHBOARD + `users/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        if (response.success) {
            console.log(response.message);
            location.reload(true);
            alert('Save successful!');
        } else {
            alert('Save failed: ' + response.message);
        }
    } catch (error) {
        console.error('Error saving Users:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'users/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert('Deletion successful!');
            },
            error: function(error) {
                console.error('Error deleting Users:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}

function editData(id) {
    $.ajax({
        url: DASHBOARD + 'users/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#name').val(response.data.name);
            $('#email').val(response.data.email);
            $('#password').val(response.data.password);
            $('#password_confirmation').val(response.data.password);

            $('#password').prop('disabled', true);
            $('#password_confirmation').prop('disabled', true);
        },
        error: function(error) {
            console.error('Error getting Users:', error.responseText);
        }
    });
}

