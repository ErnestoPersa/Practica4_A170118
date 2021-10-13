<?php
    require_once "lib/nusoap.php";
    function getCoches($datos) {
        if ($datos == "Coches") {
            return join(" ", array (
                "VMW Group",
                "Ford",
                "Honda",
                "Hyundai"));
        }    
                    else{
                      return  "No hay coches";
         }  
    }

//    $servidor = new soap_server();
 //   $servidor->register("getCoches");
   // if (!isset($HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( "php://input" );
   // $servidor->service($HTTP_RAW_POST_DATA);

    $servidor = new soap_server();
    $servidor->register("getCoches");
    if (!isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( "php://input" );
        $servidor->service( $HTTP_RAW_POST_DATA );
?>