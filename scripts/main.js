// HEADER ===================
const header = document.querySelector(".header");
const menuButton = document.querySelector(".header__menu");
const menuLinks = document.querySelectorAll(".header-nav a");

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

// SWIPER ===================
new Swiper(".sobre-slider", {
	slidesPerView: 1,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	loop: true,
});

new Swiper(".convidados-slider", {
	slidesPerView: "auto",
	spaceBetween: 32,
	centeredSlides: true,
	loop: true,
});

new Swiper(".depoimentos-slider", {
	slidesPerView: "auto",
	spaceBetween: 32,
	centeredSlides: true,
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
