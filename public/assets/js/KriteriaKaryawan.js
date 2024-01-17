var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + `kriteriakaryawan/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        console.log(response.message);
        location.reload(true);
        alert(response.message);
    } catch (error) {
        console.error('Error saving kriteriakaryawan:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'kriteriakaryawan/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert(response.message);
            },
            error: function(error) {
                console.error('Error deleting kriteriakaryawan:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}


function editData(id) {
    $.ajax({
        url: DASHBOARD + 'kriteriakaryawan/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#id_karyawan').val(response.data.id_karyawan);
            $('#id_kriteria').val(response.data.id_kriteria);
            $('#nilai').val(response.data.nilai);
        },
        error: function(error) {
            console.error('Error getting kriteriakaryawan:', error.responseText);
        }
    });
}

