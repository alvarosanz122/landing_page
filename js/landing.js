
function envio() {
  var nombre = (document.login.nombreUsuario.value);
  var clave = document.login.claveUsuario.value;

  if (nombre === 'alvaro' && clave === '1234') {
    window.location.href = 'panel.php';
  } else {
    alert("Usuario o clave incorrecta");
  }

}

function validar() {
  var ok = true;
  var error = '';
  const url = window.location.origin + "/componentes/controller/forms/form-user-register.php";
  var nombre = (document.registroUsuario.NombreUsuario.value !== "") ? document.registroUsuario.NombreUsuario.value : false;
  var apellidos = (document.registroUsuario.apellidosUsuario.value !== "") ? document.registroUsuario.apellidosUsuario.value : false;
  var email = (document.registroUsuario.emailUsuario.value !== "") ? document.registroUsuario.emailUsuario.value : false;
  var telefono = (document.registroUsuario.telefonoUsuario.value !== "") ? document.registroUsuario.telefonoUsuario.value : false;
  var modalidad = (document.registroUsuario.modalidad.value !== "") ? document.registroUsuario.modalidad.value : false;
  var acepto = document.registroUsuario.aceptoPolitica.value;
  var mensaje = document.registroUsuario.mensajeUsuario.value;
  const isChecked = (document.getElementById("aceptoPolitica").checked) ? acepto : 'N';


  const arra = {
    nombre: nombre,
    apellidos: apellidos,
    email: email,
    telefono: telefono,
    modalidad: modalidad
  };

  for (const [clave, valor] of Object.entries(arra)) {
    if (valor === false) {
      error = clave;
      ok = false;
      break;
    }

  }
  if (ok) {
    const datos = { nombre: nombre, apellidos: apellidos, email: email, telefono: telefono, modalidad: modalidad, acepto: isChecked, mensaje: mensaje };
    const text = JSON.stringify(datos);

    fetch(url, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: text
    })
      .then(response => response.text())
      .then(respuesta => {
        var res = JSON.parse(respuesta);

        if (res['res'] === 'ok') {
          alert(res['message']);
          location.reload();
        } else {
          alert(res['message']);
        }
      })
      .catch(error => {
        alert("Error AJAX:", error);
      });
  } else {
    alert("Debes introducir " + error);
  }


}