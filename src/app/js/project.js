var url = "../controllers/project_controller.php";




function Consultar() {
  $.ajax({
      data: { "accion": "CONSULTAR" },
      url: url,
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
      var html = "";
      $.each(response, function(index, data) {
          html += "<tr>";
          html += "<td>" + data.nombre + "</td>";
          html += "<td>" + data.direccion + "</td>";
          html += "<td>" + data.constructora + "</td>";
          html += "<td>" + data.contacto + "</td>";
          html += "<td>";
          html += "<button class='btn btn-warning' onclick='ConsultarPorId(" + data.idPersona + ");'><span class='fa fa-edit'></span> Modificar</button>"
          html += "<button class='btn btn-danger' onclick='Eliminar(" + data.idPersona + ");'><span class='fa fa-trash'></span> Eliminar</button>"
          html += "</td>";
          html += "</tr>";
      });

      document.getElementById("datos").innerHTML = html;
      $('#tablaPersona').DataTable();
  }).fail(function(response) {
      console.log(response);
  });
}

function ConsultarPorId(idPersona) {
  $.ajax({
      url: url,
      data: { "codigo_proyectos": idPersona, "accion": "codigo_proyectos" },
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
    document.getElementById("nombre").value = response.nombre;
    document.getElementById("direccion").value = response.direccion;
    document.getElementById("constructora").value = response.constructora;
    document.getElementById("contacto").value = response.contacto;
      document.getElementById('codigo_proyectos').value = response.idPersona;
      BloquearBotones(false);
  }).fail(function(response) {
      console.log(response);
  });
}

function Guardar() {
  $.ajax({
      url: url,
      data: retornarDatos("GUARDAR"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
      if (response == "OK") {
          MostrarAlerta("Éxito!", "Datos guardados con éxito", "success");
      } else {
          MostrarAlerta("Error!", response, "error");
      }
      Limpiar();
      Consultar();
  }).fail(function(response) {
      console.log(response);
  });
}

function Modificar() {
  $.ajax({
      url: url,
      data: retornarDatos("MODIFICAR"),
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
      if (response == "OK") {
          MostrarAlerta("Éxito!", "Datos actualizados con éxito", "success");
      } else {
          MostrarAlerta("Error!", response, "error");
      }
      Limpiar();
      Consultar();
  }).fail(function(response) {
      console.log(response);
  });
}

function Eliminar(idPersona) {
  $.ajax({
      url: url,
      data: { "codigo_proyectos": idPersona, "accion": "ELIMINAR" },
      type: 'POST',
      dataType: 'json'
  }).done(function(response) {
      if (response == "OK") {
          MostrarAlerta("Éxito!", "Datos eliminados con éxito", "success");
      } else {
          MostrarAlerta("Error!", response, "error");
      }
      Consultar();
  }).fail(function(response) {
      console.log(response);
  });
}

function Validar() {
  nombres = document.getElementById('nombre').value;
  apellidos = document.getElementById('direccion').value;
  direccion = document.getElementById('constructora').value;
  fechaNacimiento = document.getElementById('contacto').value;

  if (nombre == "" || direccion == "" || constructora == "" || contacto == "") {
      return false;
  }
  return true;
}


function retornarDatos(accion) {
  return {
      "nombre": document.getElementById('nombre').value,
      "direccion": document.getElementById('direccion').value,
      "constructora": document.getElementById('constructora').value,
      "contacto": document.getElementById('contacto').value,
      "accion": accion,
      "codigo_proyectos": document.getElementById("codigo_proyectos").value
  };
}


function Limpiar() {
  document.getElementById('nombre').value = "";
  document.getElementById('direccion').value = "";
  document.getElementById('constructora').value = "";
  document.getElementById('contacto').value = "";
  BloquearBotones(true);
}

function BloquearBotones(guardar) {
  if (guardar) {
      document.getElementById('guardar').disabled = false;
      document.getElementById('modificar').disabled = true;
  } else {
      document.getElementById('guardar').disabled = true;
      document.getElementById('modificar').disabled = false;
  }
}

function MostrarAlerta(titulo, descripcion, tipoAlerta) {
  Swal.fire(
      titulo,
      descripcion,
      tipoAlerta
  );
}