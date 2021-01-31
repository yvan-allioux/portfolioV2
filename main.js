/*js*/
"use strict";
document.addEventListener("DOMContentLoaded", initialiser);
//console.log("print dans la console");


function initialiser() {
    const aceuill = document.querySelector('header');

    if (window.scrollY > 1) {
        document.getElementById('header').classList.add('amim_header');
        let supression = document.getElementById('header');
        let supression2 = document.getElementById('body');
        supression2.removeChild(supression);
        console.log("print dans la console");
    }


    window.addEventListener('scroll', () => {
        supr_header();
    });
    aceuill.addEventListener('click', () => {
        supr_header();
    });

    function supr_header(etv) {
        // console.log("print");
        document.getElementById('header').classList.add('amim_header');
        let supression = document.getElementById('header');
        let supression2 = document.getElementById('body');
        setTimeout(function () {
            supression2.removeChild(supression);
        }, 1000);

    }
}
