jQuery('.fancybox').fancybox();
jQuery(document).ready(function() {
    jQuery('[data-fancybox="showZoomImage"]').fancybox({
        thumbs: {
            autoStart: true,
            axis: 'x'
        }
    });
});

jQuery(document).ready(function(e) {

    jQuery('.myTabs').tabs({
        'fxShow': true,
        'bookmarkable': false
    });

    jQuery(".tcl .plus").live("click", function() {
        jQuery(this).toggleClass('act').parent().find('ul').slideToggle('slow');
    });

    jQuery(".plusMinus").on("click", function() {
        jQuery(this).toggleClass('act').parent().next('.showHide_rp').slideToggle('slow');
    });

    if ($(window).width() < 992) {
        jQuery('.right-head .icon').click(function(event) {
            jQuery(this).toggleClass('open');
            jQuery(this).parent('.right-head').toggleClass('open');
            jQuery('.right-head .dropdown').slideToggle(300);
            event.stopPropagation()
        });
        jQuery('html, body').click(function() {
            jQuery('.right-head, .right-head .icon').removeClass('open');
            jQuery('.right-head .dropdown').slideUp(300)
        });
        jQuery('.right-head .dropdown').on('click', function(event) {
            event.stopPropagation();
        });
        $('[data-fancybox]').fancybox({
            protect: true
        });
    }

});

jQuery(window).load(function(e) {
    function triggerHtmlEvent(element, eventName) {
        var event;
        if (document.createEvent) {
            event = document.createEvent('HTMLEvents');
            event.initEvent(eventName, true, true);
            element.dispatchEvent(event);
        } else {
            event = document.createEventObject();
            event.eventType = eventName;
            element.fireEvent('on' + event.eventType, event);
        }
    }

    //<!-- Flag click handler -->//
    //var jq = jQuery.noConflict();
    $('.translation-links a').click(function(e) {
        e.preventDefault();
        var lang = $(this).data('lang');
        $('#google_translate_element select option').each(function() {
            if ($(this).text().indexOf(lang) > -1) {
                $(this).parent().val($(this).val());
                var container = document.getElementById('google_translate_element');
                var select = container.getElementsByTagName('select')[0];
                triggerHtmlEvent(select, 'change');
            }
        });
    });
});

jQuery(window).load(function() {
    var DG_T = jQuery('.fixer').offset().top;
    var WH1 = jQuery(window).innerHeight();
    var FH1 = jQuery('.fixer').outerHeight();
    var DH1 = jQuery(document).innerHeight() - (FH1 + DG_T * 2.3);
    var SH1 = WH1 + FH1;

    if (DH1 >= SH1) {
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > DG_T) {
                jQuery('.fixer').addClass('t2_fixer');
                jQuery('.top_space').show();
            } else {
                jQuery('.fixer').removeClass('t2_fixer');
                jQuery('.top_space').hide();
            }
        })
    }
});

jQuery(document).ready(function(e) {
    jQuery('.whatsappBtn').on('click', function(event) {
        jQuery('.whChatSec').toggleClass('wh-active');
        jQuery('.whTxt').toggleClass('downTooltip');
    });
    jQuery('.whtCls').on('click', function() {
        jQuery('.whChatSec').removeClass('wh-active');
    });
    if ($(window).width() > 993) {
        $.fn.scrollEnd = function(callback, timeout) {
            jQuery(this).scroll(function() {
                var $this = jQuery(this);
                if ($this.data('scrollTimeout')) {
                    clearTimeout($this.data('scrollTimeout'));
                }
                $this.data('scrollTimeout', setTimeout(callback, timeout));
            });
        };
        jQuery(window).scroll(function() {
            jQuery('.whatsappBtn').addClass('wh-close');
        });
        jQuery(window).scrollEnd(function() {
            jQuery('.whatsappBtn').removeClass('wh-close');
        }, 1800);
    };
});

jQuery(document).ready(function(e) {
    jQuery().UItoTop({
        easingType: 'easeOutQuart'
    });
});

ddsmoothmenu.arrowimages.down[1] = '../catalog.wlimg.com/templates-images/12569/12570/spacer.png';
ddsmoothmenu.arrowimages.right[1] = '../catalog.wlimg.com/templates-images/12569/12570/spacer.png';
ddsmoothmenu.arrowimages.left[1] = '../catalog.wlimg.com/templates-images/12569/12570/spacer.png';
ddsmoothmenu.init({
    mainmenuid: "smoothmenu1",
    orientation: 'h',
    classname: 'ddsmoothmenu',
    contentsource: "markup"
});


(function($) {
    jQuery.fn.menuStylePlugin = function() {
        var $ = jQuery;
        var $self = $(this);
        var scrollSpeed = 200;
        var setScroll;
        var scrollTop = $(window).scrollTop();
        var li_position = $(".ddsmoothmenu > ul > li").offset();
        var li_outher = $(".ddsmoothmenu > ul > li").outerHeight(true);
        var li_exact_postion_top = parseInt(li_position.top - scrollTop) + parseInt(li_outher);
        var window_height = parseInt($(window).height() - li_exact_postion_top - 70);
        var li_height = $self.find("li.liH").height();
        li_height = (li_height > 0) ? li_height : 42;
        var maxLength = parseInt((window_height / li_height) + 3);

        var initPlugin = function() {
            $self.find("li.liH").each(function(e) {
                if ((maxLength) - 3 < e) {
                    $(this).hide();
                }
            });
            $self.find('.menu-arrow-top').mouseover(function(e) {
                    var $elmSelf = $(this);
                    setScroll = setInterval(function() {
                        var prev = '',
                            last = '';
                        $elmSelf.closest('ul').children().each(function(e, elm) {
                            if (!$(elm).hasClass('menu-arrow') && $(elm).css('display') == 'none' && last == '') {
                                prev = elm;
                            } else if (!$(elm).hasClass('menu-arrow') && $(elm).css('display') != 'none' && prev != '') {
                                last = elm;
                            }
                        });
                        if (prev != '' && last != '') {
                            $(prev).show();
                            $(last).hide();
                        }
                    }, scrollSpeed);
                })
                .mouseleave(function() {
                    clearInterval(setScroll);
                });
            $self.find('.menu-arrow-down').mouseover(function() {
                    var $elmSelf = $(this);
                    setScroll = setInterval(function() {
                        var prev = '',
                            last = '';
                        $elmSelf.closest('ul').children().each(function(e, elm) {
                            if (!$(elm).hasClass('menu-arrow') && $(elm).css('display') != 'none' && prev == '') {
                                prev = elm;
                            } else if (!$(elm).hasClass('menu-arrow') && $(elm).css('display') == 'none' && prev != '' && last == '') {
                                last = elm;
                            }
                        });
                        if (prev != '' && last != '') {
                            $(prev).hide();
                            $(last).show();
                        }
                    }, scrollSpeed);
                })
                .mouseleave(function() {
                    clearInterval(setScroll);
                });
            var totali = $self.find("li.liH").length;
            if (totali < maxLength) {
                $self.find(".menu-arrow-top").hide();
                $self.find(".menu-arrow-down").hide();
            } else {
                $self.find(".menu-arrow-top").show();
                $self.find(".menu-arrow-down").show();
            }

            $self.on('hover', "li.liH", function() {
                $self.find("li.liH").removeClass('on');
                $self.addClass('on');
            });
        };
        initPlugin();
    };
    jQuery.fn.menuStyle = function() {
        jQuery(this).each(function() {
            jQuery(this).menuStylePlugin();
        });
    }
})(jQuery);

jQuery(function() {
    jQuery('.menu_style').menuStyle();
});

jQuery(document).on('hover', ".menu_style > li.liH", function() {
    jQuery(".menu_style > li.liH").removeClass('on');
    jQuery(this).addClass('on');
});
$(document).ready(function() {
    $(".fancy-popup").fancybox({
        toolbar: false,
        smallBtn: true,
        type: 'iframe',
        iframe: {
            preload: false,
            css: {
                maxWidth: '715px',
                maxHeight: '422px'
            }
        },
        centerOnScroll: true
    });
});

$(document).ready(function() {
    $(".fancy-popup-service").fancybox({
        toolbar: false,
        smallBtn: true,
        type: 'iframe',
        iframe: {
            preload: false,
            css: {
                maxWidth: '715px',
                maxHeight: '330px'
            }
        },
        centerOnScroll: true
    });
});