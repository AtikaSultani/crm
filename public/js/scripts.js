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
        } else {
            $('#description-container').hide();
            $('#description').val(null);
        }
    });

    // Modal
    $('.modal, .modal span.cursor-pointer, a.close-modal').click(function () {
        $('.modal').fadeOut(100);
    })

    $('.modal *').click(function (event) {
        event.stopPropagation();
    });

    $(document).on('keydown', function (e) {
        if (e.keyCode === 27) { // ESC
            $('div.modal').fadeOut(200);
        }
    });
});

/**
 * Delete resource
 *
 * @param  id
 * @param route
 * @param  event
 */
function deleteResource(id, route, event) {
    event.preventDefault();
    $('div.delete-modal')
        .fadeIn(200)
        .removeClass('invisible');

    $('form#delete-form').attr('action', `${baseUrl}/${route}/${id}`);
}

/**
 * Export complaints modal
 *
 * @param  id
 * @param route
 * @param  event
 */
function exportComplaint() {
    $('div#export-modal')
        .fadeIn(200)
        .removeClass('invisible');
}

// Select page
function selectPage(page) {
    window.location = `?page=${page.value}`;
}
