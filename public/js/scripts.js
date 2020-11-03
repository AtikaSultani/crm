baseUrl = $('meta[name*="base-url"]').attr("content");
jQuery(document).ready(() => {
    // show mobile sidebar
    $(".toggle-menu-bar").click(() => {
        $("#mobile-side-bar").fadeToggle(100);
    });

    // toggle the forget password link
    $("#password")
        .focus(() => {
            $("#forget-password").toggle();
        })
        .focusout(() => {
            $("#forget-password").toggle();
        });

    // Select province
    $("select#province").on("change", function () {
        if ($(this).val() != "") {
            $.ajax({
                url: `/provinces/${$(this).val()}/districts`,
                success: function (view) {
                    $("select#district").html(view);
                },
            });
        }
        $("select#district").html("");
    });

    // Select province then related project will list
    $("select#province").on("change", function () {
        if ($(this).val() != "") {
            $.ajax({
                url: `/provinces/${$(this).val()}/projects`,
                success: function (view) {
                    $("select#project").html(view);
                },
            });
        }
        $("select#project").html("");
    });

    // select the specific category
    $("select#specific-category").on("change", function () {
        if ($(this).val() == 14) {
            $("#description-container").show();
        } else {
            $("#description-container").hide();
            $("#description").val(null);
        }
    });

    // Modal
    $(".modal, .modal span.cursor-pointer, a.close-modal").click(function () {
        $(".modal").fadeOut(100);
    });

    $(".modal *").click(function (event) {
        event.stopPropagation();
    });

    $(document).on("keydown", function (e) {
        if (e.keyCode === 27) {
            // ESC
            $("div.modal").fadeOut(200);
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
    $("div.delete-modal").fadeIn(200).removeClass("invisible");

    // if(route == 'project')

    $("form#delete-form").attr("action", `${baseUrl}/${route}/${id}`);
}

/**
 * Export complaints modal
 *
 * @param  id
 * @param route
 * @param  event
 */
function exportComplaint() {
    $("div#export-modal").fadeIn(200).removeClass("invisible");
}

// user change password
function UserProfile() {
    $("div#change-password").fadeIn(200).removeClass("invisible");
}

function selectPage(page) {
    window.location = `?page=${page.value}`;
}

// Assign role to user
function assignRole(userId, event) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: "/users/" + userId + "/assign-role",
        success: function (view) {
            $("#assign-role-body").html(view);
            $("#assign-role-modal").fadeIn(200).removeClass("invisible");
        },
    });
}

/**
 * Edit the role
 *
 * @param id
 */
function editRole(id, event) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: `${baseUrl}/roles/${id}/edit`,
        success: function (view) {
            $("div#edit-role-content").html(view);

            $("div#edit-role").fadeIn(100).removeClass("invisible");
        },
    });
}

/**
 * Edit the role
 *
 * @param id
 * @param event
 */
function editUser(id, event) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: `${baseUrl}/users/${id}/edit`,
        success: function (view) {
            $("div#edit-user-content").html(view);

            $("div#edit-user").fadeIn(100).removeClass("invisible");
        },
    });
}

/**
 * Edit the program
 *
 * @param id
 */
function editProgram(id, event) {
    event.preventDefault();
    $.ajax({
        type: "GET",
        url: `${baseUrl}/programs/${id}/edit`,
        success: function (view) {
            $("div#edit-program-content").html(view);

            $("div#edit-program").fadeIn(100).removeClass("invisible");
        },
    });
}

// Create role modal
function createRole() {
    $("div#create-role").fadeIn(200).removeClass("invisible");
}

// Create role modal
function createProgram() {
    $("div#create-program").fadeIn(200).removeClass("invisible");
}

/**
 * View logs details
 * @param element
 */
function viewLogDetails(element) {
    if (element.innerText == "Details") {
        $(element).text("Hide");
        $(element).removeClass("text-blue").addClass("text-red-darker");
    } else {
        $(element).text("Details");
        $(element).removeClass("text-red-darker").addClass("text-blue");
    }
    $(element).parent().parent().next("tr").fadeToggle(100);
}

function showFilter() {
    $("#complaint-filter-button").hide();
    $("#complaint-filter").show();
}
