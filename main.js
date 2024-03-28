function openNav() {
    document.getElementById("navigation").style.width = "210px";
}

function closeNav() {
    document.getElementById("navigation").style.width = "0";
}

var LastScrollTop =0;
    navbar= document.getElementById("header");
window.addEventListener("scroll",function (){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > LastScrollTop){
        navbar.style.top="-7rem";
    } else{
        navbar.style.top="0";
    }
    LastScrollTop=scrollTop;
})



// scroll reveal

ScrollReveal({
    distance:'80px',
    duration:2000,
    delay:200,
});
ScrollReveal().reveal('.home-content, heading', { origin:'top' });
ScrollReveal().reveal('.home-img,.skills-container,.project-box,.contact from' , { origin:'bottom' });
ScrollReveal().reveal('.home-content h1,.about-img' , { origin:'left' });
ScrollReveal().reveal('.home-content p,.about-content' , { origin:'right' });

// typed js

const typed = new Typed('.multiple-text',{
    strings: ['a Web Developer' , 'an Undergraduate',],
    typeSpeed:70,
    backSpeed:70,
    backDelay:1000,
    loop:true,
});