<?php
        require_once "lib/nusoap.php";
        $clientes = new nusoap_client("http://localhost/Practica4EPS/server.php");
        
        $error =$clientes->getError();
        if ($error) {
            echo "<h3> hay un error </h3><pre>" . $error ."</pre>";
        }

$resulado = $clientes->call("getCoches", array ("datos" => "Coches"));
if ($clientes->fault) {
    echo "<h2>fault</h2><pre>";
    print_r($resulado);
    echo "</pre>";
}
else {
    $error = $clientes->getError();
    if ($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";    
    }
    else {
        echo "<h2>COCHES</h2><pre>";
        echo $resulado;
        echo "</pre>";
    }
}

?>
