function generarBotones() {
    var menu = document.getElementById("menu");
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'botones.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            menu.innerHTML = ajax.responseText;
        }
    }
    ajax.send();

    var mensaje = document.getElementById('mensaje');
    mensaje.innerHTML="Nombre: Luis Fernando Romero Taboada <br> CU: 35-5328"

    var principal = document.getElementById('principal');
    principal.innerHTML= '';
}

function pregunta2() {
    var menu = document.getElementById("menu");
    fetch('galeria.php')
    .then(response => response.text())
    .then(data => menu.innerHTML = data)
}

function mostrarImagen(link) {
    var principal = document.getElementById('principal');
    principal.innerHTML = `<img src="imagenes/${link}" style="text-align: center;">`;
    principal.style.textAlign="center";
    var mensaje = document.getElementById('mensaje');
    mensaje.innerHTML = link;
}

function pregunta3() {
    var principal = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'login.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    mensaje.innerHTML = "";
    menu.innerHTML = "";
}

function formLogin() {
    var formulario = document.getElementById('form_login');
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open('post', 'autenticar.php', true);
    ajax.onreadystatechange = function () {
        if (this.readyState == 4) {
            var data = ajax.responseText;
            if (data == "Datos Incorrectos") {
                mensaje.innerHTML = data;
            } else {
                var autorizador = document.getElementById('autorizador');
                autorizador.style.width="98%";
                autorizador.style.backgroundColor="red";
                autorizador.style.color="white";
                autorizador.style.textAlign="center";
                autorizador.style.padding="10px";
                autorizador.style.border="1px solid black";
                autorizador.innerHTML = data;
                mensaje.innerHTML = "";
                menu.innerHTML = generarBotones();
                mensaje.innerHTML = "";
            }
        }
    }
    ajax.send(parametros);
}


function pregunta4() {
    var principal = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'listar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function cerrarSesion() {
    var principal = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'cerrar.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            principal.innerHTML = ajax.responseText;
            principal.innerHTML = pregunta4();
            autorizador.innerHTML = "";
            autorizador.style.width="";
            autorizador.style.backgroundColor="";
            autorizador.style.color="";
            autorizador.style.textAlign="";
            autorizador.style.padding="";
            autorizador.style.border="";
        }
    }
    ajax.send();
}


function pregunta5() {
    var principal = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    ajax.open('get', 'datos.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var datos = JSON.parse(ajax.responseText);
            console.log(datos);
            var html = `<select id="selectPregunta5" onchange="imagenPregunta5(this.value)" style="color:green; margin:10px">`;
            for (var i = 0; i < datos.length; i++) {
                html += `<option value="${datos[i].imagen},${datos[i].titulo}">${datos[i].titulo}</option>`;
            }
            html += `</select>`;
            principal.innerHTML = html;
            var imagendiv = document.createElement('div');
            imagendiv.id = "imagen_div";
            imagendiv.style.textAlign = "center";
            principal.appendChild(imagendiv);
        }
    };
    ajax.send();
}

function imagenPregunta5(valor) {
    var values = valor.split(',');
    var imagen = values[0];
    var titulo = values[1];
    var imagen_div = document.getElementById('imagen_div');
    var mensaje = document.getElementById('mensaje');
    imagen_div.innerHTML = `<img src="imagenes/${imagen}">`;
    mensaje.innerHTML = titulo;
}