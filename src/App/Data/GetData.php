<?php 

require('config.php');
require('ProcessData.php');

function connectArticles($f, $milliseconds)
{
    $seconds=(int)$milliseconds/1000;
    while(true)
    {
        $f();
        sleep($seconds);
    }
}

connectArticles(function(){
    
    global $config;

    //URL de los RSS
    $portada = simplexml_load_file($config['rss_portada']);
    $pendientes = simplexml_load_file($config['rss_pendientes']);

    //Comprobamos si el parámetro 'num' está definido | default: total de artículos en XML
    $numPortada = count($portada->channel->item); 
    $numPendientes = count($pendientes->channel->item); 

    //Comprobamos si hay artículos y lanzamos el proceso

    if($numPortada) { // Portada
        try {
            updateArticles($portada, $config['db_portada']);
        } catch(Exception $e) {
            echo 'Se ha producido un error.';
        }
    }

    if($numPendientes) { // Pendientes
        try {
            updateArticles($portada, $config['db_pendientes']);
        } catch(Exception $e) {
            echo 'Se ha producido un error.';
        }
    }

}, $config['db_interval']);
