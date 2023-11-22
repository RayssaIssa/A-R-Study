$(document).ready(function() {
    $("#enviar").click(function() {
        var formData = new FormData($("#uploadForm")[0]);

        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                if (data) {
                    $("#form-field-field_53c80dc").attr('src', data);
                }
            }
        }); 
    });
});
