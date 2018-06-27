"use strict"

window.addEventListener("load", function(){
    let switchIf = 0;
    let startTime = 0;
    let endTime = 0;
    let hallOfFame = [];
    let hov = document.getElementById("hallOfFame");
    let reactfield = document.getElementById("reactfield");

    let bestenliste = function(){
        hov.innerHTML = '';
        if(hallOfFame.length >= 10){
            hallOfFame.pop();
        }
        for (let element of hallOfFame) {
            let li = document.createElement("li");
            li.innerText = "Platz: " + element;
            hov.appendChild(li);
            console.log(element);
        };
    };

    reactfield.addEventListener("click", function(){
        let randomTime = Math.random() * 5000;

        if (switchIf == 0){
            setTimeout(function(){
                document.body.style.backgroundColor = "gray";
                startTime = Date.now();
                console.log("Startzeit war: " + randomTime);
            }, randomTime);
            switchIf = 1;
        } else {
            document.body.style.backgroundColor = "white";
            let endTime = (Date.now() - startTime) / 1000;
            alert("Deine Reaktionszeit war " + endTime + "Sekunden");
            hallOfFame.push(endTime);
            switchIf = 0;
            hallOfFame.sort();
            bestenliste();
        }
    }, false);
}, false);