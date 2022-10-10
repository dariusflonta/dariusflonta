const menuBtn = document.getElementById('menu');
const nav = document.getElementById('navbar');

menuBtn.addEventListener('click', () => {
    nav.classList.toggle('activeNav');
    let navLink = document.querySelectorAll('.navlink');
    navLink.onclick = navClose();

    function navClose(){
        for( let i = 0; i < navLink.length; i ++){
            navLink[i].addEventListener('click',()=>{
                nav.classList.remove('activeNav');
            })
        }
    }
})

const header = document.getElementById('header');
const scrollPoint = document.getElementById('about');
window.addEventListener('scroll',()=> {
    let windowHeight = window.innerHeight;
    let revealHeader = scrollPoint.getBoundingClientRect().top;
    let revealHeaderPoint = 50;
    if(revealHeader < windowHeight - revealHeaderPoint){
        header.style.backgroundColor = "#111";
    }
    else {
        header.style.backgroundColor = "transparent";
    }
});
header.addEventListener('scroll',()=> {
    if(hero.getBoundingClientRect().top > window.innerHeight + 150){
        header.style.background = "transparent";
    }
})

let titles = document.querySelectorAll('.scroll-reveal-bottom');
let leftCols = document.querySelectorAll('.scroll-reveal-left');
let rightCols = document.querySelectorAll('.scroll-reveal-right');
window.addEventListener('scroll', () => {
    for( let i = 0; i < titles.length; i++ ){
        let windowHeight = window.innerHeight*1.2;
        let revealHeight = titles[i].getBoundingClientRect().top;
        let revealPoint = 1;
        if(revealHeight < windowHeight - revealPoint){
            titles[i].classList.add('active-reveal-bottom');
        }
    };
})
window.addEventListener('scroll', ()=>{
    for( let i = 0; i < leftCols.length; i++ ){
        let windowHeight = window.innerHeight*0.8;
        let revealHeight = leftCols[i].getBoundingClientRect().top;
        let revealPoint = 1;
        if(revealHeight < windowHeight - revealPoint){
            leftCols[i].classList.add('active-reveal-left');
            window.innerWidth = "initial";
        }
    };
})
window.addEventListener('scroll', ()=>{
    for( let i = 0; i < rightCols.length; i++ ){
        let windowHeight = window.innerHeight*0.8;
        let revealHeight = rightCols[i].getBoundingClientRect().top;
        let revealPoint = 1;
        if(revealHeight < windowHeight - revealPoint){
            rightCols[i].classList.add('active-reveal-right');
            window.innerWidth = "initial";
        }
    };
})