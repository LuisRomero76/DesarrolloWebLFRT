function pregunta1() {
    var contador = document.getElementById('contador');
    fetch('contador.php')
    .then(response => response.text())
    .then(data => contador.innerHTML = data)

    var titulo = document.getElementById('titulo');
    titulo.innerHTML= "Pregunta 1"
}

function cambioColor() {
    var nombre_id = document.getElementById('nombre_id').value;
    var colorFondo = document.getElementById('colorFondo').value;
    if (nombre_id == 'menu') {
        var menu = document.getElementById('menu');
        menu.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'titulo') {
        var titulo = document.getElementById('titulo');
        titulo.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'sub-menu') {
        var sub_menu = document.getElementById('sub-menu');
        sub_menu.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'contenido') {
        var contenido = document.getElementById('contenido');
        contenido.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'pie') {
        var pie = document.getElementById('pie');
        pie.style.backgroundColor = colorFondo;
    } else if (nombre_id == 'contador') {
        var contador = document.getElementById('contador');
        contador.style.backgroundColor = colorFondo;
    }
}

function pregunta3() {
    var titulo = document.getElementById('titulo');
    titulo.innerHTML= "Pregunta 3";
    var sub_menu = document.getElementById('sub-menu');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'horarios.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            sub_menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();

    var asignacion = document.getElementById('asignacion');
    asignacion.innerHTML = "Asignaturas";
}

function mostrarHorarios(materia) {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'tablaHorarios.php?materia=' + materia, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            filas = JSON.parse(ajax.responseText);
            console.log(filas);
            var tabla = 
            `
            <table border="1">
            <tr>
                <td style="background-color: rgb(0, 81, 255);">Hora</td>
                <td style="background-color: rgb(0, 81, 255);">Lunes</td>
                <td style="background-color: rgb(0, 81, 255);">Martes</td>
                <td style="background-color: rgb(0, 81, 255);">Miercoles</td>
                <td style="background-color: rgb(0, 81, 255);">Jueves</td>
                <td style="background-color: rgb(0, 81, 255);">Viernes</td>
            </tr>`
            for (i = 0; i < 10; i++) {
                tabla += `
                <tr>
                    <td style="background-color: rgb(0, 81, 255);">${parseInt(8)+parseInt(i)}-${parseInt(8)+parseInt(i)+1}</td>
                `
                for (j = 0; j <= 4; j++) {
                    if (j == 0) {
                        tabla += `
                        <td id="Lunes${8+i}" style="background-color: ${filas[j].dia+filas[j].hora === "Lunes"+(i + 8)? "yellow" : ""};"></td>`
                    } else if (j == 1) {
                        tabla += `
                        <td id="Martes${8+i}" style="background-color: ${filas[j].dia+filas[j].hora === "Martes"+(i + 8)? "yellow" : ""};"></td>`
                    } else if (j == 2) {
                        tabla += `
                        <td id="Miércoles${8+i}" style="background-color: ${filas[j].dia+filas[j].hora === "Miércoles"+(i + 8)? "yellow" : ""};"></td>`
                    } else if (j == 3) {
                        tabla += `
                        <td id="Jueves${8+i}" style="background-color: ${filas[j].dia+filas[j].hora === "Jueves"+(i + 8)? "yellow" : ""};"></td>`
                    } else if (j == 4) {
                        tabla += `
                        <td id="Viernes${8+i}"></td>`
                    }

                }

                tabla += `
                </tr>
                `

            }
            tabla += `
            </table>
            `
            contenido.innerHTML = tabla;

        }
    }
    ajax.send();
}


function pregunta4() {
    var titulo = document.getElementById('titulo');
    titulo.innerHTML= "Pregunta 4";
    var sub_menu = document.getElementById('sub-menu');
    fetch('editarcalificaciones.php')
    .then(response => response.text())
    .then(data => sub_menu.innerHTML = data)
}

function editarCalificaciones(materia) {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'tablaCalificaciones.php?materia=' + materia, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            filas = JSON.parse(ajax.responseText);
            console.log(filas);
            var tabla = 
            `
            <table border="1">
            <tr>
                <td style="background-color: rgb(0, 81, 255);">Nro</td>
                <td style="background-color: rgb(0, 81, 255);">Nombre</td>
                <td style="background-color: rgb(0, 81, 255);">Calificacion</td>
            </tr>`
            for (i = 0; i < filas.length; i++) {
                tabla += `
                <tr>
                    <td>${i+1}</td>
                    <td>${filas[i].nombres_apellidos}</td>
                    <td id="${filas[i].id}" onclick="cambiarNota('${filas[i].id}')">${filas[i].calificacion}</td>
                </tr>
                `
            }
            tabla += `
            </table>`;
            contenido.innerHTML=tabla;

        }
    }
    ajax.send();
}

function cambiarNota(id) {
    var celda = document.getElementById(id);
    celda.innerHTML = `<input type='number' name='calificacion' id='calificacion' value="${celda.innerHTML}">`;
    celda.onclick = null;
    document.getElementById('calificacion').addEventListener('keypress', function () {
        if (event.key == "Enter") {
            var calificacion = document.getElementById('calificacion').value;
            var ajax = new XMLHttpRequest();
            ajax.open('get', 'cambiarNota.php?calificacion=' + calificacion + '&id=' + id, true);
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4) {
                    celda.innerHTML = calificacion;
                    celda.onclick = cambiarNota;
                }
            }
            ajax.send();
        }
    })
}