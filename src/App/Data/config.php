<?php

$config['db_interval'] = 60000; // Intervalo de consulta a fichero RSS

/* Base de datos */
$config['db_server'] = 'localhost';
$config['db_username'] = 'root';
$config['db_password'] = '';
$config['db_name'] = 'meneame-cli';
$config['db_portada'] = 'mnm_portada';
$config['db_pendientes'] = 'mnm_pendientes';

/* Configuración RSS */
$config['rss_portada'] = 'https://www.meneame.net/rss';
$config['rss_pendientes'] = 'https://www.meneame.net/rss?status=queued';

/* Parámetros de ejecución para PHP */
ini_set('MAX_EXECUTION_TIME', 99999999);