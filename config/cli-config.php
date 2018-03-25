<?php

use \Comodojo\Foundation\Base\ConfigurationLoader;
use \Comodojo\Extender\Components\Database;
use \Doctrine\ORM\Tools\Console\ConsoleRunner;

$base_path = realpath(dirname(__FILE__)."/../");
$autoloader = "$base_path/vendor/autoload.php";
$configuration = "$base_path/config/comodojo-configuration.yml";

$loader = require_once $autoloader;

$config = ConfigurationLoader::load($configuration);

$entityManager = Database::init($config)->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
