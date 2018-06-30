"use strict"

window.addEventListener("load", function(){

    let table = document.getElementById("drinksList");

    class getraenk {
        
        constructor(gName, gPrice, tab){
            this.gName = gName;
            this.gPrice = gPrice;
            this.tab = tab;
            let priceFromed = this.gPrice.toString().replace(".", ",");
            this.newRand = this.rand(1,100).toString();

            let tr = document.createElement("tr");
            let redwine = document.createElement('th');
            redwine.setAttribute('scope',  "row");
            redwine.innerText = "4";
    
            let redwinetd1 = document.createElement('td');
            redwinetd1.innerText = this.gName;
    
            let redwinetd2 = document.createElement('td');
            redwinetd2.innerText = "€ " + priceFromed;
    
            let redwinetd3 = document.createElement('td');
            redwinetd3.append(this.plusMinusBtn());

            tr.append(redwine);
            tr.append(redwinetd1);
            tr.append(redwinetd2);
            tr.append(redwinetd3);
            tab.append(tr);
            this.plFunction();
        }

        rand(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        plusMinusBtn(){
            
            let theId = this.gName.substring(0,4);
            let idName = [];
            let rand = this.newRand;
            let divCr = function(cla, attrib){
    
                let divEle = document.createElement("div");
                divEle.setAttribute(cla , attrib) ;
                return divEle;
            };
            let btn = function(idOf, tNode, theWay){
                theId = theId.toLowerCase()+theWay.toString();
                let btnMinus = document.createElement("button");
                let btnText = document.createTextNode(tNode);
                btnMinus.setAttribute("type", "button");
                btnMinus.setAttribute("class", "btn btn-outline-light btn-sm onClickBtn");
                btnMinus.setAttribute("id", theId+rand);
                btnMinus.append(btnText);
                return btnMinus;
            };
    
            let btnMin = btn(this.gName, "-","down");
            let btnPl = btn(this.gName, "+", "up");
    
            let drinkCtn = document.createElement("span");
            let drinkCtnText = document.createTextNode("0");
            drinkCtn.setAttribute("class", "drinkSelector");
            drinkCtn.setAttribute("id", theId + "counter"+rand);
    
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
        }

        plFunction(){
            let gName = this.gName.toString();

            let countDown = this.idDown().toString();//this.gName.substring(0,4).toLowerCase() + "down";
            let counter = this.gName.substring(0,4).toLowerCase() + "down" + "up" + "counter";
            let cUp = document.getElementById(this.idUp().toString());
            let cDown = document.getElementById(countDown);
            let cCount = document.getElementById(this.idCounter().toString());
            let counterVal = cCount.innerHTML;
            cDown.addEventListener("click", function(){
                if (counterVal <= 0){
                    alert("Sie haben nichts ausgewählt");
                }else{
                    counterVal--;
                    cCount.innerText= counterVal;
                }
            }, false);
            cUp.addEventListener("click", function(){
                if (counterVal >= 10){
                    alert("Für mehr als 10 " + gName + " wenden Sie sich bitte direkt an einen Kellner.");
                } else {
                    counterVal++; 
                    cCount.innerText = counterVal;
                }
            }, false);
        }

        idUp(){
            return this.gName.substring(0,4).toLowerCase() + "down" + "up" + this.newRand;
        }
        idDown(){
            return this.gName.substring(0,4).toLowerCase() + "down" + this.newRand;
        }
        idCounter(){
            return this.gName.substring(0,4).toLowerCase() + "down" + "up" + "counter" + this.newRand;
        }
    };
    
    let spritzer = new getraenk("Weißer Spritzer (0,5ml)", 5.20, table);
    let bier = new getraenk("Bier (0,5ml)", 3.80, table);
    let rotwein = new getraenk("Rotwein (0,2ml)", 2.00, table);
    let weißwein = new getraenk("Weißwein (0,2ml)", 2.00, table);
    let cider = new getraenk("Cider (0,4ml)", 4.80, table);
    let pitcher = new getraenk("Pitcher Bier", 12.80, table);
    let whiskey = new getraenk("Whiskey" , 5.20, table);
    

    inputBtn.addEventListener(click, function() {
        let getr = document.getElementById("getr").value;
        let pre = document.getElementById("pre").value;
        let getra = getr.value;
        let pr = pre.value;
        console.log(getra + pr);
        let getraenk = new getraenk(getr, pre, table);
    }, false);


    let sp = document.getElementById(spritzer.idUp());
    console.log(sp);
    console.log(spritzer.gPrice);

    let gesCounter = document.getElementById(spritzer.idCounter());
    let upCtn = document.getElementById(spritzer.idUp());
    let textfeld = document.getElementById("drinkCard");
    let textfeld2 = document.getElementById("drinkCardNumber");
    //textfeld.innerText = spritzer.gName;
    //textfeld2.innerText = gesCounter;
    console.log(gesCounter);


}, false);

