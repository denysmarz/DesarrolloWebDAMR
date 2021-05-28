function mayor(n1,n2,n3,n4){
    document.writeln("Los numeros introducidos son ",n1,"-",n2,"-",n3,"-",n4,"<br>");
    if(n1>=n2 && n1>=n3 && n1>=n4){
        document.writeln("El mayor es ",n1);
    }else if(n2>=n1 && n2>=n3 && n2>=n4){
        document.writeln("El mayor es ",n2);
    }else if(n3>=n1 && n3>=n2 && n3>=n4){
        document.writeln("El mayor es ",n3);
    }else 
    document.writeln("El mayor es ",n4);
}