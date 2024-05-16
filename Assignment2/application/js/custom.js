

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

let toggleMenu = document.querySelector('.toggleMenu');
let navigation = document.querySelector('.navigation');
    toggleMenu.onclick = function() {
        navigation.classList.toggle('active');
        }