<?php

function __autoload($class)
{
    $parts = explode('\\', $class);
    $file_name = end($parts) . '.php';
    if (file_exists('./controllers/' . $file_name)) :
        require './controllers/' . $file_name;
    elseif (file_exists('./models/' . $file_name)) :
        require './mdoels/' . $file_name;
    elseif (file_exists('./views/' . $file_name)) :
        require './views/' . $file_name;
    endif;
   
}
