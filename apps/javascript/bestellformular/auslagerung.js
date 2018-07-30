"use strict"

window.addEventListener("load", function(){
    let countDown = document.getElementById("countDown");
    let countUp = document.getElementById("countUp");
    let counter = document.getElementById("counter");
    let counterVal = counter.innerText;
    console.log(counterVal);

    
    countUp.addEventListener("click", function(){
        
        if (counterVal >= 10){
            alert("Bei hohen Bestellmengen, geben Sie bitte dem Personal bescheid");
        } else {
            counterVal++;
            counter.innerText = counterVal;
        };

    }, false);

    countDown.addEventListener("click", function(){
        
        if (counterVal == 0){
            alert("Sie haben keine Bestellung");
        } else {
            counterVal--;
            counter.innerText = counterVal;
        };

    }, false);

    let pmCounter = function(){

    }

}, false);

"use strict"

window.addEventListener("load", function(){

    function rand(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    let theId = "";
    let plusMinusCtn = function(vz){

        let divCr = function(cla, attrib){

            let divEle = document.createElement("div");
            divEle.setAttribute(cla , attrib) ;
            return divEle;
        };
        let btn = function(idOf, tNode, theWay){
            theId = idOf.substring(0,4).toLowerCase()+theWay+rand(1,20).toString();
            let btnMinus = document.createElement("button");
            let btnText = document.createTextNode(tNode);
            btnMinus.setAttribute("type", "button");
            btnMinus.setAttribute("class", "btn btn-outline-light btn-sm");
            btnMinus.setAttribute("id", theId);
            btnMinus.append(btnText);
            return btnMinus;
        };

        let btnMin = btn(vz, "-","down");
        let btnPl = btn(vz, "+", "up");

        let drinkCtn = document.createElement("span");
        let drinkCtnText = document.createTextNode("0");
        drinkCtn.setAttribute("id", theId + "counter");

        let divCont = divCr("class", "container");
        let divRow = divCr("class", "row");
        let col1 = divCr("class", "col-sm");
        let col2 = divCr("class", "col-sm");
        let col3 = divCr("class", "col-sm");

        divCont.append(divRow);

        divRow.append(col1);
        divRow.append(col2);
        divRow.append(col3);

        col1.append(btnMin);

        col2.append(drinkCtn);  
        drinkCtn.append(drinkCtnText);

        col3.append(btnPl);

        return divCont;
    };

    let table = document.getElementById("drinksList");

    let zeile = function(thingName, price){
        //theId = idOf.substring(0,4).toLowerCase()+theWay+rand(1,20);
        let tr = document.createElement("tr");
        let redwine = document.createElement('th');
        redwine.setAttribute('scope',  "row");
        redwine.innerText = "4";

        let redwinetd1 = document.createElement('td');
        redwinetd1.innerText = thingName;

        let redwinetd2 = document.createElement('td');
        redwinetd2.innerText = price;

        let redwinetd3 = document.createElement('td');
        redwinetd3.append(plusMinusCtn(thingName));

        tr.append(redwine);
        tr.append(redwinetd1);
        tr.append(redwinetd2);
        tr.append(redwinetd3);
        table.append(tr);
        };

    /*
    let countDown = document.getElementById("countDown");
    let countUp = document.getElementById("countUp");
    let counter = document.getElementById("counter");
    let counterVal = counter.innerText;
    console.log(counterVal);
    
    countUp.addEventListener("click", function(){
        
        if (counterVal >= 10){
            alert("Bei hohen Bestellmengen, geben Sie bitte dem Personal bescheid");
        } else {
            counterVal++;
            counter.innerText = counterVal;
        };

    }, false);

    countDown.addEventListener("click", function(){
        
        if (counterVal == 0){
            alert("Sie haben keine Bestellung");
        } else {
            counterVal--;
            counter.innerText = counterVal;
        };

    }, false);
    */
    
    zeile("Weißer Spritzer (0,5ml)", "5,20");
    zeile("Bier (0,5ml)", "3,80");
    zeile("Rotwein (0,2ml)", "2,--");
    zeile("Weißwein (0,2ml)", "2,--");
    zeile("Cider (0,4ml)", "4,80");
    zeile("Pitcher Bier", "12,80");

    //console.log(document.children);
    let cDown = theId + "down";
    let cUp = theId + "up";
    let ctnId = theId + "counter";
    let countDown = document.getElementById(cDown);
    let countUp = document.getElementById(cUp);
    let counter = document.getElementById(ctnId);
    //console.log(countUp);



}, false);
/*
        let btnPlus = document.createElement("button");
        let btnPlusText = document.createTextNode("+");
        btnPlus.setAttribute("type", "button");
        btnPlus.setAttribute("class", "btn btn-outline-light btn-sm");
        btnPlus.setAttribute("id", plus);

    countUp.addEventListener("click", function(){
    
        if (counterVal >= 10){
            alert("Bei hohen Bestellmengen, geben Sie bitte dem Personal bescheid");
        } else {
            counterVal++;
            counter.innerText = counterVal;
        };

}, false);
*/
