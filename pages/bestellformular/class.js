"use strict"

//UNIQUE ID FÜR RANDOM NUMBER!!!!!!!!!!
class PlMnButtons{

    constructor(getraenk, light){
        this.getraenk = getraenk;
        let uID = this.uniqueID();
        this.uID = uID;
        console.log(uID);
        //this.renderGrid(uID, light);

        this.createUpDownGrid(uID, light);
        let cDown = document.getElementById(this.idDown());
        console.log(cDown);
    }

    createBtn(theWay, textNode, uniqueID, light){                                   //Variablenbeispiele [UP/Down, Textnotiz "Klickmich", ID mit Getränk, heller oder dunkler Stil]

        let btn = document.createElement("button");
        let btnText = document.createTextNode(textNode);
        if (light == "dark") {
            btn.setAttribute("class", "btn btn-outline-dark btn-sm onClickBtn");
        } else if (light == "light") {
            btn.setAttribute("class", "btn btn-outline-light btn-sm onClickBtn");
        }else {
            btn.setAttribute("class", "btn btn-outline-dark btn-sm onClickBtn");
        };
        btn.setAttribute("type", "button");
        btn.setAttribute("id", theWay + uniqueID);
        btn.append(btnText);
        return btn;
    }

    liveView(uniqueID){

        let drinkCtn = document.createElement("span");
        let drinkCtnText = document.createTextNode("0");
        drinkCtn.setAttribute("id", "live" + uniqueID);
        drinkCtn.append(drinkCtnText);
        return drinkCtn;
    }

    uPDownFunction(){
        console.log();
        let cDown = document.getElementById();
        let cUp = document.getElementById("up" + this.uniqueID);
        console.log(cDown);
    }

    createUpDownGrid(uniqueID, light){
        let btnMin = this.createBtn("up", "+", uniqueID, light);
        let btnMax = this.createBtn("down", "-", uniqueID, light);
        let live = this.liveView(uniqueID);

        let divContainer = this.divCreator("class", "container");
        let divRow = this.divCreator("class", "row");
        let col1 = this.divCreator("class", "col-sm");
        let col2 = this.divCreator("class", "col-sm");
        let col3 = this.divCreator("class", "col-sm");

        divContainer.append(divRow);
    
        divRow.append(col1);
        divRow.append(col2);
        divRow.append(col3);
        col1.append(btnMax);
        col2.append(live);
        col3.append(btnMin);

        return divContainer;
    }

    divCreator(cla, attrib){

        let divEle = document.createElement("div");
        divEle.setAttribute(cla , attrib) ;
        return divEle;
    }
    uniqueID(){

        let rand = (min, max) => {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        };
        return this.getraenk.toString() + rand(1, 500).toString();
    }
    idDown(){
        console.log(("down" + this.uID).toString());
        return ("down" + this.uID).toString();
    }
}

let test = new PlMnButtons("spritzer", "dark");
let testing = document.getElementById("testing");
testing.append(test);
console.log(testing);
test.idDown();
