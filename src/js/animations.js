import TweenMax from 'gsap/src/uncompressed/TweenMax';
import TimelineMax from 'gsap/src/uncompressed/TimelineMax';
import ScrollMagic from 'scrollmagic/scrollmagic/uncompressed/ScrollMagic';
import 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';

window.addEventListener('load', () => {

	let controller = new ScrollMagic.Controller();

	//сцена 'Обо мне'
	let aboutTween = new TimelineMax();
	aboutTween.fromTo('.home__about-photo', 1, {x: -200, opacity: 0}, {x: 0, opacity: 1})
	aboutTween.fromTo('.home__about-text', 1, {y: 200, opacity: 0}, {y: 0, opacity: 1}, '-=1');
	
	let aboutScene = new ScrollMagic.Scene({
		triggerElement: '.home__about',
		reverse: false
	})
	.addTo(controller)
	.setTween(aboutTween);

	//сцена 'Контакты'
	let contactsTween = new TimelineMax();
	contactsTween.staggerFromTo('.contacts-info', 0.5, {x: -200, opacity: 0}, { x: 0, opacity: 1}, 0.25);
	contactsTween.fromTo('.contacts-form', 1, {y: 200, opacity: 0}, {y: 0, opacity: 1}, '-=1');

	let contactScene = new ScrollMagic.Scene({
		triggerElement: '.home__contacts',
		reverse: false
	})
	.addTo(controller)
	.setTween(contactsTween);


});

