
const btnToggler = document.getElementById('nav-toggler');
const btnTogglerOrigContent = btnToggler.innerHTML;

const navLinks = document.getElementById('nav-links');
const navLinksOrigStyle = window.getComputedStyle(navLinks).display;


let isClick = true;
const changeIcon = '<img width="25px" src="../assets/icons/navbar/ico-xmark.png"></img>';
const toggleNavlinks = () => {

	const animationClass = isClick ? 'animate__fadeInLeft' : 'animate__jello';

	switch(isClick) {
		case true:
			navLinks.style.display = 'block';
			btnToggler.innerHTML = changeIcon;
			break;
		case false:
			navLinks.style.display = 'none';
			btnToggler.innerHTML = btnTogglerOrigContent;
			break;
	}
	navLinks.classList.remove('animate__animated', 'animate__fadeInRight', 'animate__jello');
	navLinks.classList.add('animate__animated', animationClass);
	isClick = !isClick;
}

btnToggler.addEventListener('click', toggleNavlinks);


