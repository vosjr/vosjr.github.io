// JavaScript Document

var scrollByClick;
var api;
var w;
$(function(){	
    
    $(".info_slides").each(function(){
		var cur = $(this);
		cur.children('li').children('a').click(function(){
			var cur_li = $(this).closest('li');
			cur_li.toggleClass('active');
			cur_li.children('.text').slideToggle(300);
			cur_li.siblings().removeClass('active').children('.text').slideUp(300);
			return false;
		})
	})
	
	$('.checkbox').each(function(){
		var cur = $(this);
		var label = cur.find('label');
		var checkbox = cur.find('input[type="checkbox"]');
		if(checkbox.attr('checked') || checkbox.attr('checked') == 'checked'){
			label.addClass('active');
		}
		label.on('click', function(){
			label.toggleClass('active');
			checkbox.removeClass('error');
			if(label.hasClass('active')){
				checkbox.attr('checked', true);
			} else {
				checkbox.attr('checked', false);
			}
		})
	})
	$('.contact_form input[type="text"], .contact_form textarea').on('keyup', function(){
		$(this).removeClass('error');
	})
    
    w = $(window).width();
    if($(".fullwidthbanner").length) {
        $('.fullwidthbanner').revolution({
            delay:9000,
            startheight:363,
            startwidth:960,

            navigationType:"bullet",					//bullet, thumb, none, both		(No Thumbs In FullWidth Version !)
            navigationArrows:"none",		//nexttobullets, verticalcentered, none
            navigationStyle:"round",				//round,square,navbar
			

            touchenabled:"on",						// Enable Swipe Function : on/off
            onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

            navOffsetHorizontal:0,
            navOffsetVertical:20,

            stopAtSlide:-1,
            stopAfterLoops:-1,

            fullWidth:"on"							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
        });
    }
	
	
	
    $("#top_menu li a").click(function(){
        var href = $(this).attr('href');
        if(href.search('_anchor') != -1){
            href = href.replace('_anchor', '_marker');
            if($(href).length){
                scrollByClick = href;
                var position = $(href).offset().top;
                $('body, html').animate({
                    scrollTop: position - 100
                    }, 500, function(){
                    scrollByClick = '';		
                });
                return false;
            }
        }
    })
	
    $("#top_menu select").change(function(){
        var href = $(this).val();
        if(href.search('_anchor') != -1){
            href = href.replace('_anchor', '_marker');
            scrollByClick = href;
            var position = $(href).offset().top;
            $('body, html').animate({
                scrollTop: position
            }, 500, function(){
                scrollByClick = '';		
            });
        }
    })
    topMenu();
    footer();
    carousels();
    infoDeviders();
	
	if($(".fancy").length){
		$("a.fancy").fancybox({        
			'padding'	: 10,
			'transitionIn'	: 'fade',
			'transitionOut'	: 'fade',
			'speedIn' : 600, 
			'speedOut' : 200, 
			'overlayShow'	: true,
			'hideOnContentClick' : true,
			'hideOnOverlayClick' : true,
			'enableEscapeButton' : true
		});
	}
	if($(".fancy-video").length){
		$("a.fancy-video").click(function() {
			$.fancybox({
				'padding' : 0,
				'autoScale' : false,
				'transitionIn' : 'fade',
				'transitionOut' : 'fade',
				'title' : this.title,
				'href' : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type' : 'swf',
				'swf' : {
					'wmode' : 'transparent',
					'allowfullscreen' : 'true'
				}
			});
			return false;
		});	
	}
})


$(window).resize(function(){
    w = $(window).width();
    footer();
    carousels();
    infographBottom();	
    fixedHeader();
	blockPosition($('#main_advert .slide img'));
})

$(window).load(function(){
    infographBottom();
	blockPosition($('#main_advert .slide img'));
    $('body').css('visibility', 'visible');
	processBox();
    initProgressBarWithImage();
    progress_bars();
    easePieChart();
    trends();
    var hash = location.hash;
    if(hash) {
        $("#top_menu li a[href='" + hash + "']").click();
    }
    fixedHeader();
})


function fixedHeader(){
    if(w > 979){
        var h_bar = $('.notify-bar').outerHeight();
        var h_header = $('#header .inner').height();
        $('#header').css('height', h_header);

    } else {
        $('#header').removeAttr('style');
    }
     $(".notify-close").click(function(){
        var speed = 300;
        $(".notify-bar").slideUp(speed);
        if(w > 979) $('#header').animate({'height': '-=' + h_bar + 'px'}, speed);
        return false;
    }); 
}

function topMenu(){
    var markers	= $('[id*="_marker"]');
    $(window).scroll(function(){
        var top = $(window).scrollTop();
        if(top > 15 && w > 768) {
            $("#header").addClass('fixed');
        } else {
            $("#header").removeClass('fixed');
        }
        markers.each(function(){
            var name_marker = '#' + $(this).attr('id');
            if(scrollByClick == name_marker || !scrollByClick) {
                var position = $(this).offset().top;
                var name_anchor = name_marker.replace('_marker', '_anchor');
                if(top >= position - $("#header .inner").height()){
                    $("#top_menu li a[href='" + name_anchor + "']").closest('li').addClass('active').siblings().removeClass('active');
                    $("#top_menu select option[value='" + name_anchor + "']").attr('selected', true).siblings().attr('selected', false);
                }
            }
        })
    })
	
}

map();
function map(){
    google.load('maps', '3', {
        other_params: 'sensor=false'
    });
    google.setOnLoadCallback(map_initialize);
}

function map_initialize() {
    var myLatlngCenter = new google.maps.LatLng(-8.1121295,-34.8945983); 
    var myMarker = new google.maps.LatLng(-8.1121295,-34.8945983);


    var mapEl = document.getElementById('map');
    if(mapEl) {
        map = new google.maps.Map( mapEl, {
            zoom: 17,
            scrollwheel: false,
            center: myLatlngCenter,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var marker1 = new google.maps.Marker({
            position: myMarker,
            map: map,
            title:"Rua Professor José Brandão, 389, Boa Viagem, Recife",
            icon: '/static/img/mapMarker.png'
        });
        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(myLatlngCenter);
        });
    }
}

function footer(){
    var h = $("#footer").height();
    $("#footer").css('margin-top', -(h + parseInt($("#container").css('padding-bottom'))));
    $("#empty").css('height', h);
}

var carousel_enable;
function carousels(){
	
    $(".carousel ul").trigger("destroy", true);
    if(w > 768) {
        $(".carousel").each(function(){
            var ul = $(this).find('ul');
            var prev_arr = $(this).find('.left_arr');
            var next_arr = $(this).find('.right_arr');
			
            ul.carouFredSel({
                width	: "100%",
                align: 'left',
                prev: {
                    button: prev_arr
                },
                next: {
                    button: next_arr
                },
                auto: false
            });
			
        })	
    }
	
}

function infographBottom(){
    var h = 0;
    $('.infograph .desc').each(function(){
        var height = $(this).outerHeight();
        if(height > h) h = height;
    })
    if(h < 153) h = 153;
    $('#wrapper .infograph > sup').css('height', h);		
}

function blockPosition(obj, relative){
	obj.each(function(index, element) {
		var w = $(this).width();
		var h = $(this).height();
		
		var d = w/h;
		if(relative) {
			var parent = relative;
		} else {
			var parent = $(this).parent();
		}
		
		var border_top_p = parseInt(parent.css('border-top')) ? parseInt(parent.css('border-top')) : 0;
		var border_bottom_p = parseInt(parent.css('border-bottom')) ? parseInt(parent.css('border-bottom')) : 0;
		var border_left_p = parseInt(parent.css('border-left')) ? parseInt(parent.css('border-left')) : 0;
		var border_right_p = parseInt(parent.css('border-right')) ? parseInt(parent.css('border-right')) : 0;
		
		var w_p = parent.outerWidth() - border_left_p - border_right_p;
		var h_p = parent.outerHeight() - border_top_p - border_bottom_p;
		
		var d_p = w_p/h_p;
		
		if(d > d_p) {
			h = h_p;
			w = h*d;
			m = "0 0 0 " + (-w/2) + "px";
			l = "50%";
			t = 0;
		} else {
			w = w_p;
			h = w/d;	
			m = -h/2 + "px 0 0 0";
			t = "50%";
			l = 0;
		}
		var position = $(this).css('position');
		if(position != 'relative' && position != 'absolute') position = 'absolute';
		$(this).css({"width": w + "px", "height" : h + "px", "margin": m, "top": t, "left": l, "position": position});
	});	
}

$(document).ready(function(){ 
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    });