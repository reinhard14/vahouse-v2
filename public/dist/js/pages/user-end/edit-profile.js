
$(document).ready(function() {

    $('a[data-toggle="tab"]').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
    });

    $('#availability').select2({
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

});
