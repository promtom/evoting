// Datatable
$(document).ready( function () {
    $('#tabel1').DataTable();
} );

/* buat alert konfirmasi 
$(document).on('click', '#btn-vote', function (e) {
    e.preventDefault();
    const link = $(this).attr('href');
    swal({
        title: 'Yakin mau memilih calon tersebut?',
        text: "Ketika anda sudah memilih, anda tidak bisa memilih lagi ya!",
        type: 'warning',
        buttons: {
            confirm: {
                text: 'Ya, yakin!',
                className: 'btn btn-success'
            },
            cancel: {
                text: 'Batal',
                visible: true,
                className: 'btn btn-danger'
            }
        }
    }).then((Vote) => {
        if (Vote) {
            window.location = link;
        } else {
            swal.close();
        }
    });
});
*/
