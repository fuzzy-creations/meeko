const nav = document.querySelector('.nav');

function fixNav(){
    if(window.scrollY >= 1000){
        nav.classList.add('nav-sticky');
    } else {
        nav.classList.remove('nav-sticky');
    }
}

window.addEventListener('scroll', fixNav);


