let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let togg3 = document.getElementById("togg3");
let d1 = document.getElementById("descmobile1");
let d2 = document.getElementById("descmobile2");
let d3 = document.getElementById("descmobile3");

togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

togg2.addEventListener("click", () => {
  if(getComputedStyle(d2).display != "none"){
    d2.style.display = "none";
  } else {
    d2.style.display = "block";
  }
})



function togg(){
  if(getComputedStyle(d3).display != "none"){
    d3.style.display = "none";
  } else {
    d3.style.display = "block";
  }
};
togg3.onclick = togg;

let idBurger = document.getElementById('burger-active');
idBurger.addEventListener('click', (event) => {
    let tooggleMenu = document.getElementById('toggle-menu');
    tooggleMenu.classList.toggle('mobile-menu-hidden');
})