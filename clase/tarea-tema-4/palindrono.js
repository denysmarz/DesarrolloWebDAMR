function palindrono(cadena){
    document.writeln("La palabra es =>",cadena);

    cadena = cadena.toLowerCase();

    var texto = cadena.split(" ").join("");

    //document.writeln(texto);
    var reve = cadena.split("").reverse().join("");
    document.writeln("<br>La palabra al reves =>",reve);
    reve = texto.split('').reverse().join('');
    

    if (texto == reve){
        document.writeln("<br>LA PALABRA ES PALINDRONO");
    }else 
        document.writeln("<br>LA PALABRA NO ES PALINDRONO");
    
}