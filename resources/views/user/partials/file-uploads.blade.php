<div class="row mb-4">
    <div class="col">
        <form id="autoUploadForm" action="user.update-valid-id" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">Valid ID</label>
                </div>
                <div class="col text-right">
                    <a class="nav-link text-orange" href="#" data-bs-toggle="modal" data-bs-target="#guidelinesModal">Read Complete Guidelines</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="file" id="photo_id" name="photo_id" class="form-control" accept="image/*" required>
                    <small class="text-muted">Upload at least 2 Primary and Secondary Valid ID. See valid ID <a href="#">here</a> </small>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="">CV or Resume</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="">DISC Result</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
        <small class="text-muted">Upload your latest DISC result. To take DISC assessment,
            <a href="https://discpersonalitytesting.com/free-disc-test/" target="_blank"> click here</a>
        </small>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="">Portfolio</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="">Video Introduction</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
        <small class="text-muted">Upload at least 2 minute video introduction.
            <a href="https://drive.google.com/file/d/1aJqNFMcso-kGSfjCYYmWg88-cWIkKu19/view" target="_blank">
                Click here
            </a> for a sample video introduction
        </small>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <label for="">Career/Skill Certifications</label>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
        <small class="text-muted">Please compile your certifications in .pdf file format </small>
    </div>
</div>


<div class="row mb-4">
    <div class="col">
        <label for="">Sample Mock Call</label>
        <small class="d-block text-muted mb-3">Upload at least 2-minute mock-call each. <a href="#">Click here</a> for a sample mockcall</small>
        <span class="d-block">Inbound</span>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>
        <span class="d-block pt-3">Outbound</span>
        <input type="file" id="photo_id" name="photo_id" class="form-control" accept=".jpeg, .jpg, .png" required>

    </div>
</div>

<x-applicant.guidelines />

<script>
    $(document).ready(function() {
        $('#photo_id').on('change', function() {
            var formData = new FormData();
            var file = $('#photo_id')[0].files[0];

            if (!file) {
                alert("Please select a file.");
                return;
            }

            formData.append('photo_id', file);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('user.update-valid-id') }}", // Adjust route name as needed
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
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
</script>
