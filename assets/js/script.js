$(function(){

    $('.btnTambah').on('click', function(){

        $('#formModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function(){

        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/php_mvc/public/siswa/ubah');

        const id = $(this).data('id');
        
        
        $.ajax({
            url:'http://localhost/php_mvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#alamat').val(data.alamat);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id );
            }
             
        });

    });

});