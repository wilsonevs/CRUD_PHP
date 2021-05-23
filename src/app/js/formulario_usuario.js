
// Funcion
$(document).ready(function() {
    $('#verTableUsuario').DataTable();
} );

function registro() {
    let emailRegistro = document.getElementsByid('emailRegistro').value;
    document.getElementsByid('buttonRegistro').innerHTML = emailRegistro;

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(emailRegistro)) {
        alert("La dirección de email " + valor + " es correcta.");
    } else {
        alert("La dirección de email es incorrecta.");
    }


}