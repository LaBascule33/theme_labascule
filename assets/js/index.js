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
 var prev = document.querySelector('.prev-modal');
 var next = document.querySelector('.next-modal');

 var slideIndex = 0

 next.addEventListener('click', function () {
     slides[slideIndex].classList.remove('slide-active');
     if (slideIndex == 8){
         slideIndex = -1;
     }
     slideIndex++;
     slides[slideIndex].classList.add('slide-active');
 })