function personas() {
    var tabla = document.getElementById('tabla');
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'personas.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var personasTabla = JSON.parse(ajax.responseText);
            console.log(personasTabla);
            
            var tablaHTML = `
                <table border='1'>
                    <tr style='background-color:blue; color: white'>
                        <th>Nro</th>
                        <th>Fotografia</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Ocupacion</th>
                    </tr>
            `;
            
            for (var i = 0; i < personasTabla.length; i++) {
                tablaHTML += `
                    <tr class='${(i + 1) % 2 == 0 ? "par" : "impar"}'>
                        <td>${i + 1}</td>
                        <td><img src="imagenes/${personasTabla[i].fotografia}" width='50px' height='50px'></td>
                        <td>${personasTabla[i].nombres}</td>
                        <td>${personasTabla[i].apellidos}</td>
                        <td>${personasTabla[i].edad}</td>
                        <td>${personasTabla[i].sexo}</td>
                        <td>${personasTabla[i].ocupacion}</td>
                    </tr>
                `;
            }
            
            tablaHTML += `</table>`;
            tabla.innerHTML = tablaHTML;
        }
    }
    ajax.send();
}
