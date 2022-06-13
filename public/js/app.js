var ElementHelpers = {
    displayOverlay: function(msg) {
        var overlay = $('<div class="form-overlay" style="text-align: center;padding-top: 180px;top: 0;bottom: 0;left: 0;right: 0;background-color: rgba(255,255,255,0.7) !important;position: fixed;z-index: 30000;overflow: hidden;"><div class="spinner-border" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only"></span></div><br/><span style="font-size: 19px;">'+(msg?msg: 'Loading...')+'</span></div>');
        overlay.appendTo($('body'));
        $('body').addClass('hide-scroll-bar');
    },
    hideOverlay: function() {
        $('body').removeClass('hide-scroll-bar');
        $(document).find('.form-overlay').remove();
    },
    enableElement: function (element) {
        if ( $.isArray(element) ) {
            $.each(element, function(key, obj){
                obj.removeAttr('disabled');       
            });
        }

        if ( typeof(element) === 'object' ) {
        element.removeAttr('disabled');                        
        }
        return;
    },
    disableElement: function (element) {
        
        if ( $.isArray(element) ) {
            $.each(element, function(key, obj){
                console.log(">> ", obj)
            obj.attr('disabled', true);
            });
        }

        if ( typeof(element) === 'object' ) {
        element.attr('disabled', true);                  
        }
        return;
    },
    hideScrollbar: function() {
        $('body').css({overflow: "hidden !important"});
    },
    displayScrollbar: function() {
        $('body').css({overflow: "scroll !important"});
    },
    customToastr: function(msg, type = 'success') {
        toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "700",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "7000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        
        if ( type === 'success' ) {
            toastr.success(msg);
        }
        if ( type === 'info' ) {
            toastr.info(msg);
        }
        if ( type === 'error' ) {
            toastr.error(msg);
        }

    }
}

