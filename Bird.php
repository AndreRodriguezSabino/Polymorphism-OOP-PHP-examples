<?php
require_once 'Animal_Abstract_Superclass.php';
class Bird extends Animal
{
    private $featherColor;

    public function move()
    {
        echo "<p>Flying.</p>";
    }
    public function feed()
    {
        echo "<p>Eating fruits.</p>";
    }
    public function sound()
    {
        echo "<p>Singing..</p>";
    }
    public function makingNet()
    {
        echo "<p>Built a net!</p>";
    }
    public function getFeatherColor()
    {
        return $this->featherColor;
    }
    public function setFeatherColor($feC)
    {
        $this->featherColor = $feC;
    }
}
