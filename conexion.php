<?php   

class Cconexion{

    function phpweb(){

        $host='localhost';
        $dbname='phpweb';
        $username='sserver';
        $pasword ='root';
        $puerto=3308;


        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "Se conectó correctamen a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
        }

        return $conn;
    }

}

?>