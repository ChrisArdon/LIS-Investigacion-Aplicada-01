<?php
    $conex = mysqli_connect('localhost','root','','mvc');

    class Conection{
        private $con;
        public function __construct()
        {
            $this->con = new mysqli('localhost','root','','mvc');
        }

        public function ObtenerDatos()
        {
            $query = $this->con->query('SELECT * FROM persona');
            
            $retorno =[];
            $i=0;
            while($fila = $query->fetch_assoc())
            {
                $retorno[$i] = $fila;
                $i++;
            }
            return $retorno;
        }
        
    }

?>