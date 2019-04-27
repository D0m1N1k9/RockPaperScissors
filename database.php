<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 27.04.2019
 * Time: 15:11
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "../vendor/autoload.php";
require_once "backend/config.php";

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), true);
$entityManager = EntityManager::create(config::getConnectionParams(), $config);