const imc = document.querySelector('#imc'); 

imc.addEventListener('click', function () {
    const peso = document.querySelector('#peso').value;
    const altura = document.getElementById('altura').value;
    const mostrar = document.querySelector('#mostrar');
    const img = document.querySelector('#img');
    const resultado = parseInt(peso) / parseInt(Math.pow(altura, 2));

    if (peso !== "" || altura !== "") {
        if (isNaN(peso) || isNaN(altura)) {
            mostrar.textContent = "Ha ingresado texto, por favor ingrese numeros"
        } else {
            mostrar.textContent = `Su IMC es: ${resultado.toFixed(1)}`;
        }
    } else {
        mostrar.textContent = "Los campos están vacíos"
    }

    mostrar.classList.add('resultado');
    img.classList.add('img');

    mostrarImg()

    function mostrarImg() {
        if (resultado < 18.5) {
            img.src = "./img/bajoPeso.jpg"
        }
        else if (resultado <= 24.9) {
            img.src = "./img/pesoNormal.jpg"
        }
        else if (resultado <= 29.9) {
            img.src = "./img/sobrepeso.jpg"
        }
        else if (resultado <= 34.9) {
            img.src = "./img/obecidadaUno.jpg"
        }
        else if (resultado <= 39.9) {
            img.src = "./img/obecidadDos.jpg"
        }
        else if (resultado >= 40) {
            img.src = "./img/obecidadTres.jpg"
        }
        return imc.src;
    };
});