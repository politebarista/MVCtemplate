<?php

define('CTRL', ROOT . '/controllers');
define('CFG', ROOT . '/config');
define('CMP', ROOT . '/components');

spl_autoload_register(function ($class_name) {
    if (file_exists(CTRL . '/' . $class_name . '.php')) include CTRL . '/' . $class_name . '.php';
    if (file_exists(CFG . '/' . $class_name . '.php')) include CFG . '/' . $class_name . '.php';
    if (file_exists(CMP . '/' . $class_name . '.php')) include CMP . '/' . $class_name . '.php';
});