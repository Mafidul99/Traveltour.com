/****Packages page */
$(document).ready(function() {
    $('.bxslider988').bxSlider({
        mode: 'horizontal',
        slideWidth: 214,
        maxSlides: 10,
        slideMargin: 12,
        auto: true,
        autoDirection: 'next',
        moveSlides: 1,
        pause: 2000,
        pager: false,
        pagerType: 'full',
        autoControls: false,
        controls: true,
        autoHover: true,
        speed: 1000
    });
});

jQuery(document).ready(function(e) {
    if (jQuery(window).width() < 992) {
        jQuery(".rghtFix .enqForm .h").on("click", function() {
            jQuery(this).find('.plusMinus').toggleClass('act').parent().next('.showHide_rp').slideToggle('slow');
        });
        jQuery(".rghtFix .enqForm .plusMinus").on("click", function(e) {
            e.stopPropagation();
        });
    }
});


jQuery(document).ready(function() {
    var sticky = jQuery('.stickyForm').offset().top;
    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > sticky) {
            jQuery('.stickyForm').css('position', 'fixed');
            jQuery('.stickyForm').css('top', '75px');
        } else if (jQuery(window).scrollTop() <= sticky) {
            jQuery('.stickyForm').css('position', '');
            jQuery('.stickyForm').css('top', '');
        }
        if (jQuery('.stickyForm').offset().top + jQuery(".stickyForm").height() > jQuery(".rel-prop").offset().top) {
            jQuery('.stickyForm').css('top', -(jQuery(".stickyForm").offset().top + jQuery(".stickyForm").height() - jQuery(".rel-prop").offset().top));
        }
    });
});

jQuery('.dynFrm_arrival_date').datepicker({
    minDate: 0,
    buttonImage: '//catalog.wlimg.com/jquery-date-picker/calbtn.gif',
    buttonText: 'Click to view calendar',
    buttonImageOnly: true,
    showOn: 'button',
    changeMonth: true,
    changeYear: true,
    onClose: function(dateText, inst) {
        var endDateTextBox = jQuery('.dynFrm_departure_date');
        if (endDateTextBox.val() != '') {
            var testStartDate = new Date(dateText);
            var testEndDate = new Date(endDateTextBox.val());
            if (testStartDate > testEndDate)
                endDateTextBox.val(dateText);
        }
    },
    onSelect: function(selectedDateTime) {
        var start = jQuery(this).datepicker('getDate');
        jQuery('.dynFrm_departure_date').datepicker('option', 'minDate', new Date(start.getTime()));
        jQuery('#dynFrm_departure_date').datepicker('option', 'minDate', new Date(start.getTime()));
    }
});
jQuery('.dynFrm_departure_date').datepicker({
    minDate: 0,
    buttonImage: '//catalog.wlimg.com/jquery-date-picker/calbtn.gif',
    buttonText: 'Click to view calendar',
    buttonImageOnly: true,
    showOn: 'button',
    changeMonth: true,
    changeYear: true,
    onClose: function(dateText, inst) {
        var startDateTextBox = jQuery('.dynFrm_arrival_date');
        if (startDateTextBox.val() != '') {
            var testStartDate = new Date(startDateTextBox.val());
            var testEndDate = new Date(dateText);
            if (testStartDate > testEndDate)
                startDateTextBox.val(dateText);
        }
    },
    onSelect: function(selectedDateTime) {
        var end = jQuery(this).datepicker('getDate');
        jQuery('.dynFrm_arrival_date').datepicker('option', 'maxDate', new Date(end.getTime()));
        jQuery('#dynFrm_arrival_date').datepicker('option', 'maxDate', new Date(end.getTime()));
    }
});


jQuery(document).ready(function() {
    //jQuery('.pro-detail').css('display','none');
    jQuery(".sub-title").click(function() {
        var $this = jQuery(this);
        jQuery('.w-title').addClass('h15px', 400);
        $this.find('.w-title').removeClass('h15px', 400);
        if ($this.hasClass('on')) {
            $this.removeClass('on');
            $this.next().slideUp();
        } else {
            jQuery(".sub-title").removeClass('on');
            jQuery('.pro-detail').slideUp();
            $this.addClass('on');
            $this.next().slideDown();
        }
        if ($this.find('i').hasClass('fa-angle-up')) {
            $this.find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
        } else {
            $this.find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
        }
    });
});
(function($) {
    $(function() {
        $('[id^=detailslider]').each(function() {
            $(this).DG_Slider({
                auto: true,
                mode: 'fade',
                pager: true,
                pagerType: 'short',
                controls: true
            });
        })

        $('a[rel=gall]').fancybox()
    });
}(jQuery));

function topDestinationToggle(showHideDiv, switchTextDiv) {
    var ele = document.getElementById(showHideDiv);
    var text = document.getElementById(switchTextDiv);
    if (ele.style.display == "block") {
        ele.style.display = "none";
        text.innerHTML = "View More &#9660;";
    } else {
        ele.style.display = "block";
        text.innerHTML = "View Less &#9650;";
    }
}

$(document).ready(function() {
    $('.bxslider987').bxSlider({
        mode: 'horizontal',
        slideWidth: 214,
        maxSlides: 10,
        slideMargin: 10,
        auto: true,
        autoDirection: 'next',
        moveSlides: 1,
        pause: 2000,
        pager: false,
        pagerType: 'full',
        autoControls: false,
        controls: true,
        autoHover: true,
        speed: 1000
    });
});

var realSlider = jQuery("ul#bxlider_ins").bxSlider({
    speed: 500,
    pager: false,
    auto: true,
    slideWidth: 450,
    slideMargin: 0,
    nextText: '',
    prevText: '',
    infiniteLoop: true,
    hideControlOnEnd: true,
    onSlideBefore: function($slideElement, oldIndex, newIndex) {
        changeRealThumb(realThumbSlider, newIndex);

    }

});

var realThumbSlider = jQuery("ul#bxslider-pager").bxSlider({
    minSlides: 4,
    maxSlides: 4,
    slideWidth: 115,
    slideMargin: 5,
    moveSlides: 1,
    pager: false,
    auto: false,
    speed: 1000,
    infiniteLoop: false,
    hideControlOnEnd: false,
    nextText: '<span></span>',
    prevText: '<span></span>',
    onSlideBefore: function($slideElement, oldIndex, newIndex) {

    }
});

linkRealSliders(realSlider, realThumbSlider);

if (jQuery("#bxslider-pager li").length < 5) {
    jQuery("#bxslider-pager .bx-next").hide();
}

// sincronizza sliders realizzazioni
function linkRealSliders(bigS, thumbS) {

    jQuery("ul#bxslider-pager").on("click", "a", function(event) {
        event.preventDefault();
        var newIndex = jQuery(this).parent().attr("data-slideIndex");
        bigS.goToSlide(newIndex);
    });
}

//slider!=$thumbSlider. slider is the realslider
function changeRealThumb(slider, newIndex) {
    var $thumbS = jQuery("#bxslider-pager");
    $thumbS.find('.active').removeClass("active");
    $thumbS.find('li[data-slideIndex="' + newIndex + '"]').addClass("active");

    if (slider.getSlideCount() - newIndex >= 4) slider.goToSlide(newIndex);
    else slider.goToSlide(slider.getSlideCount() - 4);

}