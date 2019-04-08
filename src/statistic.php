<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 25.03.2019
 * Time: 11:46
 */

class Statistic
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="boolean") **/
    protected $winOrlose;
    /** @Column(type="datetime") **/
    protected $date;

    public function getId()
    {
        return $this->id;
    }

    public function getWinOrlose()
    {
        return $this->winOrlose;
    }

    public function setWinOrlose($winOrlose)
    {
        $this->winOrlose = $winOrlose;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }


}