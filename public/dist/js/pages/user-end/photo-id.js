$(document).ready(function() {
    $('#photo_id').on('change', function() {
        var formData = new FormData();
        var file = $('#photo_id')[0].files[0];
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        if (!file) {
            alert("Please select a file.");
            return;
        }

        formData.append('photo_id', file);

        $.ajax({
            url: updateStatusRoute,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },

            beforeSend: function() {
                $('#uploadStatus').html('<p>Uploading...</p>');
            },
            success: function(response) {
                $('#uploadStatus').html('<p style="color:green;">' + response.message + '</p>');
            },
            error: function(xhr) {
                $('#uploadStatus').html('<p style="color:red;">Error: ' + xhr.responseText + '</p>');
            }
        });
    });
});

