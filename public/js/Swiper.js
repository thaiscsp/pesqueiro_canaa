var swiper = new Swiper(" .mySwiper", {

	slidesPerView: 4,
	spaceBetween: 30,
	slidesPerGroup: 3,
	loop: false,
	loopFillGroupWithBlank: true,

	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	}
}
)