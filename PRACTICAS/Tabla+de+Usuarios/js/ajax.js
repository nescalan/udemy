document.addEventListener("DOMContentLoaded", function () {
  let btn = document.getElementById("btn_cargar_usuarios");
  let loader = document.getElementById("loader");
  let loader2 = document.getElementById("loader2");
  const URL = "php/leer-datos.php";

  btn.addEventListener("click", function () {
    const peticion = new XMLHttpRequest();

    // Abre la peticion del API
    peticion.open("GET", URL);

    // Activar el loader
    loader.classList.add("active");

    // Ejecutar cuando se recibe una respuesta del servidor
    peticion.onload = function () {
      let datos = JSON.parse(peticion.responseText);
      console.log(datos);

      for (let i = 0; i < datos.length; i++) {
        let elemento = document.createElement("tr");
        elemento.innerHTML += "<td>" + datos[i].ID + "</td>";
        elemento.innerHTML += "<td>" + datos[i].nombre + "</td>";
        elemento.innerHTML += "<td>" + datos[i].edad + "</td>";
        elemento.innerHTML += "<td>" + datos[i].pais + "</td>";
        elemento.innerHTML += "<td>" + datos[i].correo + "</td>";
        document.getElementById("tabla").appendChild(elemento);
      }
    };

    peticion.onreadystatechange = () => {
      if (peticion.readyState === 4 && peticion.status === 200) {
        // Remueve el loader
        loader.classList.remove("active");
      }
    };

    peticion.send();
  });
});
