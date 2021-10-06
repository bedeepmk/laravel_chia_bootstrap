function signClick() {
    document.querySelector('.jobSeeker_sign').classList.add('selected');
    document.querySelector('.jobSeeker_register').classList.remove('selected');
    document.querySelector('.login_sign').classList.remove('displayNone');
    document.querySelector('.login_register').classList.add('displayNone');
}

function regiClick() {
    document.querySelector('.jobSeeker_register').classList.add('selected');
    document.querySelector('.jobSeeker_sign').classList.remove('selected');
    document.querySelector('.login_register').classList.remove('displayNone');
    document.querySelector('.login_sign').classList.add('displayNone');
}

function mobileSignClick() {
    document.querySelector('.mobile-login_sign').classList.remove('displayNone');
    document.querySelector('.mobile-login_register').classList.add('displayNone');
}

function mobileRegiClick() {
    document.querySelector('.mobile-login_register').classList.remove('displayNone');
    document.querySelector('.mobile-login_sign').classList.add('displayNone');
}