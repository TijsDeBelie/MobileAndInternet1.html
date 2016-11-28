$(document).ready(function () {
			$('nav ul li a:not(:only-child)').click(function (e) {
				$(this).siblings('.submenu').slideToggle('slow');
			});
			$('.nav-mobile').click(function () {
				$('.nav-1 ul:not(.submenu)').slideToggle();
				$(".line").toggleClass("active");
			});
		});