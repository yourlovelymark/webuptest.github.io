const tl = gsap.timeline({defaults: {ease: 'power3.inOut'}});



//Website starting animation//
const main = document.querySelector('.main');

gsap.set(main, {autoAlpha: 0});
tl.to(main, {duration: 2, autoAlpha: 1});



//Hamburger menu//
const line1 = document.querySelector('.line1')
const line2 = document.querySelector('.line2')
const line3 = document.querySelector('.line3')
const hamburgerButton = document.querySelector('.main__hamburger');
let isOpen = 0;
const sideMenu = document.querySelector('.main__side--menu');

const hamburgermenuOpen = () =>{
        gsap.to(line2, {duration: 0.3, autoAlpha: 0});
        gsap.to(line1, {duration: 0.3, rotate: 45, y: '+=13.5', borderColor: 'black'});
        gsap.to(line3, {duration: 0.3, rotate: -45, y: '-=13.5', borderColor: 'black'});
        gsap.to(sideMenu, {duration: 0.3, x: '-=100%'});
}
const hamburgermenuClose = () =>{
        gsap.to(line2, {duration: 0.3, autoAlpha: 1});
        gsap.to(line1, {duration: 0.3, rotate: 0, y: '-=13.5', borderColor: 'white'});
        gsap.to(line3, {duration: 0.3, rotate: 0, y: '+=13.5', borderColor: 'white'});
        gsap.to(sideMenu, {duration: 0.3, x: '+=100%'});
}

const hamMenuAnim = () =>{
    if(isOpen===0){
        hamburgermenuOpen()
        isOpen = isOpen+1;
    }else if(isOpen===1){
        hamburgermenuClose()
        isOpen = isOpen-1;
    }
}
hamburgerButton.addEventListener('click', hamMenuAnim)


