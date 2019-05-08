<?php

/**
* Obtiene los últimos registros del RSS desde base de datos
*
* @return string 
* @param string $type especifica el nombre de la tabla a la que consulta
* @param int $num número de elementos a retornar
*/

function getArticles($type, $num = 0) {

    global $config;

    //SQL
    $conn = new mysqli($config['db_server'], $config['db_username'], $config['db_password'], $config['db_name']);
 
    $sql = 'SELECT * from ' . $type;
    $sql .= ($num) ? ' LIMIT ' . $num : '';    

    $out = '';

    $result = $conn->query($sql);
    
    if(!$result) die($conn->error);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {


                //Output
                $out .= "\n[Titulo]: " .  $row['titulo'];
                $out .= "\n[Karma]: " . $row['karma'];
                $out .= "\n[Votos]: " . $row['votos'];
                $out .= "\n[Comentarios]: " . $row['comentarios'];
                $out .= "\n";
            }
            
         
            $out .= "\nSe encontraron $result->num_rows elemento(s).";

        return $out;

    } else {

        $conn->close();
        return "No hay elementos que mostrar.";
    }
}

/**
* Inserta los nuevos registros del RSS en base de datos
*
* @return void 
* @param array $data contiene un array con los datos del XML
*/

function updateArticles($data, $type) {

    $num = count($data->channel->item);
    $out = '';

    if($num) {

        //Actualización BD

        global $config;   

        $conn = new mysqli($config['db_server'], $config['db_username'], $config['db_password'], $config['db_name']);

        $result = $conn->query('TRUNCATE '. $type);

        for($i = 0; $i < $num; $i++) {

            //Parámetros
            $id = $data->channel->item[$i]->xpath('//meneame:link_id');
            $karma = $data->channel->item[$i]->xpath('//meneame:karma');
            $votos = $data->channel->item[$i]->xpath('//meneame:votes');
            $comentarios = $data->channel->item[$i]->xpath('//meneame:comments');

            //Output
            $out .= "'" . $data->channel->item[$i]->title;
            $out .= "'," . $karma[$i];
            $out .= "," . $votos[$i];
            $out .= "," . $comentarios[$i];
            $result = $conn->query('INSERT into ' . $type . ' (`id`,`titulo`,`karma`,`votos`,`comentarios`) values (NULL,'.$out.')');
            $out = '';
        }
        

    } else {        

        $out .= "\nNo se han encontrado articulos.";

    }

    $conn->close();
}

?>