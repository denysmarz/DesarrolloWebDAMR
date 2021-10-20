<?php

    class listalumnos{
     
        public $nombre;
        

        public function __construct($nombre)
        {
           
            $this->nombre=$nombre;
           
        }
        public function insertar(){
            
            $lista->push('nombre');
        
        }

        public function eliminar(){
            $lista->pop();
        }

        public function mostrarlist(){
            while( $lista->valid() )
                {
                    echo $lista->current(), PHP_EOL;
                    $lista->next();
                }
           // echo "<table border ='1'>";
                
           // echo    "<tr>
           //         <td colspan='2'>$this->nombre</td>         
            //        </tr>";
            //echo  "</table>";
        } 

        
    }

?>