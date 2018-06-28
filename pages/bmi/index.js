"use strict"


window.addEventListener("load", function(){

    let heightRaw = document.getElementById("height");
    let weightRaw = document.getElementById("weight");
    let cCounter = document.getElementById("cCounter");
    let bmiBtn = document.getElementById("saveBmi");
    let listElement = document.getElementById("listElement");
    let schnitt = document.getElementById("durchschnitt");
    let savedBmi = [];


    let bmiCalc = () => {
        
        //ersetzt die euro kommas durch punkte, damit JS richtig rechnen kann
        let height = heightRaw.value.replace(",", ".");
        let weight = weightRaw.value.replace(",", ".");

        //BMI Formel
        let bmiFin = weight / (height * height);
        //Ergebnis wird in SPAN ID "liveSwitch" eingetragen
        let ret = document.getElementById("liveSwitch");
        ret.innerText = Math.round((bmiFin * 10) / 10);
        return bmiFin;
    };

        //Speichert den BMI Wert in einem Array
        //savedBmi.push(bmiCalc());  
    let weightAsk = () => {    
        //Gibt das Array als Liste zurück **und errechnet den Durchschnittswert**
        /*for (let element of savedBmi){

            bmi4html = bmi4html + "<li>" + element + "</li>";
            listElement.innerHTML = bmi4html;

            schnitt.innerText = Math.round((durchschnitt * 10) / 10);

        };*/
        let weightOption = document.getElementById("weight-option");
        
        if (bmiCalc() <= 18.5)
        {
            weightOption.innerText = "Untergewicht";
        } 
        else if (bmiCalc() > 18.5 && bmiCalc() <= 25)
        {
            weightOption.innerText = "Normalgewicht";
        }
        else 
        {
            weightOption.innerText = "Übergewicht";
        };
        
    };
    bmiBtn.addEventListener("click", function(){
        console.log(bmiCalc());
    }, false);

    heightRaw.addEventListener("change", weightAsk);
    heightRaw.addEventListener("keyup", weightAsk);
    weightRaw.addEventListener("change", weightAsk);
    weightRaw.addEventListener("keyup", weightAsk);

    heightRaw.addEventListener("change", bmiCalc);
    weightRaw.addEventListener("change", bmiCalc);
    heightRaw.addEventListener("keyup", bmiCalc);
    weightRaw.addEventListener("keyup", bmiCalc);

}, false);