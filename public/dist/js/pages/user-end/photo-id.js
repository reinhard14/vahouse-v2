$(document).ready(function() {
    $('.file-upload').on('change', function() {
        var input = $(this);
        var formData = new FormData();
        var file = input[0].files[0];
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var uploadUrl = input.data('upload-url'); // ✅ Get upload route dynamically
        var allowedTypes = input.data('allowed-types'); // ✅ Get allowed MIME types
        var maxSizeMB = parseFloat(input.data('max-size')); // ✅ Get max size in MB

        if (!allowedTypes) {
            alert("Missing allowed file types.");
            return;
        }
        allowedTypes = allowedTypes.split(','); // ✅ Now safe to split

        if (!file) {
            alert("Please select a file.");
            return;
        }

        var fileType = file.type;
        var fileSizeMB = file.size / 1024 / 1024; // ✅ Convert bytes to MB

        // ✅ Check if file type is allowed
        if (!allowedTypes.includes(fileType)) {
            alert("Invalid file type. Allowed: " + allowedTypes.join(", "));
            input.val(''); // ❌ Reset input if invalid
            return;
        }

        // ✅ Check file size limit
        if (fileSizeMB > maxSizeMB) {
            alert("File is too large! Max size: " + maxSizeMB + "MB");
            input.val(''); // ❌ Reset input if too large
            return;
        }

        var formData = new FormData();
        formData.append(input.attr('name'), file); // ✅ Use input name dynamically

        $.ajax({
            url: uploadUrl,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },

            success: function(response) {

                handleFileFormSubmission(response);

            },
            error: function(jqXHR) {
                try {
                    var responseJson = JSON.parse(jqXHR.responseText);
                    var errorResponse = responseJson.errors
                        ? Object.values(responseJson.errors).flat()
                        : 'No errors found in the response';

                    var formattedResponse = JSON.stringify(errorResponse);
                    handleFileFormWithMissingField(formattedResponse);
                } catch (e) {
                    alert('Invalid JSON response: ' + jqXHR.responseText);
                }
            }
        });
    });
});

