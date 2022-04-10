
const btnagregar = document.querySelector("#btnagregar");

btnagregar.addEventListener('click', function(){
debugger;
const numeroPokemon = document.querySelector("#numeroPokemon").value;
const container = document.querySelector("#container");
const carddiv = document.createElement("div");
const imgBx = document.createElement("div");
const imgpokemon = document.createElement("img");

carddiv.classList.add ("card") 
imgBx.classList.add("imgBx")

imgpokemon.src = `./img/${numeroPokemon}.png`;



imgBx.append(imgpokemon);
carddiv.append(imgBx);
container.append(carddiv);
console.log(carddiv);
})


