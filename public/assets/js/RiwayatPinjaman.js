var deleteId;

const saveData = async () => {
    const id = $('#id').val();
    try {
        const response = await $.ajax({
            url: DASHBOARD + `riwayatpinjaman/${id ? 'update/' : ''}` + (id ? id : ''),
            type: 'POST',
            data: $('#form').serialize(),
        });

        console.log(response.message);
        location.reload(true);
        alert('save successful!');
    } catch (error) {
        console.error('Error saving Riwayat Pinjaman:', error.responseText);
    }
};

function setDeleteId(id) {
    deleteId = id;
}

function deleteData(id, isConfirmed) {
    if (isConfirmed) {
        $.ajax({
            url: DASHBOARD + 'riwayatpinjaman/delete/' + id,
            type: 'GET',
            success: function(response) {
                console.log(response.message);
                location.reload(true);
                alert('Deletion successful!');
            },
            error: function(error) {
                console.error('Error deleting Riwayat Pinjaman:', error.responseText);
            }
        });
    } else {
        console.log('Deletion canceled.');
    }
}


function editData(id) {
    $.ajax({
        url: DASHBOARD + 'riwayatpinjaman/update/' + id,
        type: 'GET',
        success: function(response) {
            $('#id').val(response.data.id);
            $('#id_karyawan').val(response.data.id_karyawan);
            $('#riwayat_pinjaman_sebeleumnya').val(response.data.riwayat_pinjaman_sebeleumnya);
            $('#bobot').val(response.data.bobot);
        },
        error: function(error) {
            console.error('Error getting Riwayat Pinjaman:', error.responseText);
        }
    });
}

