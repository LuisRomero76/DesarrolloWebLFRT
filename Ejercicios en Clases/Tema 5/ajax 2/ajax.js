function abrir(abrir) {
    var contenedor = document.getElementById("contenedor");
    var ajax = new XMLHttpRequest();
    ajax.open('GET',abrir,true)
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.getResponseHeader('Content-Type', 'test/html; charset=utf-8');
    ajax.send();    
}