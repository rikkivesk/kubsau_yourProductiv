const burger = document.querySelectorAll('.burger')[0]
const burger2 = document.querySelectorAll('.burger')[1]
const popup = document.querySelectorAll('.app-slider-popup')[0]
const popup2 = document.querySelectorAll('.app-slider-popup')[1]
const closeBut = document.querySelectorAll('.app-slider-popup-body-close')[0]
const closeBut2 = document.querySelectorAll('.app-slider-popup-body-close')[1]
const bg = document.querySelectorAll('.app-slider-popup-bg')[0]
const bg2 = document.querySelectorAll('.app-slider-popup-bg')[1]
burger.onclick = function addActive() {
    burger.classList.toggle('--active')
    popup.classList.toggle('--active')
    bg.onclick = function() {
        addActive();
    }
    closeBut.onclick = function() {
        popup.classList.remove('--active')
        burger.classList.remove('--active')
    }
}
burger2.onclick = function addActive() {
    burger2.classList.toggle('--active')
    popup2.classList.toggle('--active')
    bg2.onclick = function() {
        addActive();
    }
    closeBut2.onclick = function() {
        popup2.classList.remove('--active')
        burger2.classList.remove('--active')
    }
}