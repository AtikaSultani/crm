jQuery(document).ready(() => {
    // show mobile sidebar
    $(".toggle-menu-bar").click(() => {
        $("#mobile-side-bar").fadeToggle(100)
    })

    // toggle the forget password link
    $('#password').focus(() => {
        $('#forget-password').toggle()
    }).focusout(() => {
        $('#forget-password').toggle()
    });


    flatpickr('.datepicker-here', {
        dateFormat: 'Y-m-d'
    });
});


// Select page
function selectPage(page) {
    window.location = `?page=${page.value}`;
}
