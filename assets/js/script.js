document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

var cont_login_register = document.querySelector(".contenedor__login-register");
var form_login = document.querySelector(".formulario__login");
var form_register = document.querySelector(".formulario__register");
var caja_tras_login = document.querySelector(".caja__trasera-login");
var caja_tras_register = document.querySelector(".caja__trasera-register");

function anchoPagina(){
    if(window.innerWidth > 850){
        caja_tras_login.style.display = "block";
        caja_tras_register.style.display = "block";
    }else{
        caja_tras_register.style.display = "block";
        caja_tras_register.style.opacity = "1";
        caja_tras_login.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        cont_login_register.style.left = "0px";
    }
}
anchoPagina();
function iniciarSesion(){
    if(window.innerWidth > 850){
        form_register.style.display = "none";
        cont_login_register.style.left = "10px";
        form_login.style.display = "block";
        caja_tras_register.style.opacity = "1";
        caja_tras_login.style.opacity = "0";
    }else{
        form_register.style.display = "none";
        cont_login_register.style.left = "0px";
        form_login.style.display = "block";
        caja_tras_register.style.display = "block";
        caja_tras_login.style.display = "none";
    }
}
function register(){
    if(window.innerWidth > 850){
        form_register.style.display = "block";
        cont_login_register.style.left = "410px";
        form_login.style.display = "none";
        caja_tras_register.style.opacity = "0";
        caja_tras_login.style.opacity = "1";
    }else{
        form_register.style.display = "block";
        cont_login_register.style.left = "0px";
        form_login.style.display = "none";
        caja_tras_register.style.display = "none";
        caja_tras_login.style.display = "block";
        caja_tras_login.style.opacity = "1";
    }
}