function abrirPagina(abrir) {
    var contenido = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open('GET',abrir,true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader('Content-Type','text/html; charset=utf-8');
    ajax.send();
}