// Changes the color of navbar on scrolling
const navColor=document.querySelector('.navbar');
window.addEventListener('scroll',()=>{
    if(window.scrollY>=78){
        navColor.classList.add('scrolled');
    }
})
