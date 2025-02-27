
$(document).ready(function() {

    $('a[data-toggle="tab"]').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $('#days_available').select2({
        tags: true,
        tokenSeparators: [','],
        placeholder: '',
        width: '100%',
    });

    $('#skills, #softskills, #tools').select2({
        tags: true,
        tokenSeparators: [','],
        placeholder: '',
        width: '100%',
    });

    $('#position7').change(function () {
        $('#specify').prop('disabled', !this.checked);
    }).trigger('change');
});
