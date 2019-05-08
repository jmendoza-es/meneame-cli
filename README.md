# Meneame CLI 1.0

Comandos disponibles:

  - init: Inicializa el proceso de lectura de los ficheros RSS y rellena la base de datos
  - pendientes:  Obtiene todos los articulos de la cola de pendientes. Para especificar numero usar: pendientes [num]
  - portada: Obtiene todos los articulos de portada. Para especificar numero usar: portada [num]
  
  
## Requisitos
  
- Servidor Nginx
- PHP 7.2 o superior
- 10.1.39-MariaDB o MySQL 5.7
- Composer (para la instalación)
- Symfony Console 4.2.8
- Symfony Process 4.2.8


## Configuración recomendada

- Nginx: PHP5-FPM (se recomienda integración de módulo pagespeed para un mejor rendimiento https://developers.google.com/speed/pagespeed/module/?hl=es-419)


## Instalación

- git clone https://github.com/jmendoza-es/meneame-cli.git /var/www/meneame-cli
- composer install
- Importar fichero /sql/meneame-cli.sql
- Ejecutar en terminal una vez instalado: ./bin/meneame-cli init 
- El proceso quedará activo y se ejecutará a intervalos establecidos en el fichero: /src/App/Data/config.php
