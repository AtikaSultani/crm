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
        if ($(this).val() != '') {
            $.ajax({
                url: `/provinces/${$(this).val()}/districts`,
                success: function (view) {
                    $('select#district').html(view)
                }
            });
        }
        $('select#district').html('');
    });

    // select the specific category
    $('select#specific-category').on('change', function () {
        if ($(this).val() == 14) {
            $('#description-container').show();
        }else{
            $('#description-container').hide();
        }

    });
});


// Select page
function selectPage(page) {
    window.location = `?page=${page.value}`;
}
