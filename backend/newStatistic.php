<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 08.04.2019
 * Time: 12:59
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "config.php";
require_once "../vendor/autoload.php";
require_once "../src/statistic.php";

class createEntityManager {
    protected $entityManager;
    /**
     * entityManager constructor.
     * @param $entityManager
     */
    public function __construct()
    {
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), true);
        $this->entityManager = EntityManager::create(config::getConnectionParams(), $config);
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }


    function saveNewStatistic($winner) {
        $statistic = new Statistic();
        $statistic->setWinner($winner);
        $statistic->setDate(new \DateTime());

        $this -> entityManager ->persist($statistic);
        $this -> entityManager->flush();
    }
}



