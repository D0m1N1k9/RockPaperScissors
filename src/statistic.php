<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 25.03.2019
 * Time: 11:46
 */
/**
 * @Entity @Table(name="statistic")
 **/
class Statistic
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $winner;
    /**
     *@Column(type="datetime")
     *@var \DateTime
     **/
    protected $date;

    public function getId()
    {
        return $this->id;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function setWinner($winner)
    {
        $this->winner = $winner;
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