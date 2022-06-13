var serverErrorMsg = 'An error occurs in Server.Webmaster is going to fix soon!';

/**
 * create update user  
 */
$('button[name="user-form-submit-button"]').on('click', function (e) {
    e.preventDefault();
    var form = $('#' + $(this).attr('form'));
    var self = $(this);

    ElementHelpers.disableElement(self);
    ElementHelpers.displayOverlay('Saving...<br/>Please wait!');
    $.ajax({
        method: form.attr('method'),
        url: form.attr('action'),
        data: new FormData(form[0]),
        processData: false,
        contentType: false,
    }).then(function (response) {
        if ('success' === response.status) {
            if (response.shouldDisplayToast === false) {
                window.location.href = response.redirectUrl;
            } else {
                ElementHelpers.customToastr(response.msg ? response.msg : 'Successfully Saved.');
                setTimeout(function () {
                    window.location.href = response.redirectUrl;
                }, 300);
            }
        } else if ('error' === response.status) {
            ElementHelpers.customToastr(response.msg ? response.msg : 'Some error occuring.', 'error');

            ElementHelpers.enableElement(self);
            ElementHelpers.hideOverlay();
        }
    }).catch(function (err, xhr, text) {
        // ElementHelpers.customToastr('Error Occur.', 'error');
        if (err.status === 422) {

            $(document).find('.ajax-text-danger').remove();

            for (var fieldName in err.responseJSON.errors) {

                var refineFieldname = fieldName.split('.')[0];

                if (typeof (err.responseJSON.errors[fieldName][0]) !== 'undefined') {
                    var fileValidationMsgWrapper = $(document).find('#' + refineFieldname).parents('div.file-selection-wrapper').siblings('div.validation-msg');
                    if (fileValidationMsgWrapper.length > 0) {
                        $('<span style="display: block;" class="text-danger ajax-text-danger">' + err.responseJSON.errors[fieldName][0] + '</span>').appendTo(fileValidationMsgWrapper);
                    } else {
                        $('<span style="display: block;" class="text-danger ajax-text-danger">' + err.responseJSON.errors[fieldName][0] + '</span>').appendTo($('[name="' + refineFieldname + '"]').parent('div'));
                    }
                }
            }

        } else if (err.status === 500) {
            ElementHelpers.customToastr(serverErrorMsg, 'error');
        }
        ElementHelpers.enableElement(self);
        ElementHelpers.hideOverlay();
        
    });

});

/**
 * delete user
 */
$('.delete-user').on('click', function (e) {
    e.preventDefault();
    var self = $(this);

    Swal.fire({
        title: "Are you sure to delete this user?",
        confirmButtonColor: '#3085d6',
        icon: 'info',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        showCancelButton: true,
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {

            ElementHelpers.disableElement(self);
            ElementHelpers.displayOverlay('Deleting...<br/>Please wait!');
            $.ajax({
                method: 'get',
                url: $(this).attr('href'),
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    _method: 'delete',
                }
            }).then(function (response) {

                if ('success' === response.status) {

                    ElementHelpers.customToastr(response.msg ? response.msg : 'Success');
                    setTimeout(function () {
                        location.reload();
                    }, 1000);

                } else if ('error' === response.status) {
                    ElementHelpers.customToastr(response.msg ? response.msg : 'Some error occuring.', 'error');
                }

                ElementHelpers.enableElement(self);
                ElementHelpers.hideOverlay();

            }).catch(function (err, xhr, text) {
                ElementHelpers.enableElement(self);
                ElementHelpers.hideOverlay();
            });

        }
        return false;
    });
    return false;

});


