
function pregunta1() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            
        }
    };
    xhttp.open("GET", "pregunta1.html", true);
    xhttp.send();
}

function pregunta3() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("boton").addEventListener("click", calcularajax);
        }
    };
    xhttp.open("GET", "pregunta3.html", true);
    xhttp.send();
}



function verificar() {
    var n = document.getElementById("nombrecompleto").value;
    var p = document.getElementById("password").value;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("nombrecompleto").innerHTML = this.responseText;
            document.getElementById("boton").addEventListener("click", verificar);
        }
    };
    xhttp.open("POST", "autenticar.php", true);
    xhttp.send();
}

function calcularajax() {
    var filas = document.getElementById("filas").value;
    var columnas = document.getElementById("columnas").value ;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("resultado").innerHTML = this.responseText;

        }
    };
    url = "tabla.php?filas=" + filas + "&columnas=" + columnas;
    xhttp.open("GET", url, true);
    xhttp.send();
}
