<?php
require_once get_template_directory() . '/functionsphp/includes/autoloader.php';

use FunctionsPhp\includes\Autoloader as Autoloader;

$autoloader = new Autoloader('FunctionsPhp', get_template_directory(), '.php');

/* Run functions class */

use \FunctionsPhp\FunctionsPhp as FunctionsPhp;

function run_functionsphp()
{
    $functions = new FunctionsPhp();
}

run_functionsphp();