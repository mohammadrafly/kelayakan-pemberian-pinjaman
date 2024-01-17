var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + `lamakerja/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        console.log(response.message);
        location.reload(true);
        alert('save successful!');
    } catch (error) {
        console.error('Error saving Lama kerja:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'lamakerja/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert('Deletion successful!');
            },
            error: function(error) {
                console.error('Error deleting Lama kerja:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}


function editData(id) {
    $.ajax({
        url: DASHBOARD + 'lamakerja/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#id_karyawan').val(response.data.id_karyawan);
            $('#lama_kerja').val(response.data.lama_kerja);
            $('#bobot').val(response.data.bobot);
        },
        error: function(error) {
            console.error('Error getting Lama kerja:', error.responseText);
        }
    });
}

