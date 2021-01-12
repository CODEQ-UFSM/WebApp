<?php
//Simple MVC Configuration File
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "Home";
$config->base_url = '/';
$config->url = 'https://simulaeq.000webhostapp.com'.$config->base_url;
$config->asset = $config->base_url.'view/templates/';
$config->template = 'default';

//FTP: senha
//Database
$config->dbuser = 'id14097624_root';
$config->dbpassword = 'Q^dA4%r)WlfcuwcT'; //senha
$config->dbname ='id14097624_modelaeq';