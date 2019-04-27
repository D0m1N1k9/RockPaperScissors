<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 27.04.2019
 * Time: 15:02
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'database.php';

return ConsoleRunner::createHelperSet($entityManager);
