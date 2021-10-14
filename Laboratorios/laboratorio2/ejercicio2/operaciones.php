<?php
    class operaciones{
        private $a;
        private $b;
        private $c;

        public function __construct($a,$b,$c)
        {
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        public function calcularsuma(){
            return $this->a + $this->b + $this->c;
        }

        public function calcularmayor(){
            if($this->a > $this->b && $this->a > $this->c){
                return $this->a;
            }else{
                if($this->b > $this->a && $this->b > $this->c){
                    return $this->b;
                }else{
                    return $this->c;
                }
            }
        }

        public function mostrarcalculos(){
            $suma=$this->calcularsuma();
            $mayor=$this->calcularmayor();

            echo "<table border ='1'>
                <tr>
                    <th bgcolor='yellow' colspan='2'width=200>Valor A</th>
                    <th bgcolor='yellow' colspan='2'width=200>Valor B</th>
                    <th bgcolor='yellow' colspan='2'width=200>Valor C</th>
                </tr>
                
                <tr>
                    <td colspan='2'>$this->a</td>
                    
                    <td colspan='2'>$this->b</td>
                    
                    <td colspan='2'>$this->c</td>
                </tr>

                <tr >
                    <td bgcolor='#33B8FF'colspan='3'>Suma</td>
                    <td >$suma</td>   
                </tr>

                <tr >
                    <td bgcolor='#33B8FF'colspan='3'>Mayor</td>
                    <td >$mayor</td>
                </tr>
                </table>";
        } 

        
    }

?>