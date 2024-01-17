var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + `kriteria/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        console.log(response.message);
        location.reload(true);
        alert(response.message);
    } catch (error) {
        console.error('Error saving Kriteria:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'kriteria/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert(response.message);
            },
            error: function(error) {
                console.error('Error deleting Kriteria:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}


function editData(id) {
    $.ajax({
        url: DASHBOARD + 'kriteria/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#nama_kriteria').val(response.data.nama_kriteria);
        },
        error: function(error) {
            console.error('Error getting Kriteria:', error.responseText);
        }
    });
}

