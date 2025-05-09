/************* Main Js File ************************
	Template Name: THEME_NAME
	Author: Netizens Technologies
	Version: 1.0
	Copyright 2023
	Please ❤ this if you like it!
*************************************************************/
/*------------------------------------------------------------------------------------ 
	=============
	= JS INDEX  =
	=============
	01 - PRELOAD JS
	02 - SCROLL TOP JS
	03 - HEADER JS
	04 - STICKY HEADER JS
	05 - PRICING JS
	06 - HOME PAGE SLIDER JS
	07 - FORM VALIDATION JS
	08 - COMING SOON COUNT-DOWN JS
	09 - ANNIMATION JS
	10 - PRELOADR JS
	11 - FLOATING IMG JS
-------------------------------------------------------------------------------------*/

/*=====================================================================
01 - PRELOAD JS
=====================================================================*/
$(window).on("load", function () {
	$(".preloader").fadeOut("slow");
	$("body").removeClass("no-scroll-y");
});


/*=====================================================================
02 - SCROLL TOP JS
=====================================================================*/
$(document).ready(function () {
	var btn = $("#button");
	$(window).scroll(function () {
		if ($(window).scrollTop() > 700) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});
	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "300");
	});
	$('header ul.sub-menu, footer ul.sub-menu').addClass('dropdown-menu');
	$('header ul.sub-menu.dropdown-menu, footer ul.sub-menu.dropdown-menu').parent().addClass('dropdown');
	$('header ul.sub-menu.dropdown-menu, footer ul.sub-menu.dropdown-menu').parent().addClass('dropdown-toggle');
	$('header .dropdown-toggle > a::after, footer .dropdown-toggle > a::after').css('content', '');
	$('header ul.sub-menu.dropdown-menu > li > a, footer ul.sub-menu.dropdown-menu > li > a').addClass('dropdown-item');
	$('footer .dropdown > a').attr("href", "javascript:void(0);");

	$('header .sub-menu.dropdown-menu, footer .sub-menu.dropdown-menu').parent().on('click', function() {
		$("header .sub-menu.dropdown-menu, footer .sub-menu.dropdown-menu").toggleClass('show');
		$(this).toggleClass("activeDropdown")
	});
});
$(document).mouseup(function(e) 
{
	var container = $("footer .footer-wrapper .footer-block .footer-content ul li.dropdown");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
		container.removeClass("activeDropdown");
    }
});

$(document).on('scroll', function () {
	var container = $("footer .footer-wrapper .footer-block .footer-content ul li.dropdown");
	container.removeClass("activeDropdown");
});

/*=====================================================================
03 - HEADER JS
=====================================================================*/
$(document).ready(function () {
    /* Menu Open Background Blur */
    $(".hamburger").click(function () {
        $("header").addClass("active");
        $("body").addClass("no-scroll-y");
    });

    $(".closeBtn").click(function () {
        $("header").removeClass("active");
        $("body").removeClass("no-scroll-y");
        $("header .dropdown ul").slideUp().removeClass("active");
    });

    $('.tabActive li a:not(.dropdown-toggle)').click(function() {
        // Check if the clicked link has an href
        if ($(this).attr('href')) {
            $("body").removeClass("no-scroll-y");
            $("header").removeClass("active");
        } else {
            $("header").addClass("active"); // Add active class if no href
        }
    });

    /* Active Menu */
    $(document).ready(function () {
        $(".tabActive a").click(function () {
            $(".tabActive a").removeClass("active");
            $(this).addClass("active");
        });

        $(function () {
            var path = window.location.href;
            var pop = [];
            $('.tabActive a').each(function () {
                var anchor = $(this).prop('href').split("/").pop();
                pop.push(anchor);
                var href = this.href.replace(".html", "").replace(".php", "");
                var navPath = path.replace(".html", "").replace(".php", "");
                if (href === navPath) {
                    $(this).addClass('active');
                }
            });
            var anchor = $('.tabActive a[href*="' + pop[0] + '"]');
            if (path.split('/').pop() == "") {
                $(anchor).addClass("active");
            }
        });
    });
});



$(window).on("resize", function () {
	$("header").removeClass("active");
	$("body").removeClass("no-scroll-y");
	var win = $(this);
	if (win.width() >= 991) {
		$("body").removeClass("overley");
	} else {
		$(".navbar-toggler").addClass("collapsed");
		$(".navbar-collapse").removeClass("show");
		$("body").removeClass("overley");
		$(".navbar-toggler").attr("aria-expanded", "false");
		$(".navbar").removeClass("active-navbar");
	}
});


/*=====================================================================
04 - STICKY HEADER JS
=====================================================================*/
$(document).ready(function () {
    headerFixed();
});
$(document).on('scroll', function () {
    headerFixed();
});
function headerFixed() {
    if ($(window).scrollTop() >= 300) {
        $('header').addClass('stickyMenu');
	} else {
        $('header').removeClass('stickyMenu');
    }
    if ($(window).scrollTop() >= 700) {
        $('.stickyMenu').addClass('menuActive');
    } else {
        $('.stickyMenu').removeClass('menuActive');
    }
}


/*=====================================================================
05 - PRICING JS
=====================================================================*/
$(document).ready(function () {
	$("body").on("click", ".pricing_wrapper .pricing_block", function () {
		$(".pricing_wrapper .pricing_block").removeClass("active");
		$(this).addClass("active");
	});
});


/*=====================================================================
06 - HOME PAGE SLIDER JS
=====================================================================*/
if ($(".ClientSwiper").length == "1") {
	var swiper = new Swiper(".ClientSwiper", {
		loop: true,
		spaceBetween: 24,
		slidesPerView: 1,
		navigation: {
			nextEl: ".ClientSwiper .next",
			prevEl: ".ClientSwiper .prev",
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: true,
		},
	});
	$(".ClientSwiper").mouseenter(function () {
		document.querySelector('.ClientSwiper').swiper.autoplay.stop();
		console.log('slider stopped');
	});

	$(".ClientSwiper").mouseleave(function () {
		document.querySelector('.ClientSwiper').swiper.autoplay.start();
		console.log('slider started again');
	});
}
if ($(".BlogSwiper").length == "1") {
	var swiper = new Swiper(".BlogSwiper", {
		loop: true,
		spaceBetween: 24,
		slidesPerView: 2,
		navigation: {
			nextEl: ".blog-section .next",
			prevEl: ".blog-section .prev",
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 15,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: true,
		},
	});
	$(".BlogSwiper").mouseenter(function () {
		document.querySelector('.BlogSwiper').swiper.autoplay.stop();
		console.log('slider stopped');
	});

	$(".BlogSwiper").mouseleave(function () {
		document.querySelector('.BlogSwiper').swiper.autoplay.start();
		console.log('slider started again');
	});
}
if ($(".myTeam").length == "1") {
	var swiper = new Swiper(".myTeam", {
		loop: true,
		spaceBetween: 24,
		slidesPerView: 4,
		navigation: {
			nextEl: ".myTeam .next",
			prevEl: ".myTeam .prev",
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 15,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
			1400: {
				slidesPerView: 4,
				spaceBetween: 24,
			},
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: true,
		},
	});
	$(".myTeam").mouseenter(function () {
		document.querySelector('.myTeam').swiper.autoplay.stop();
		console.log('slider stopped');
	});

	$(".myTeam").mouseleave(function () {
		document.querySelector('.myTeam').swiper.autoplay.start();
		console.log('slider started again');
	});
}


/*=====================================================================
07 - FORM VALIDATION JS
=====================================================================*/
(() => {
	'use strict'
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	const forms = document.querySelectorAll('.needs-validation')

	// Loop over them and prevent submission
	Array.from(forms).forEach(form => {
		form.addEventListener('submit', event => {
			if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
			}

			form.classList.add('was-validated')
		}, false)
	})
})()


/*=====================================================================
08 - COMING SOON COUNT-DOWN JS
=====================================================================*/
if ($(".comming-wrapper").length > 0) {
    function updateTimer() {
        var cmsdate = $('#coming_soon_date').val();
        var endTime = new Date(cmsdate);
        endTime = (Date.parse(endTime) / 1000);

        var now = new Date();
        now = (Date.parse(now) / 1000);

        var timeLeft = endTime - now;

        if (timeLeft <= 0) {
            $("#days, #hours, #minutes, #seconds").html("00");
            return; // Stop the timer when the countdown ends
        }

        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft % 86400) / 3600);
        var minutes = Math.floor((timeLeft % 3600) / 60);
        var seconds = Math.floor(timeLeft % 60);

        // Add leading zero if needed
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        $("#days").html(days);
        $("#hours").html(hours);
        $("#minutes").html(minutes);
        $("#seconds").html(seconds);
    }

    // Update timer every second
    updateTimer();
    setInterval(updateTimer, 1000);
}

/*
=================================================================
09 - ANNIMATION JS
=================================================================
*/
$(document).ready(function () {
	new WOW().init();
});


/*
=================================================================
10 - PRELOADR JS
=================================================================
*/

$(window).on('load', function () {
	$("body").removeClass("hidden");
	$(".page_loader").fadeOut("slow");
});


/*
=================================================================
11 - FLOATING IMG JS
=================================================================
*/
// const floatingImages = document.querySelectorAll('.floatingImage');

// document.addEventListener('mousemove', (e) => {
//     const mouseX = e.clientX;
//     const mouseY = e.clientY;

//     floatingImages.forEach((image) => {
//         // Calculate percentage offsets
//         const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
//         const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

//         // Apply the transform
//         image.style.transform = `translate(${offsetX * 20}px, ${offsetY * 20}px)`;
//     });
// });
$(document).ready(function () {
	$('.stars a').on('click', function() {
		$('.stars .star-rate, .stars a').removeClass('active');	
		$(this).addClass('active');
		$('.stars .star-rate').addClass('active');
	});
	$('#pills-weekly-tab').addClass('active');
	$('#pills-weekly').addClass('active show');
});
var pricingSwiperswiper = new Swiper(".pricingSwiper", {
	slidesPerView: 3,
	spaceBetween: 30,
	scrollbar: {
	  el: ".pricingSwiper .swiper-scrollbar",
	  hide: false,
	  draggable: true,
	},
	observer: true,
	observeParents: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        2000: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
    },
});

/*
=================================================================
12 - Blog Page: LOAD MORE BUTTON JS
=================================================================
*/ 
$('.hidden').css('display', 'none');

$('#load-more').on('click', function(e) {
    e.preventDefault();

    let count = 0;

    $('.hidden').filter(function() {
        return $(this).css('display') === 'none'; 
    }).each(function(index) {
        if (count < 3) {
            $(this).css('display', 'block');
            count++;
        }
    });

    if ($('.hidden').filter(function() {
        return $(this).css('display') === 'none'; 
    }).length === 0) {
        $('#load-more').hide();
    }
});
/*
=================================================================
12 - Blog Page: LOAD MORE BUTTON JS
=================================================================
*/ 

/*
=================================================================
13 - Gallery Page: LOAD MORE BUTTON JS
=================================================================
*/ 

$('.gallery-hidden').css('display', 'none');

$('#gallery-load-more').on('click', function(e) {
    e.preventDefault();

    let count = 0;

    $('.gallery-hidden').filter(function() {
        return $(this).css('display') === 'none'; 
    }).each(function(index) {
        if (count < 3) {
            $(this).css('display', 'block');
            count++;
        }
    });

    if ($('.gallery-hidden').filter(function() {
        return $(this).css('display') === 'none'; 
    }).length === 0) {
        $('#gallery-load-more').hide();
    }
});

/*
=================================================================
13 - Gallery Page: LOAD MORE BUTTON JS
=================================================================
*/
