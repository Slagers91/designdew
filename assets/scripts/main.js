
import barba from '@barba/core';
import { animationEnter, animationLeave } from './animations';
import owlCarousel from 'owl.carousel';

$ = jQuery;

barba.init({
    transitions: [
        {
            once({next}){
                animationEnter(next.container);
            },
            leave: ({current}) => animationLeave(current.container),
            enter({next}){
                console.log('entering');
                animationEnter(next.container);
            }
        }
    ]
})

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
