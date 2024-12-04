// HEADER ===================
const header = document.querySelector(".header");
const menuButton = document.querySelector(".header__menu");
const menuLinks = document.querySelectorAll(".header-nav a");

// MENU ATIVO ===================
menuButton.addEventListener("click", () => {
	header.classList.toggle("--ativo");

	if (header.classList.contains("--ativo")) {
		document.body.classList.add("overflow-hidden");

		menuLinks.forEach((link) => {
			link.addEventListener("click", () => {
				header.classList.remove("--ativo");
				document.body.classList.remove("overflow-hidden");
			});
		});
	} else {
		document.body.classList.remove("overflow-hidden");
	}
});

// HEADER SCROLL ===================
const checaScrollHeader = () => {
	let topoPagina = window.pageYOffset || document.documentElement.scrollTop;

	topoPagina === 0 ? header.classList.remove('--scroll-down') : header.classList.add('--scroll-down');
}

window.addEventListener('scroll', () => checaScrollHeader());
window.addEventListener('DOMContentLoaded', () => checaScrollHeader());


// SWIPER ===================
new Swiper(".sobre-slider", {
	slidesPerView: 1,
	autoplay: {
		delay: 3200,
		disableOnInteraction: true,
	},
	loop: true,
});

new Swiper(".convidados-slider", {
	slidesPerView: "auto",
	spaceBetween: 32,
	centeredSlides: true,
	loop: true,
	breakpoints: {
		768: {
			spaceBetween: 45,
		},
		// 1366: {
		// 	slidesPerView: 5,
		// 	spaceBetween: 82,
		// },
	},
});

new Swiper(".depoimentos-slider", {
	slidesPerView: "auto",
	spaceBetween: 32,
	centeredSlides: true,
	breakpoints: {
		1700: {
			centeredSlides: false,

		},
	},
});

// NAVEGACAO ===================
const programacaoBtns = document.querySelectorAll("button[data-nav]");
const programacaoContents = document.querySelectorAll("ul[data-content]");

programacaoBtns.forEach((button) => {
	button.addEventListener("click", (e) => {
		let id = e.currentTarget.getAttribute("data-nav");

		programacaoBtns.forEach((each) => each.classList.remove("--ativo"));
		programacaoContents.forEach((each) => each.classList.remove("--ativo"));

		document.querySelector(`[data-nav=${id}]`).classList.add("--ativo");
		document.querySelector(`[data-content=${id}]`).classList.add("--ativo");
	});
});
