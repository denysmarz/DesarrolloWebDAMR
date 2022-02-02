function letra(x){
    
    document.getElementById("password").value += x;

}

function pregunta4() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listar.php", true);
    xhttp.send();
}
function ordenar(campo) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listar.php?orden="+campo, true);
    xhttp.send();
}


function pregunta5() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listarnoti.php", true);
    xhttp.send();
}

function ordenarnoti(campo) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listarnoti.php?orden="+campo, true);
    xhttp.send();
}


function comentar(x) {
    
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "comentario.php?id="+x, true);
    xhttp.send();
}

function crear(x) {

    var comentario = document.getElementById("comentario").value;
  

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("resultado").innerHTML = x;
        }
    };
    var parametros="comentario="+comentario+"&id="+x;
    xhttp.open("POST","insertar.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send(parametros);
}