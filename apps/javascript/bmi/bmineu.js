"use strict"

window.addEventListener("load", function(){

    let height = document.getElementById("height");
    let weight = document.getElementById("weight");
    let live = document.getElementById("liveSwitch");
    let btn = document.getElementById("saveBmi");

    btn.addEventListener("click", function(){

        let heightFin = height.value.replace(",", ".");
        let weightFin = weight.value.replace(",",".");
        let bmi = weightFin / (heightFin * heightFin);
        bmi = Math.round((bmi * 10) / 10);
        live.innerText = bmi;
        

    }, false)


}, false);