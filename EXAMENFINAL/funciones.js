
function pregunta1() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("boton").addEventListener("click", verificar);
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
    var n = document.getElementById("nombcompleto").value;
    
    var p = document.getElementById("password").value;
    
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            
            document.getElementById("contenido").innerHTML=this.responseText;
            if(this.responseText == "AUTENTICADO CON EXITO"){
                document.getElementById("nombrecompleto").innerHTML=n;
                document.getElementById("CU").innerHTML=p;
            }
            else{
                document.getElementById("nombrecompleto").innerHTML=0;
                document.getElementById("CU").innerHTML=0;
            }
        }
    };
    
    var parametros="nombcompleto="+n+"&password="+p;
    xhttp.open("POST","autenticar.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send(parametros);

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
function pregunta2() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            
        }
    };
    xhttp.open("GET", "noticia.html", true);
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

function crear() {

    var titulo = document.getElementById("titulo").value;
    var imagen = document.getElementById("imagen").files[0].name;
    var texto = document.getElementById("texto").value;
    var tiponoti = document.getElementById("tiponoti").value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            
        }
    };
    var parametros="titulo="+titulo+"&imagen="+imagen+"&texto="+texto+"&tiponoti="+tiponoti;
    xhttp.open("POST","insertar.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send(parametros);
}
function listar() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listar.php", true);
    xhttp.send();
}




function pregunta4() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "pregunta4.html", true);
    xhttp.send();
}

function invertir() {
    
    var inv= document.getElementById("textoinv").value;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("resultado").innerHTML = inv.split("").reverse().join("");

        }
    };
    xhttp.open("GET", "", true);
    xhttp.send();
}


function letra(x){
    
    document.getElementById("textoinv").value += x;

}






function pregunta5() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            
        }
    };
    xhttp.open("GET", "pregunta5.html", true);
    xhttp.send();
}
function crearusuario() {

    var correo = document.getElementById("correo").value;
    var password = document.getElementById("password").value;
    var nombre = document.getElementById("nombrecompletoo").value;
    var cu = document.getElementById("cu").value;
    var nivel = document.getElementById("nivel").value;

    var correo1 = document.getElementById("correo1").value;
    var password1 = document.getElementById("password1").value;
    var nombre1 = document.getElementById("nombrecompleto1").value;
    var cu1 = document.getElementById("cu1").value;
    var nivel1 = document.getElementById("nivel1").value;

    var correo2 = document.getElementById("correo2").value;
    var password2 = document.getElementById("password2").value;
    var nombre2 = document.getElementById("nombrecompleto2").value;
    var cu2 = document.getElementById("cu2").value;
    var nivel2 = document.getElementById("nivel2").value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
            document.getElementById("resultado").innerHTML = nombre;
            
        }
    };
    var parametros="correo="+correo+"&password="+password+"&nombrecompleto="+nombre+"&cu="+cu+"&nivel="+nivel+   "&correo1="+correo1+"&password1="+password1+"&nombrecompleto1="+nombre1+"&cu1="+cu1+"&nivel1="+nivel1+  "&correo2="+correo2+"&password2="+password2+"&nombrecompleto2="+nombre2+"&cu2="+cu2+"&nivel2="+nivel2;
    xhttp.open("POST","insertarusuario.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send(parametros);
}

function listarusuario() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "listarusuario.php", true);
    xhttp.send();
}