function listar(parametros) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    if (parametros) {
        ajax.open("GET", "read.php?"+parametros, true);
    }else {
        ajax.open("GET", "read.php", true);
    }
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send(); 
}

function cargar(url) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send(); 
}

function buscar() {
    palabra = document.getElementById('filtro').value;
    listar("filtro="+palabra);
}

function insertar() {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();

    var formulario = document.getElementById('form-persona');
    var parametro = new FormData(formulario);

    ajax.open("POST",'insertar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send(parametro); 
}

function editar(id) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'form_editar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send(); 
}

function editarPersona() {
    var datos = document.getElementById('datos');

    var formulario = document.getElementById('form_editar');
    var parametro = new FormData(formulario);

    var ajax = new XMLHttpRequest();
    ajax.open("POST",'editar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send(parametro); 
}

function eliminar(id) {
    var datos = document.getElementById('datos');
    var ajax = new XMLHttpRequest();
    ajax.open("GET",'eliminar.php?id=' + id, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            datos.innerHTML = ajax.responseText;
        }
    }
    ajax.send(); 
}