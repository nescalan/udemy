let btnCargar = document.getElementById("btn_cargar_usuarios"),
  error_box = document.getElementById("error_box"),
  tabla = document.getElementById("tabla");
loader = document.getElementById("loader");

let usuarioNombre, usuarioEdad, usuarioPais, usuarioCorreo;

const cargarUsuarios = () => {
  tabla.innerHTML("");
};

btnCargar.addEventListener("click", () => {
  cargarUsuarios();
});
