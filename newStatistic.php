<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 25.03.2019
 * Time: 11:54
 */
require_once "database.php";

$winner = "idk";

$statistic = new Statistic();
$statistic->setWinOrlose($winner);
$statistic->setDate(date('Y-m-d h:i:s'));

$entityManager->persist($statistic);
$entityManager->flush();

echo "Created Statictic with ID " . $statistic->getId() . "\n";

