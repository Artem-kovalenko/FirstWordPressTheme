// Start preloader
// window.addEventListener("load", function() {
// 	setTimeout(function() {
// 		let preloader = document.querySelector(".preloader");
// 		preloader.classList.add("hide");
// 	}, 300)
// });
// End preloader

// Start Header
let header = document.querySelector(".header");
// функция изменения шапки при скролле
window.addEventListener("scroll", function() {
	// если есть прокрутка шапка станет белой
	if (window.pageYOffset > 0) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	};
});
// навигация
$(".anchor").on("click", function(event) {
	event.preventDefault();
 // Получаем высоту от самого верха документа, до блока куда хотим переехать
 let blockToScroll = $(this).attr("href");
 $('html, body').animate(
 {
 	scrollTop: $( blockToScroll ).offset().top
 }, 
 1000
 );
});
// открыть выпадающее меню
let burger = document.querySelector(".burger");
burger.addEventListener("click", function(e) {
	event.preventDefault();
	let burger__navigation_menu = document.querySelector(".burger__navigation_menu");
	burger__navigation_menu.classList.add("open");
});
// закрыть выпадающее меню по нажатию на крестик
let burger__navigation_menu = document.querySelector(".burger__navigation_menu");
let burgerClose = document.querySelector(".burgerClose");
burgerClose.addEventListener("click", function(e) {
	event.preventDefault();
	burger__navigation_menu.classList.remove("open");
});
// закрыть выпадающее меню по нажатию на элемент навигации
let close__nav = document.querySelectorAll(".close__nav");
for (let i = 0; i < close__nav.length; i++) {
	close__nav[i].addEventListener("click", function(e) {
		event.preventDefault();
		burger__navigation_menu.classList.remove("open");
	});
};
// End Header 

// Start Hero
let scrollBottomBtn = document.querySelector("#scrollBottomBtn");

// скролл вниз по нажатию на кнопку
if (!scrollBottomBtn) {} else {
	let toBlockPart = document.querySelector("#toBlock").offsetTop;
	scrollBottomBtn.addEventListener("click", function(event) {
		event.preventDefault();
		scrollBottom();
	});
	function scrollBottom() {
		let scrollHeight = document.documentElement.scrollTop;
		if (scrollHeight < toBlockPart) {
			window.scrollBy(0, 5);
			setTimeout(scrollBottom, 0.5);
		};
	};
// глобальная функция для повторения функций внутри через заданное время
function typedAll () {
	let typedText = document.querySelector(".typedText");
	// появление первого текста
	function typedTextShow() {
		typedText.classList.add("show");
	}
	function typedTextHide() {
		typedText.classList.remove("show");
	}
	setTimeout(typedTextShow, 1000);
	setTimeout(typedTextHide, 3000);

	let typedText2 = document.querySelector(".typedText2");
	// появление второго текста
	function typedTextShow2() {
		typedText2.classList.add("show2");
	}
	function typedTextHide2() {
		typedText2.classList.remove("show2");
	}
	setTimeout(typedTextShow2, 3000);
	setTimeout(typedTextHide2, 5000);

	let typedText3 = document.querySelector(".typedText3");
	// появление третьего текста
	function typedTextShow3() {
		typedText3.classList.add("show3");
	}
	function typedTextHide3() {
		typedText3.classList.remove("show3");
	}
	setTimeout(typedTextShow3, 5000);
	setTimeout(typedTextHide3, 7000);
}
typedAll();
setInterval(typedAll, 6000);
}
// End Hero

// Start About
let about = document.querySelector(".about__main-title");
// показать заголовок 
if (!about) {} else {
	window.addEventListener("load", function() {
		about.classList.add("scrolled");	
	});
}
// набегающие цифры
$('.counter').counterUp({
	delay: 10,
	time: 1500
});
// набегающая строка прогресса 
let progress_bar_2 = document.querySelector(".progress-bar-2");
let progress_bar_3 = document.querySelector(".progress-bar-3");
let progress_bar_4 = document.querySelector(".progress-bar-4");
let progress_bar_5 = document.querySelector(".progress-bar-5");
if (!progress_bar_2 && !progress_bar_3 && !progress_bar_4 && !progress_bar_5) {} else {
	window.addEventListener("load", function() {
		progress_bar_2.classList.add("counter2");
		progress_bar_3.classList.add("counter3");
		progress_bar_4.classList.add("counter4");
		progress_bar_5.classList.add("counter5");
	});
}
// End about

// Start servises
let services__title = document.querySelector(".services__title");
let services__info__content = document.querySelectorAll(".services__info__content");
window.addEventListener("scroll", function() {
	// показать заголовок, если он присутствует на странице
	if (!services__title) {} else {
		if (window.pageYOffset > 450) {
			services__title.classList.add("scrolled");
		};
	}
	// показать показать каждый блок информации при скролле
	if (!services__info__content) {} else {
		if (window.pageYOffset > 500) {
			for (i = 0; i < services__info__content.length; i++) {
				services__info__content[i].classList.add("scrolled");
			};
		};
	}
});
// End servises

// Start creative
let creative__info = document.querySelector(".creative__info");
let slider = document.querySelector(".slider");
window.addEventListener("scroll", function() {
	// показать заголвоок
	if (!creative__info) {} else {
		if (window.pageYOffset > 1300) {
			creative__info.classList.add("scrolled");
		};
	}
	// слайдер выезжает снизу 
	if (!slider) {} else {
		if (window.pageYOffset > 1400) {
			slider.classList.add("scrolled");
		};
	}
});
$(document).ready(function(){
	$('.slider').slick({
		infinite: true,
		speed:300,
		slidesToShow: 4,
		slidesToScroll:4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});
});
// End creative

// Start portfolio
let portfolio__title = document.querySelector(".portfolio__title");
let gallery__col_1 = document.querySelector(".gallery__col-1");
let gallery__col_2 = document.querySelector(".gallery__col-2");
window.addEventListener("load", function() {
	// показать заголовок
	if (!portfolio__title) {} else{
		portfolio__title.classList.add("scrolled");
	}
	// картинки выезжают с разных сторон
	if (!gallery__col_1 && !gallery__col_2) {} else {
		gallery__col_1.classList.add("scrolled");
		gallery__col_2.classList.add("scrolled");
	}
});

// End portfolio

// Start journey
let journey__title = document.querySelector(".journey__title");
let journey__video = document.querySelector(".video__img");
window.addEventListener("scroll", function() {
	// показать заголвоок
	if (!journey__title) {} else {
		if (window.pageYOffset > 500) {
			journey__title.classList.add("scrolled");
		};
	}
	// видео выезжает снизу
	if (!journey__video) {} else {
		if (pageYOffset > 500) {
			journey__video.classList.add("scrolled");
		};
	}
});
// End journey

// Start packages
let packages__title = document.querySelector(".packages__title");
let packages__content = document.querySelector(".packages__content");
window.addEventListener("load", function() {
	// показать заголовок
	if (!packages__title) {} else {

		packages__title.classList.add("scrolled");

	}
	// блоки выезжают снизу
	if (!packages__content) {} else {

		packages__content.classList.add("scrolled");

	}
});
// End packages

// Start partners
let partners__img = document.querySelectorAll(".partners__img");
window.addEventListener("scroll", function() {
	// показать картинки
	if (!partners__img) {} else {
		if (window.pageYOffset > 500) {
			for (let i = 0; i < partners__img.length; i++) {
				partners__img[i].classList.add("scrolled")
			};
		}
	}
});
// End partners

// Start blog
let blog__title = document.querySelector(".blog__title");
window.addEventListener("scroll", function() {
	// показать заголовок
	if (!blog__title) {} else {
		if (window.pageYOffset > 200) {
			blog__title.classList.add("scrolled");
		}
	}
});
// End blog

// Start contact
let contact__form = document.querySelector(".contact_form_center");
window.addEventListener("scroll", function() {
	// форма выезжает снизу
	if (!contact__form) {} else {
		if (window.pageYOffset > 200) {
			contact__form.classList.add("scrolled");
		}
	}	
});
// End contact

// Start footer
let iconToTop = document.querySelectorAll(".top");
let iconToBottom = document.querySelectorAll(".bottom");
window.addEventListener("scroll", function() {
	// элементы, которые появятся снизу
	if (!iconToTop) {} else {
		if (window.pageYOffset > 0) {
			for (let i = 0; i < iconToTop.length; i++) {
				iconToTop[i].classList.add("scrolled");
			}
		};
	}
	// элементы, которые появятся сверху
	if (!iconToBottom) {} else {
		if (window.pageYOffset > 0) {
			for (let i = 0; i < iconToBottom.length; i++) {
				iconToBottom[i].classList.add("scrolled");
			}
		};
	}
});
// End footer


