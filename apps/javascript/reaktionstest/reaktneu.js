"use strict"

window.addEventListener("load", () => {

    let body = document.getElementsByTagName("body");

    document.addEventListener("click", () => {
        let rand = Math.random()* 5000;
        console.log(rand);
        setTimeout(() => {
            document.body.style.backgroundColor = "grey";

        }, rand);

    }, false)

}, false)