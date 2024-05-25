function obtenerDepatarmentos() {
    var departamento = document.getElementById('departamento');
    var ajax = new XMLHttpRequest();
    ajax.open('GET','departamentos.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            departamentos = JSON.parse(ajax.responseText);
            console.log(departamentos);

            for ( i = 0; i < departamentos.length; i++) {
                let elemento = document.createElement('option');
                elemento.value = departamentos[i].id;

                elemento.innerHTML = departamentos[i].departamento;
                departamento.appendChild(elemento);

            }
        }
    }
    ajax.send();
}

function obtenerProvincias() {
    var varprovincia = document.getElementById('provincia');
    varprovincia.innerHTML = '';
    var iddepartamento = document.getElementById('departamento').value;
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'provincias.php?id='+iddepartamento, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) { 
            provincias = JSON.parse(ajax.responseText);
            console.log(provincias);

            for (i = 0; i < provincias.length; i++) {
                let elemento = document.createElement('option');
                elemento.value = provincias[i].id;

                elemento.innerHTML =provincias[i].provincia;
                varprovincia.appendChild(elemento);
            }
        }
    }
    ajax.send();
}