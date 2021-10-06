function mapAdClick() {
	document.querySelector('.map-ad-info').classList.remove('displayNone');
	document.querySelector('.market-ad-info').classList.add('displayNone');
	document.querySelector('.banner-ad-info').classList.add('displayNone');
	if (document.querySelector('.map-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '0px';
		document.querySelector('.arrow-up2').style.left = '0px';
	}
	else if (document.querySelector('.map-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '0px';
		document.querySelector('.arrow-up2').style.left = '0px';
	}
}

function marketAdClick() {
	document.querySelector('.map-ad-info').classList.add('displayNone');
	document.querySelector('.market-ad-info').classList.remove('displayNone');
	document.querySelector('.banner-ad-info').classList.add('displayNone');
	if (document.querySelector('.market-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '325px';
		document.querySelector('.arrow-up2').style.left = '325px';
	}
	else if (document.querySelector('.market-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '260px';
		document.querySelector('.arrow-up2').style.left = '260px';
	}
}

function bannerAdClick() {
	document.querySelector('.map-ad-info').classList.add('displayNone');
	document.querySelector('.market-ad-info').classList.add('displayNone');
	document.querySelector('.banner-ad-info').classList.remove('displayNone');
	if (document.querySelector('.banner-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '650px';
		document.querySelector('.arrow-up2').style.left = '650px';
	}		
	else if (document.querySelector('.banner-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '520px';
		document.querySelector('.arrow-up2').style.left = '520px';
	}
}

function mobileMapADClick() {
	document.querySelector('.map-ad-info-title').style.borderBottom = '4px solid #03dac6';
	document.querySelector('.market-ad-info-title').style.border = 'none';
	document.querySelector('.banner-ad-info-title').style.border = 'none';
	document.querySelector('.map-ad-info-box').classList.remove('displayNone');
	document.querySelector('.market-ad-info-box').classList.add('displayNone');
	document.querySelector('.banner-ad-info-box').classList.add('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.remove('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.add('displayNone');
}
function mobileMarketADClick() {
	document.querySelector('.map-ad-info-title').style.border = 'none';
	document.querySelector('.market-ad-info-title').style.borderBottom = '4px solid #6200ee';
	document.querySelector('.banner-ad-info-title').style.border = 'none';
	document.querySelector('.map-ad-info-box').classList.add('displayNone');
	document.querySelector('.market-ad-info-box').classList.remove('displayNone');
	document.querySelector('.banner-ad-info-box').classList.add('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.remove('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.add('displayNone');
}
function mobileBannerADClick() {
	document.querySelector('.map-ad-info-title').style.border = 'none';
	document.querySelector('.market-ad-info-title').style.border = 'none';
	document.querySelector('.banner-ad-info-title').style.borderBottom = '4px solid #3700b3';
	document.querySelector('.map-ad-info-box').classList.add('displayNone');
	document.querySelector('.market-ad-info-box').classList.add('displayNone');
	document.querySelector('.banner-ad-info-box').classList.remove('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.remove('displayNone');
}

// $(window).resize(function() {
// 	const parent = document.querySelector(".guide-ad-info-mobile");
// 	const child = document.querySelector(".arrow-up3");
// 	const child2 = document.querySelector(".arrow-up4");

// 	if ($(window).width() <= '768') {
// 		const newTop = child.getBoundingClientRect().top - parent.getBoundingClientRect().top
// 		const newTop2 = child2.getBoundingClientRect().top - parent.getBoundingClientRect().top
// 		console.log('newTop : ', newTop);
// 		console.log('newTop2 : ', newTop2);
// 		$('.arrow-up3').css({'top': newTop-20});
// 		$('.arrow-up4').css({'top': newTop2-19});
// 	}
// });

function contactPage() {
	window.location.href = '6.html';
}
