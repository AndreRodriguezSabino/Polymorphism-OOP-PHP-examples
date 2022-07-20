<?php
abstract class Animal
{
    protected $weight;
    protected $age;
    protected $bodyMembers;

    abstract function move();
    abstract function feed();
    abstract function sound();

    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($wei)
    {
        $this->weight = $wei;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($ag)
    {
        $this->age = $ag;
    }
    public function getBodyMembers()
    {
        return $this->bodyMembers;
    }
    public function setBodyMembers($bM)
    {
        $this->bodyMembers = $bM;
    }
}
