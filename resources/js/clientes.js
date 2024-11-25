//FUNCION PARA AGREGAR Y EDITAR DATOS EN EL FORMULARIO
document.addEventListener("DOMContentLoaded", function() {
    var contenedorFormularioAgregar = document.getElementById("formularioContainer");
    var contenedorFormularioEditar = document.getElementById("formularioEditar");
    var botonCerrarAgregar = document.getElementById("cerrarAgregar");
    var botonCerrarEditar = document.getElementById("cerrarEditar");

    // Funciones para abrir formularios
    document.getElementById("agregar").addEventListener("click", function() {
        contenedorFormularioAgregar.style.display = "flex";
    });

    // Delegación de eventos para cerrar formularios
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("cerrar-formulario")) {
            contenedorFormularioAgregar.style.display = "none";
            contenedorFormularioEditar.style.display = "none";
        }
        if (event.target.classList.contains("formulario-container")) {
            event.target.style.display = "none";
        }
    });

    // Delegación de eventos para botones de editar
    /* document.querySelector("table.medico").addEventListener("click", function (event) {
         if (event.target.classList.contains("editarBtn")) {
             event.preventDefault();
             var row = event.target.closest("tr");
             var idMedico = row.cells[0].innerText;
             var nombres = row.cells[1].innerText;
             var apellidos = row.cells[2].innerText;
             var sexo = row.cells[3].innerText;
             var fechaNacimiento = row.cells[4].innerText;
             var telefonos = row.cells[5].innerText;
             var correo = row.cells[6].innerText;
             var tipoMedico = row.cells[7].innerText;
             var especialidad = row.cells[8].innerText;

             document.getElementById('id_medicoEditar').value = idMedico;
             document.getElementById('nombreEditar').value = nombres;
             document.getElementById('apellidoEditar').value = apellidos;
             document.getElementById('sexoEditar').value = sexo;
             document.getElementById('fechaNEditar').value = fechaNacimiento;
             document.getElementById('telefonoEditar').value = telefonos;
             document.getElementById('correoEditar').value = correo;
             document.getElementById('tipoEditar').value = tipoMedico;
             document.getElementById('especialidadEditar').value = especialidad;

             contenedorFormularioEditar.style.display = "flex";
         }
     });

     // Delegación de eventos para botones de eliminar
     document.querySelector("table.medico").addEventListener("click", function (event) {
         if (event.target.classList.contains("eliminarBtn")) {
             if (!confirm("¿Quieres eliminar este registro?")) {
                 event.preventDefault();
             }
         }
     });*/
});