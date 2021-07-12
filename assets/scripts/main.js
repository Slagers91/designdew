console.log('hi,barba');

// BARBA.JS
import barba from '@barba/core';
import barbaCss from '@barba/css';

// tell Barba to use the css plugin
barba.use(barbaCss);

// init Barba
// init Barba
barba.init({
    transitions: [
        {
            name: 'home',
            to: {
                namespace: ['home']
            },
            sync: true,
            leave(){},
            enter(){},
        }, {
            name: 'fade',
            to: {
                namespace: ['fade']
            },
            leave(){},
            enter(){},
        }, {
            name: 'clip',
            sync: true,
            to: {
                namespace: ['clip']
            },
            leave(){},
            enter(){}
        }, {
            name: 'with-cover',
            to: {
                namespace: ['with-cover']
            },
            leave(){},
            enter(){}
        }
    ]
});





/* RECENTE PROJECTEN HOVER */
const imgContent = document.querySelectorAll('.img-content-hover');

function showImgContent(e) {
  for(var i = 0; i < imgContent.length; i++) {
    x = e.pageX;
    y = e.pageY;
    imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
  }
};

document.addEventListener('mousemove', showImgContent);

/* OWL CAROUSEL */
var owl = $('.owl-klanten');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:40,
    autoplay:true,
    autoplayTimeout:60000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[4000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$('.owl-project').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

