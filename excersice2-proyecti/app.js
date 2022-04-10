const btn1 = document.getElementById("btn1");

btn1.addEventListener('click', function(){
    debugger;
    //INYECCION A LO LABEL DEL HTML DEL PRODUCTO 1
    var  DiscoDuro1 = document.getElementById("IdDiscoDuro").value;
    var Ram1= document.getElementById("IdRam").value;
    var TVideo1 = document.getElementById("IdTVideo").value;
    var Pantalla1 = document.getElementById("IdTPantalla").value
    var Precio1 = document.getElementById("IdPrecio").value;
    //concatenando el mensaje con el valor del label
    document.getElementById("IdD1").innerHTML = "Disco duro :" + DiscoDuro1;
    document.getElementById("IdR1").innerHTML ="RAM : "+Ram1;
    document.getElementById("IdTv1").innerHTML ="Tarjeta de video :"+TVideo1;
    document.getElementById("IdTP").innerHTML ="tamaño pantalla : "+Pantalla1;
    document.getElementById("IdP1").innerHTML ="Precio :" +Precio1;
    //INYECCION A LO LABEL DEL HTML DEL PRODUCTO 1
    var DiscoDuro2 = document.getElementById("IdDiscoDuro2").value;
    var Ram2 = document.getElementById("IdRam2").value;
    var TVideo2 = document.getElementById("IdTVideo2").value;
    var pantalla2= document.getElementById("IdTPantalla2").value;
    var precio2 = document.getElementById("IdPrecio2").value;
    //concatenando el mensaje con el valor del label
    document.getElementById("dd2").innerHTML ="Disco duro :"+DiscoDuro2;
    document.getElementById("ram2").innerHTML ="RAM : "+Ram2;
    document.getElementById("tv2").innerHTML = "Tarjeta de video "+TVideo2;
    document.getElementById("Tpan2").innerHTML = "Tamaño pantalla "+pantalla2;
    document.getElementById("prcio2").innerHTML= "Precio " +precio2;

    elem = document.getElementById("idRespuesta");
  elem.style.display = "block";
  elem2 = document.getElementById("Idformulario");
  elem2.style.display = "none";
})

const btn2 = document.getElementById("btn2");
btn2.addEventListener('click', function(){
elem = document.getElementById("idRespuesta");
elem.style.display = "none";
elem2 = document.getElementById("Idformulario");
elem2.style.display = "block";
})

// const DiscoDuro2 = document.getElementById("IdDiscoDuro2").value;

// if(parseInt(DiscoDuro) > parseInt(DiscoDuro2))
// alert("El eqipo uno es mejor qu el dos");
// else
// alert("El equipo dos es mejor que el uno");
