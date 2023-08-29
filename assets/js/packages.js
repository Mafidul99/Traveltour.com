window.addEventListener("DOMContentLoaded", function() {
    jQuery(document).on("click", ".showallspan", function() {
        if (jQuery(this).attr("data-target") === 'show') {
            jQuery(this).text("View Less");
            jQuery(this).attr("data-target", "hide");
            jQuery(this).closest("div").find(".spanlist").removeClass("dn");
        } else {
            jQuery(this).text("View More");
            jQuery(this).attr("data-target", "show");
            jQuery(this).closest("div").find(".spanlist").addClass("dn");
        }
    });
});

jQuery(document).on('click', '.table-link', function() {
    var dg = jQuery(this).data('url');
    jQuery(this).append('<a class="ps_c" href="' + dg + '" />');
    jQuery('a.ps_c', this)[0].click();
    jQuery('.ps_c', this).remove();
})
jQuery(document).on('click', '.table-link a', function(e) {
    e.stopPropagation();
});


var pckgSearchUrl = 'assets/catalog-scripts/resp-catalog-products-cat-tour-packages.php';
(function($) {
    function handleFileterResponse(url) {
        $.ajax({
            url: url,
            type: 'get',
            crossDomain: true,
            success: function(res) {
                console.log("Res", res);
                $("#search_filter_data", document).html(res);
            }
        });
    }
    document.addEventListener("DOMContentLoaded", function(event) {
        (function($) {
            $(document).on('submit', 'form[name=pckg_search]', function(e) {
                e.preventDefault();
                var form = $(this);
                var options = {
                    url: pckgSearchUrl,
                    data: form.serialize(),
                    type: 'post',
                    crossDomain: true,
                    beforeSend: function() {
                        $(".wideColumn", document).html('<div id="search_filter_load" class="ac pt30px"><h2 style="font-size: 16px;">Loading...</h2></div>');
                    },
                    success: handleFileterResponse
                };
                $.ajax(options);
            });
        })(jQuery);
    });
})(jQuery);