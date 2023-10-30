document.addEventListener("DOMContentLoaded", function () {
  let btn = document.getElementById("btn_cargar_usuarios");
  let loader = document.getElementById("loader");
  let loader2 = document.getElementById("loader2");
  const URL = "https://api.npoint.io/eae2397b27d502ff4747";

  btn.addEventListener("click", function () {
    let peticion = new XMLHttpRequest();
    peticion.open("GET", "https://api.npoint.io/eae2397b27d502ff4747");

    loader.classList.add("active");

    peticion.onreadystatechange = function () {
      if (peticion.readyState === 4 && peticion.readyState == 200) {
        loader.classList.remove("active");
      }
    };

    peticion.send();
  });
});
