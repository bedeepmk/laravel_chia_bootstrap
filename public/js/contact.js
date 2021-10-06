function onChange(list) {
	if ($('.contact-center-mobile').css('display') == 'none') {
		if (list == 'Map') {
			document.querySelector('#category').value = 'Map AD';
		} else if (list == 'Market') {
			document.querySelector('#category').value = 'Market AD';
		} else if (list == 'Banner') {
			document.querySelector('#category').value = 'Banner AD';
		}
	} else {
		if (list == 'Map') {
			document.querySelector('.mobile-category-input').value = 'Map AD';
		} else if (list == 'Market') {
			document.querySelector('.mobile-category-input').value = 'Market AD';
		} else if (list == 'Banner') {
			document.querySelector('.mobile-category-input').value = 'Banner AD';
		}
	}
}

window.addEventListener('click', e => {
	if (e.target.classList.contains('category-input') || e.target.classList.contains('icon')) {
		document.querySelector('.ad-select-list').classList.toggle('displayNone');
	} else if (!e.target.classList.contains('category-input') && !e.target.classList.contains('icon') && !e.target.classList.contains('check-ad')){
        document.querySelector('.ad-select-list').classList.add('displayNone');
    }
	if (e.target.classList.contains('mobile-category-input') || e.target.classList.contains('icon')) {
		document.querySelector('.mobile-ad-select-list').classList.toggle('displayNone');
	} else if (!e.target.classList.contains('mobile-category-input') && !e.target.classList.contains('icon') && !e.target.classList.contains('check-ad')){
        document.querySelector('.mobile-ad-select-list').classList.add('displayNone');
    }
});
