<?php

define('BREAD_ROOT', getcwd());
define('BREAD_APPLICATION', BREAD_ROOT . DIRECTORY_SEPARATOR . "application");
set_include_path(get_include_path() . PATH_SEPARATOR . BREAD_APPLICATION);

require 'Bread' . DIRECTORY_SEPARATOR . 'Bake.php';
