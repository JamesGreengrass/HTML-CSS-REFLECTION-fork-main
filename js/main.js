var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
let popup = document.getElementById("popup");
const btn = document.getElementById('unhide');
const settingsBtn = document.getElementById('open-settings');
const cancelSettings = document.getElementById('cancel-settings');
const continueW = document.getElementById('continue');

let open = function openPopup(){
    popup.classList.add("open-popup");
}

setTimeout(open, 3000);

let close = function closePopup(){
    popup.classList.remove("open-popup");
}

popup.addEventListener("click", close);

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
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
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

document.querySelectorAll('.cookie-btn-E').forEach( item => {
    item.addEventListener('click', () => {
       const cookieButtonD = document.querySelectorAll('.cookie-btn-D');
       const cookieButtonE = document.querySelectorAll('.cookie-btn-E');

        if(cookieButtonD.classList === 'btn-wd') {
            cookieButtonE.classList.add('btn-light');
        } else {
            cookieButtonD.classList.add('btn-light');
            cookieButtonE.classList.remove('btn-default');
            cookieButtonE.classList.remove('btn-light');
            cookieButtonE.classList.add('btn-wd');
        }
    })
})

document.querySelectorAll('.cookie-btn-D').forEach( item => {
    item.addEventListener('click', () => { 
        const cookieButtonD = document.querySelectorAll('.cookie-btn-D');
        const cookieButtonE = document.querySelectorAll('.cookie-btn-E');

        if(cookieButtonE.classList === 'btn-wd') {
            cookieButtonD.classList.add('btn-light');
        } else {
            cookieButtonE.classList.remove('btn-wd');
            cookieButtonE.classList.add('btn-light');
            cookieButtonD.classList.remove('btn-light');
        }
    })
})