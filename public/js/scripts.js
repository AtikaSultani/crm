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

    // Select province
    $('select#province').on('change', function () {
        $.ajax({
            url: `/provinces/${$(this).val()}/districts`,
            success: function (view) {
                $('select#district').html(view)
            }
        });
    });
});


// Select page
function selectPage(page) {
    window.location = `?page=${page.value}`;
}
