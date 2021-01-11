import anime from '/l5dw/node_modules/animejs/lib/anime.es.js';

document.addEventListener("DOMContentLoaded", () => {
    let waypoint = new Waypoint({
        element: document.querySelector('.img-link'),
        handler: function() {
            anime({
                targets: '.img-link',
                easing: 'easeOutExpo',
                translateX: [-100, 0],
                opactiy: [0, 1],
                delay:300,
            })
        },
        offset:'100%'
    });
})

function toggleMenu() {
    var x = document.getElementById("navSection");
    x.classList.toggle("hidden");
    var y = document.getElementById("openMenu");
    if (y.style.opacity === 100){
        y.style.opacity = 0
    }else{
        y.style.opacity = 100
    }
}

function toggleAccordion() {
    var acc = document.querySelector("#accordionContent");
    acc.classList.toggle("hidden");
}

document.querySelector("#closeNav").addEventListener("click", toggleMenu());
document.querySelector("#openMenu").addEventListener("click", toggleMenu());
document.querySelector("#accordionTab").addEventListener("click", toggleAccordion());


const config = {
    type: "carousel",
    autoplay: 10000,
    hoverpause: true,
    gap:0
}
new Glide('.glide', config).mount()

const config2 = {
    type: "slider",
    swipeThreshold: 50,
    dragThreshold: 100,
    breakpoints: {
        767: {
            perView: 1
        },
        1023: {
            perView: 2
        },
        2559: {
            perView: 3
        }
    },
    gap: 40
}
new Glide('#glide2', config2).mount()


function doubleDigit(x){
return x.toLocaleString(undefined, {minimumIntegerDigits: 2, useGrouping:false});
}

// Set the date we're counting down to
var countDownDate = new Date("Jan 11, 2021 17:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("countdown-days").innerHTML = doubleDigit(days);
    document.getElementById("countdown-hr").innerHTML = doubleDigit(hours);
    document.getElementById("countdown-min").innerHTML = doubleDigit(minutes);
    document.getElementById("countdown-sec").innerHTML = doubleDigit(seconds);

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);

document.addEventListener('DOMContentLoaded', () => {
    
    var tl = anime.timeline({
        duration: 750,
        easing: 'easeOutExpo'
    });

    tl
    .add({
        targets: '#overlay',
        translateX: -10000,
        easing: 'easeInOutQuad'
    })
    .add({
        targets: '#logo',
        translateX: [-100, 0],
        opacity: [0, 1],
        easing: 'easeInOutQuad'
    })
    .add({
        targets: '.nav-item',
        translateY: [-50, 0],
        easing: 'easeOutExpo',
        duration: 750,
        delay: anime.stagger(100),
        opacity: [0, 1]
    })
    .add({
        targets: ['#heading', '#subheading', '#cta'],
        top: '20%',
        opacity: 1,
        duration: 750,
        opacity: [0, 1]
    }, '-=750');

    setTimeout(() => {
        document.getElementById("overlay").classList.add("hidden")
    }, 2000)
});

let scrolling = false;

window.addEventListener('scroll', () => {
    const nav = document.getElementById("navSection");
    scrolling = true;
    
    setInterval(() => {
        if (scrolling) {
            scrolling = false;
            if(Math.round(window.scrollY) > 20){
                nav.classList.add("blur", "transition", "duration-300");
                nav.classList.remove("no-blur");
            }else{
                nav.classList.add("no-blur");
                nav.classList.remove("blur", "transition", "duration-300");
            }
        }
    },300);
});
