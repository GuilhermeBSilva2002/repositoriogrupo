<?php
#Cria e inicializa uma sessão no servidor.
session_start();

#Esta constante tem o seguinte valor: string(8) "/var/www"
define('ROOT', dirname(__FILE__, 3));
#Esta constante tem o seguiunte valor: string(18) "/var/www/app/views"
define('DIR_VIEW', ROOT . '/app/views');

define('EXT_VIEWS', '.html');

define('HOME', 'http://localhost');



