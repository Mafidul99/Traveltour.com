jQuery(document).ready(function() {
    jQuery(document).on("click", ".submit-inquiry", function(e) {
        e.stopPropagation()
        var form = jQuery(this).parent().find(".inquiry-form");
        if (form.length) {
            jQuery.ajax({
                url: form.attr("action"),
                type: form.attr("method"),
                data: form.serialize(),
                crossDomain: true,
                success: function(res) {
                    jQuery("#myModal .modal-body").html(res);
                }
            });
        }
    });
    jQuery(document).on("click", "[data-dismiss=modal]", function() {
        jQuery("#myModal .modal-body").html("<p>Loading...</p>");
        jQuery("#myModal").hide();
    });

    jQuery(document).on("submit", "form[name=static_form]", function(e) {
        e.preventDefault();
        var isValidForm = static_inq_form_validate(jQuery(this).attr("form-id"));
        if (isValidForm == undefined) {
            var form = jQuery(this);
            if (form.length) {
                jQuery.ajax({
                    url: form.attr("action"),
                    type: form.attr("method"),
                    data: form.serialize(),
                    crossDomain: true,
                    beforeSend: function() {
                        jQuery("#myModal .modal-footer").html("");
                    },
                    success: function(res) {
                        jQuery("#myModal .modal-body").html(res);
                        setTimeout(function() {
                            jQuery("#myModal", document).hide();
                            jQuery("#myModal .modal-body").html("<p>Loading...</p>");
                        }, 2000)
                    }
                });
            }
        }
    });

    var modal = jQuery("#myModal", document);

    jQuery(document).on("click", ".submit-inquiry", function() {
        modal.show();
    });

    window.onclick = function(event) {
        if (jQuery(event.target) == modal) {
            modal.css("display", "none");
        }
    }
});