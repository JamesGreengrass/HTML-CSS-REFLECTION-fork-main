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

let open = function openPopup(){
    popup.classList.add("open-popup");
    body.classList.add("stop-scroll");
}

setTimeout(open, 3000);

let close = function closePopup(){
    popup.classList.remove("open-popup");
    body.classList.remove("stop-scroll");
}

accept.addEventListener("click", close);
continueW.addEventListener("click", close);

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


function show() {
    document.getElementById('sidebar').classList.toggle('active');
    document.getElementById('menu-btn').classList.toggle('is-active');
    document.getElementById('main').classList.toggle('active');
}

$("#unhide").click(function() {
    $("#tab").toggle();
})

btn.addEventListener('click', function handleClick() {
    const initialText = 'Hide Detailed Preferences';

    if (btn.textContent.includes(initialText)) {
        btn.textContent = 'Show Detailed Preferences';
    } else {
        btn.textContent = initialText;
    }
})

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
        }
    });
});