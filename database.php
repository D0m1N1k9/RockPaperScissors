<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 18.03.2019
 * Time: 13:02
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "config.php";
require "vendor/autoload.php";

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), true);
try{
    $entityManager = EntityManager::create($connectionParams, $config);
} catch (Exception $e) {}