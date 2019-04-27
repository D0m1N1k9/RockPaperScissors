<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 08.04.2019
 * Time: 12:00
 */

require_once "newStatistic.php";

$playerChoice = '';

if (isset($_GET['choice'])){
    $playerChoice = $_GET['choice'];
}

//header('Content-type: application/json');

$winner = getWinner($playerChoice);
echo json_encode($winner);
(new createEntityManager) -> saveNewStatistic($winner);

function getWinner ($playerChoice){
    $randomInt = rand(1, 3);

    if ($playerChoice === 1){
        if($randomInt === 1){
            $winner = "tie";
        } elseif ($randomInt === 2){
            $winner = "cpu";
        }else{
            $winner = "player";
        }
    } elseif ($playerChoice === 2){
        if($randomInt === 1){
            $winner = "player";
        } elseif ($randomInt === 2){
            $winner = "tie";
        }else{
            $winner = "cpu";
        }
    }else{
        if($randomInt === 1){
            $winner = "cpu";
        } elseif ($randomInt === 2){
            $winner = "player";
        }else{
            $winner = "tie";
        }
    }
    return $winner;
}

