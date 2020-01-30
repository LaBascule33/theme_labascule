/**
 * Modal
 */

let modal = null

const openModal = function(e) {
    e.preventDefault()
    const target = document.querySelector(e.target.getAttribute('href'))
    target.style.display = null
    target.removeAttribute('aria-hidden')
    target.setAttribute('aria-modal', 'true')
    modal = target
    modal.addEventListener('click', closeModal)
    modal.querySelector('.js-modal-close').addEventListener('click', closeModal)
    modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation)
}
const closeModal = function(e) {
    if(modal === null) return
    e.preventDefault()
    modal.style.display = "none"
    modal.setAttribute('aria-hidden', 'true')
    modal.removeAttribute('aria-modal')
    modal.removeEventListener('click', closeModal)
    modal.querySelector('.js-modal-close').removeEventListener('click', closeModal)
    modal.querySelector('.js-modal-stop').removeEventListener('click', stopPropagation)
    modal = null
}

// empeche que le click dans la modal la ferme
const stopPropagation = function (e) {
    e.stopPropagation()
}

document.querySelectorAll('.js-modal').forEach(a => {
    a.addEventListener('click', openModal)
})

window.addEventListener('keydown', function (e) {
    if (e.key === "Escape" || e.key == "Esc") {
        closeModal(e)
    }
})

/**
 * CAROUSEL FAQ
 */

 var slides = document.querySelectorAll('.slide'); // Tableau de chaque div.slide
 var prev = document.querySelector('.js-modal-prev');
 var next = document.querySelector('.js-modal-next');

 var slideIndex = 0;

 
var titles = document.querySelectorAll('.js-title-faq'); // Tableau de chaque titres
var prevTitleIndex = 8;
var nextTitleIndex = 1;

 next.addEventListener('click', function () {
     slides[slideIndex].classList.remove('slide-active');
     if (slideIndex == 8){
         slideIndex = -1;
     }
     if(nextTitleIndex == 8) {
         nextTitleIndex= -1;
     }
     if(prevTitleIndex == 8) {
         prevTitleIndex= -1;
     }
     slideIndex++;
     nextTitleIndex++;
     prevTitleIndex++;
     slides[slideIndex].classList.add('slide-active');
 })

 prev.addEventListener('click', function () {
     slides[slideIndex].classList.remove('slide-active');
     if (slideIndex == 0){
         slideIndex = 9;
     }
     if (nextTitleIndex == 0){
         nextTitleIndex = 9;
     }
     if (prevTitleIndex == 0){
         prevTitleIndex = 9;
     }
     slideIndex--;
     prevTitleIndex--;
     nextTitleIndex--;
     slides[slideIndex].classList.add('slide-active');
 })

console.log(prevTitleIndex + " < " + slideIndex + " > " + nextTitleIndex );