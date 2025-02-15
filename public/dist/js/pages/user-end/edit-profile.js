
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

    // Fade out after 5 seconds (5000ms)
    setTimeout(function () {
        $(".alert").fadeOut("slow");
    }, 5000);

});
