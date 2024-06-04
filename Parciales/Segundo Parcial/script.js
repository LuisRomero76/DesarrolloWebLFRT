function generarTabla() {
    contenido.innerHTML = "";
    var operaciones = document.getElementById('operaciones');
    fetch('datos.html')
    .then(response => response.text())
    .then(data => operaciones.innerHTML = data);
    var titulo = document.getElementById('titulo');
    titulo.innerHTML = 'Pregunta 1';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function creartabla() {
    var contenido = document.getElementById('contenido');
    var filas = document.getElementById('filas').value;
    var columnas = document.getElementById('columnas').value;
    var html = `<table border="1" style='width:50%'>`
        for (i = 0; i < filas; i++) {
            html+=`<tr>`
                for (j = 0; j < columnas; j++) {
                    html+=`<td id='celda${i}_${j}' onclick='mostrarImput("celda${i}_${j}")'>&nbsp;</td>`
                }
            html+=`</tr>`
        }
    html+=`</table>`
    contenido.innerHTML = html;
}


function mostrarImput(celda) {
    var celdas = document.getElementById(celda);
    celdas.innerHTML=`<input type="number" id="valor" style='width:100px'>`;
    document.getElementById('valor').addEventListener("keypress", () => {
        if (event.key == "Enter") {
            celdas.innerHTML = document.getElementById('valor').value;
        }
    })
}

function pregunta2() {
    var operaciones = document.getElementById('operaciones');
    operaciones.innerHTML= `
    <label>Texto</label>
    <input type="text" id="texto">
    <label>Color Fondo</label><br>
    <input type="color" id="colorfondo"'><br>
    <label>Color</label><br>
    <input type="color" id="color"><br>
    <button onclick="crearPregunta2()">Crear</button>
    `;
    titulo.innerHTML = 'Pregunta 2';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function crearPregunta2() {
    var texto = document.getElementById('texto').value;
    var colorfondo = document.getElementById('colorfondo').value;
    var color = document.getElementById('color').value;
    var contenido = document.getElementById('contenido');
    var crearDiv = document.createElement('p');
    crearDiv.style.backgroundColor = colorfondo;
    crearDiv.style.color = color;
    crearDiv.style.height= "50px";
    crearDiv.style.width= "100%";
    crearDiv.innerHTML=texto;
    crearDiv.style.textAlign = "center";
    contenido.appendChild(crearDiv);
}

function pregunta3() {
    contenido.innerHTML = "";
    var operaciones = document.getElementById('operaciones');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'galeria.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            operaciones.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    titulo.innerHTML = 'Pregunta 3';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function mostrarBorde(img) {
    var imagenborde = document.getElementById(img);
    imagenborde.style.border= "2px solid blue";
}

function mostrarImagen(imagen,titulo,autor,editorial,año) {
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = `
    <div style='display:flex'>
        <div>
            <img src="images/${imagen}" width="200px">
        </div>
        <div style='display:flex; flex-direction: column; justify-content: center;'>
            <p>Titulo: <strong>${titulo}</strong></p>
            <p>Autor: <strong>${autor}</strong></p>
            <p>Editorial: <strong>${editorial}</strong></p>
            <p>Año: <strong>${año}</strong></p>
        </div>
    </div>
    `
}

function pregunta4() {
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = "";
    var operaciones = document.getElementById('operaciones');
    operaciones.innerHTML = `
    <button onclick="listarLibro()" style="border:2px solid blue; padding: 10px; cursor:pointer; margin:10px;">Listar</button><br>
    <button onclick="insertarLibro()" style="border:2px solid blue; padding: 10px; cursor:pointer; margin:10px;">Insertar</button>
    `;
    titulo.innerHTML = 'Pregunta 4';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function listarLibro() {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'listar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            libros = JSON.parse(ajax.responseText);
            var html = `
            <table border="1" width='100%'>
                <tr>
                    <td>Imagen</td>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>Editorial</td>
                    <td>Año</td>
                </tr>`
                for (i = 0; i < libros.length; i++) {
                    html += `
                    <tr>
                        <td><img src='images/${libros[i].imagen}' width='50px'></td>
                        <td>${libros[i].titulo}</td>
                        <td>${libros[i].autor}</td>
                        <td>${libros[i].editorial}</td>
                        <td>${libros[i].anio}</td>
                    </tr>
                    `
                }
            html+= `</table>`
            contenido.innerHTML = html;
        }
    }
    ajax.send();
}

function insertarLibro() {
    var contenido = document.getElementById('contenido');
    fetch('formulario.php')
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function insertarDatos() {
    var formulario = document.getElementById('form_insertar');
    var parametros = new FormData(formulario);
    fetch('insertar.php', {
        method: "POST",
        body: parametros
    })
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function pregunta5() {
    contenido.innerHTML = "";
    var operaciones = document.getElementById('operaciones');
    var html = `
    <form action="javascript:generarCalendario()" id="form_calendario">
        <select name="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        <select name="anio">`
            for ( i = 1975; i <= 2023; i++) {
                html += `<option value="${i}">${i}</option>`
            }
        html+=`</select>
        <input type="submit" value="Enviar">`
    html+=`</form>`;
    operaciones.innerHTML = html;
    titulo.innerHTML = 'Pregunta 5';
    titulo.style.display= "flex";
    titulo.style.alignItems= "center";
    titulo.style.justifyContent= "center";
    titulo.style.color= "red";
}

function generarCalendario() {
    var formulario = document.getElementById('form_calendario');
    var parametros = new FormData(formulario);
    fetch("calendario.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenido.innerHTML = data);
}