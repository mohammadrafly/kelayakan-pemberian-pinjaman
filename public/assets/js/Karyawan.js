var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + `karyawan/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        console.log(response.message);
        location.reload(true);
        alert('save successful!');
    } catch (error) {
        console.error('Error saving Karyawan:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'karyawan/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert('Deletion successful!');
            },
            error: function(error) {
                console.error('Error deleting Karyawan:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}


function editData(id) {
    $.ajax({
        url: DASHBOARD + 'karyawan/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#name').val(response.data.name);
            $('#email').val(response.data.email);
            $('#nomor_hp').val(response.data.nomor_hp);
            $('#alamat').val(response.data.alamat);
        },
        error: function(error) {
            console.error('Error getting Karyawan:', error.responseText);
        }
    });
}

