var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
let popup = document.getElementById("popup");
const btn = document.getElementById('unhide');
const settingsBtn = document.getElementById('open-settings');
const cancelSettings = document.getElementById('cancel-settings');
const continueW = document.getElementById('continue');
const body = document.getElementById('body');
const accept = document.getElementById('accept');
const sidebar = document.getElementById('sidebar');
const accepted = {
    name: "Cookies",
    value: "Yes",
}


function openNav() {
    document.getElementById('sidebar').classList.toggle('sidebar-active');
    document.getElementById('menu-btn').classList.toggle('is-active');
    document.getElementById('main').classList.toggle('main-active');
    document.getElementById('main-overlay').classList.toggle('active');
    $('body').css('overflow-y', 'hidden');
}

function closeNav() {
    document.getElementById('sidebar').classList.toggle('sidebar-active');
    document.getElementById('menu-btn').classList.toggle('is-active');
    document.getElementById('main').classList.toggle('main-active');
    document.getElementById('main-overlay').classList.toggle('active');
    $('body').css('overflow-y', 'auto');
}

document.getElementById('main-overlay').addEventListener('click', closeNav);

