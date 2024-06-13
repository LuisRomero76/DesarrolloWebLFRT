function form_insertar() {
    var formulario = document.getElementById('formularioInsertar');
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'insertar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            tabla.innerHTML = mostrarTabla();
        }
    }
    ajax.send(parametros);
}

function mostrarTabla() {
    var tabla = document.getElementById('tabla');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'mostrarTabla.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            tabla.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function editar(id) {
    var operaciones = document.getElementById('operaciones');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'form_editar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            operaciones.innerHTML = ajax.responseText;
        }
    }
    ajax.send(); 
    var titulo = document.getElementById('titulo_operacion');
    titulo.innerHTML = "<b>Operacion Editar</b>";
}

function editarPersona() {

    var formulario = document.getElementById('formularioInsertar');
    var parametro = new FormData(formulario);

    var ajax = new XMLHttpRequest();
    ajax.open("POST",'editar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            tabla.innerHTML = mostrarTabla();
        }
    }
    ajax.send(parametro); 
}

function eliminar(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'eliminar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            tabla.innerHTML = mostrarTabla();
        }
    }
    ajax.send(); 
}

function mostrar(id) {
    var operaciones = document.getElementById('operaciones');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'mostrarDatosTabla.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            operaciones.innerHTML = ajax.responseText;
        }
    }
    ajax.send(); 
    var titulo = document.getElementById('titulo_operacion');
    titulo.innerHTML = "<b>Operacion Mostrar</b>";
}