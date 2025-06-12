console.log( "main is loaded");

const openpopup1 = document.querySelector(".open-popup");
const closepopup1 = document.querySelector(".close-popup");

const popup1 = document.querySelector(".popup");
openpopup1.addEventListener("click", open);
closepopup1.addEventListener("click", close);

function open(){
    popup1.classList.add("open_popup")
}
function close(){
    popup1.classList.remove("open_popup")
}

const wachtwoordOpen= document.querySelector(".wachtwoord-open-popup");
const wachtwoordClose = document.querySelector(".close-popup");

const wachtwoordPopup1 = document.querySelector(".wachtwoord-popup");

const reparePopup1 = document.querySelector(".herstel-popup");

const repareOpen = document.querySelector(".herstel");
const repareClose = document.querySelector(".close-herstel");

wachtwoordOpen.addEventListener("click", openWachtwoord);
wachtwoordClose.addEventListener("click", closeWachtwoord);

function openWachtwoord(){
    wachtwoordPopup1.classList.add("wachtwoord_open_popup")
}
function closeWachtwoord(){
    wachtwoordPopup1.classList.remove("wachtwoord_open_popup")
}

repareOpen.addEventListener("click", openRepare);
repareClose.addEventListener("click", closeRepare);

function openRepare(){
    reparePopup1.classList.add("herstel_open_popup")
}
function closeRepare(){
    reparePopup1.classList.remove("herstel_open_popup")
}