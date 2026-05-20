import './bootstrap';
import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';
import ClassNames from 'embla-carousel-class-names';
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion) {
	const revealItems = Array.from(document.querySelectorAll('[data-reveal]'));

	if (revealItems.length > 0) {
		const observer = new IntersectionObserver(
			(entries, observerInstance) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						observerInstance.unobserve(entry.target);
					}
				});
			},
			{
				threshold: 0.14,
				rootMargin: '0px 0px -8% 0px',
			},
		);

		revealItems.forEach((item, index) => {
			item.style.setProperty('--reveal-delay', `${Math.min(index * 60, 360)}ms`);
			observer.observe(item);
		});
	}
}

const navToggle = document.querySelector('[data-nav-toggle]');
const navPanel = document.querySelector('[data-nav-panel]');

if (navToggle && navPanel) {
	const closeNav = () => {
		navToggle.setAttribute('aria-expanded', 'false');
		navPanel.classList.remove('is-open');
	};

	navToggle.addEventListener('click', () => {
		const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
		navToggle.setAttribute('aria-expanded', String(!isOpen));
		navPanel.classList.toggle('is-open', !isOpen);
	});

	navPanel.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			if (window.innerWidth < 769) {
				closeNav();
			}
		});
	});

	window.addEventListener('resize', () => {
		if (window.innerWidth >= 769) {
			closeNav();
		}
	});
}

const sliderRoots = Array.from(document.querySelectorAll('[data-slider]'));

sliderRoots.forEach((sliderRoot) => {
	const track = sliderRoot.querySelector('[data-slider-track]');
	const prevButton = sliderRoot.querySelector('[data-slider-prev]');
	const nextButton = sliderRoot.querySelector('[data-slider-next]');

	if (!track) {
		return;
	}

	const slides = Array.from(track.children);

	if (slides.length === 0) {
		return;
	}

	const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const updateControls = () => {
		if (prevButton) {
			prevButton.disabled = track.scrollLeft <= 4;
		}

		if (nextButton) {
			const maxScrollLeft = track.scrollWidth - track.clientWidth - 4;
			nextButton.disabled = track.scrollLeft >= maxScrollLeft;
		}
	};

	const activateClosestSlide = () => {
		const trackCenter = track.scrollLeft + track.clientWidth / 2;

		slides.forEach((slide) => {
			const slideCenter = slide.offsetLeft + slide.clientWidth / 2;
			slide.classList.toggle('is-active', Math.abs(slideCenter - trackCenter) < slide.clientWidth * 0.55);
		});

		updateControls();
	};

	const scrollBySlide = (direction) => {
		const firstSlide = slides[0];
		const gap = parseFloat(getComputedStyle(track).gap || '0');
		const distance = firstSlide ? firstSlide.getBoundingClientRect().width + gap : track.clientWidth;

		track.scrollBy({
			left: distance * direction,
			behavior: prefersReducedMotion ? 'auto' : 'smooth',
		});
	};

	prevButton?.addEventListener('click', () => scrollBySlide(-1));
	nextButton?.addEventListener('click', () => scrollBySlide(1));
	track.addEventListener('scroll', activateClosestSlide, { passive: true });
	window.addEventListener('resize', activateClosestSlide);

	activateClosestSlide();
	window.requestAnimationFrame(activateClosestSlide);

	// Auto-scroll logic
	let autoScrollInterval = setInterval(() => {
		const maxScrollLeft = track.scrollWidth - track.clientWidth - 4;
		if (track.scrollLeft >= maxScrollLeft) {
			track.scrollTo({ left: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
		} else {
			scrollBySlide(1);
		}
	}, 3000);

	// Pause auto-scroll on hover
	sliderRoot.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
	sliderRoot.addEventListener('mouseleave', () => {
		autoScrollInterval = setInterval(() => {
			const maxScrollLeft = track.scrollWidth - track.clientWidth - 4;
			if (track.scrollLeft >= maxScrollLeft) {
				track.scrollTo({ left: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
			} else {
				scrollBySlide(1);
			}
		}, 3000);
	});
});

// Scale Slider Logic
const scaleSliders = Array.from(document.querySelectorAll('[data-scale-slider]'));
scaleSliders.forEach((sliderRoot) => {
	const track = sliderRoot.querySelector('[data-scale-track]');
	if (!track) return;
	const originalSlides = Array.from(track.querySelectorAll('[data-scale-slide]'));
	if (originalSlides.length === 0) return;
	
	// Clone slides for a seamless infinite scroll effect
	originalSlides.forEach(slide => track.appendChild(slide.cloneNode(true)));
	originalSlides.forEach(slide => track.appendChild(slide.cloneNode(true)));
	
	// Refresh slides array with clones
	const slides = Array.from(track.querySelectorAll('[data-scale-slide]'));
	const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const activateClosestSlide = () => {
		const trackCenter = track.scrollLeft + track.clientWidth / 2;
		slides.forEach((slide) => {
			const slideCenter = slide.offsetLeft + slide.clientWidth / 2;
			const content = slide.querySelector('[data-scale-content]');
			const text = slide.querySelector('[data-scale-text]');
			if (Math.abs(slideCenter - trackCenter) < slide.clientWidth * 0.6) {
				content.classList.remove('scale-[0.75]', 'opacity-40');
				content.classList.add('scale-100', 'opacity-100');
				if (text) {
					text.classList.remove('opacity-0', 'translate-y-4');
					text.classList.add('opacity-100', 'translate-y-0');
				}
			} else {
				content.classList.add('scale-[0.75]', 'opacity-40');
				content.classList.remove('scale-100', 'opacity-100');
				if (text) {
					text.classList.add('opacity-0', 'translate-y-4');
					text.classList.remove('opacity-100', 'translate-y-0');
				}
			}
		});
	};

	track.addEventListener('scroll', activateClosestSlide, { passive: true });
	window.addEventListener('resize', activateClosestSlide);
	activateClosestSlide();
	window.requestAnimationFrame(activateClosestSlide);

	const scrollBySlide = (direction) => {
		const firstSlide = slides[0];
		const gap = parseFloat(getComputedStyle(track).gap || '0');
		const distance = firstSlide ? firstSlide.getBoundingClientRect().width + gap : track.clientWidth;
		track.scrollBy({ left: distance * direction, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
	};

	// Seamless Infinite Scroll Auto-scroll logic
	const autoScrollSpeed = 1800; // Increased speed
	let autoScrollInterval = setInterval(() => {
		const gap = parseFloat(getComputedStyle(track).gap || '0');
		const setWidth = originalSlides.length * (originalSlides[0].getBoundingClientRect().width + gap);
		const maxScrollLeft = track.scrollWidth - track.clientWidth;

		if (track.scrollLeft >= maxScrollLeft - 20) {
			// Silently jump back one set
			track.scrollTo({ left: track.scrollLeft - setWidth, behavior: 'auto' });
			requestAnimationFrame(() => {
				scrollBySlide(1);
			});
		} else {
			scrollBySlide(1);
		}
	}, autoScrollSpeed);

	sliderRoot.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
	sliderRoot.addEventListener('mouseleave', () => {
		autoScrollInterval = setInterval(() => {
			const gap = parseFloat(getComputedStyle(track).gap || '0');
			const setWidth = originalSlides.length * (originalSlides[0].getBoundingClientRect().width + gap);
			const maxScrollLeft = track.scrollWidth - track.clientWidth;

			if (track.scrollLeft >= maxScrollLeft - 20) {
				track.scrollTo({ left: track.scrollLeft - setWidth, behavior: 'auto' });
				requestAnimationFrame(() => {
					scrollBySlide(1);
				});
			} else {
				scrollBySlide(1);
			}
		}, autoScrollSpeed);
	});
});

// Header scroll effect
document.addEventListener('DOMContentLoaded', () => {
	const header = document.querySelector('.site-header');
	const hero = document.querySelector('.hero-section');
	const navToggle = document.querySelector('[data-nav-toggle]');
	const navPanel = document.querySelector('[data-nav-panel]');
	
	if (header) {
		const handleScroll = () => {
			const isMobileMenuOpen = navPanel && navPanel.classList.contains('is-open');
			if (isMobileMenuOpen) {
				header.classList.add('is-scrolled');
				return;
			}

			if (hero) {
				if (window.scrollY > 40) {
					header.classList.add('is-scrolled');
				} else {
					header.classList.remove('is-scrolled');
				}
			} else {
				header.classList.add('is-scrolled');
			}
		};

		window.addEventListener('scroll', handleScroll, { passive: true });
		handleScroll(); // Call on init

		// Sync with mobile nav toggle clicks
		if (navToggle) {
			navToggle.addEventListener('click', () => {
				setTimeout(handleScroll, 10);
			});
		}
	}
});
