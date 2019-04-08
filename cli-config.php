<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 18.03.2019
 * Time: 13:19
 */

require_once "database.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

