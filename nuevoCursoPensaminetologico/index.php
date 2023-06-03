<?php

/**/
function recomendacion(){
  $clima = array("Bogota" => "frio", "Monteria" => "calido", "Medellin" => "templado");

  $ubicacion = array("Bogota" => "norte", "Leticia" => "sur", "Santander" => "este", "Antioquia" => "oeste");

  $turismo = array("Santa Marta" => "mar", "Villa Vicencio" => "llano", "Riohacha" => "desierto", "Quindio" => "valle");

  switch("clima") {
    case "clima":
      echo array_search("frio", $clima);
    break;
    case "ubicacion":
      echo array_search("norte", $ubicacion);
    break;
  }
}
recomendacion();


?>