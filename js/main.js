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

function checkCookies() {
    
    let open = function openPopup(){
        popup.classList.add("open-popup");
        $('body').css('overflow-y', 'hidden');
    }
    
    if (window.localStorage.getItem('Cookie') !== '{"name":"Cookies","value":"Yes"}') {
        setTimeout(open, 3000);
    }

    let close = function closePopup(){
        popup.classList.remove("open-popup");
        $('body').css('overflow-y', "");
        window.localStorage.setItem('Cookie', JSON.stringify(accepted));
    }

    accept.addEventListener("click", close);
    continueW.addEventListener("click", close);
}

checkCookies();

settingsBtn.addEventListener('click', () => {
    const settings = document.getElementById('settings');

    if(settings.style.visibility === 'visible') {
        settings.style.visibility = 'hidden';
    } else {
        settings.style.visibility = 'visible';
        $('body').css('overflow', 'hidden');
    }
})

cancelSettings.addEventListener('click', () => {
    const settings = document.getElementById('settings');

    if(settings.style.visibility === 'hidden') {
        settings.style.visbility = 'visible';
    } else {
        settings.style.visibility = 'hidden';
        $('body').css('overflow', 'auto');
        popup.classList.add("open-popup");
    }
})

continueW.addEventListener('click', () => {
    const settings = document.getElementById('settings');

    if(settings.style.visibility === 'visible') {
        settings.style.visibility = 'hidden';
        $('body').css('overflow', 'auto');
    } else {
        settings.style.visibility = 'visible';
        $('body').css('overflow', 'auto');
    }
})

$(window).scroll(function(event){
    didScroll = true;
});

function hasScrolled() {
    var st = $(this).scrollTop();
    

    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    if (st > lastScrollTop && st > navbarHeight){
        $('header').removeClass('animate__slideInDown').addClass('animate__slideOutUp');
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('animate__slideOutUp').addClass('animate__slideInDown');
        }
    }
    
    lastScrollTop = st;
}

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);


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

btn.addEventListener('click', function handleClick() {
    const initialText = 'Hide Detailed Preferences';

    if (btn.textContent.includes(initialText)) {
        btn.textContent = 'Show Detailed Preferences';
    } else {
        btn.textContent = initialText;
    }
})

$('#unhide').click(function () {
    $('#tab').toggle()
})

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        loop: true,
        autoplayHoverPause: true,
        autoplaySpeed: 250,
        slideTransition: `ease 0s`,
        responsive: {
            0: {
                items: 1
            },
        }
    });
    
});

