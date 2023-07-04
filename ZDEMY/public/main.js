//change navbar styles on scroll
window.onload=function(){
    console.log("fjdsjflk");
    window.addEventListener('scroll',()=>{      //scroll event
        console.log("random2");
        document.querySelector('nav').classList.toggle
        ('window-scroll',window.scrollY>0)          //toggle class from 'nav' to 'window-scroll' whenever scroll 0px down
        })


//show/hide faq answers

const faqs=document.querySelectorAll('.faq');

faqs.forEach(faq=>{
faq.addEventListener('click',()=>{
    faq.classList.toggle('open');      /*show answers*/

   //change icon
   const icon=faq.querySelector('.faq__icon i');
   if(icon.className === 'fa-solid fa-plus'){
    icon.className = 'fa-solid fa-minus';
   }
   else{
    icon.className = 'fa-solid fa-plus';
   }
})
})


//show/hide navigation menu
// document.addEventListener("DOMContentLoaded", function() {
const menu=document.querySelector(".nav__menu");
const menuBtn=document.querySelector("#open-menu-btn");
const closeBtn=document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})

//close nav menu
const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener("click", closeNav)
}





// });




