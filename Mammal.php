<?php
require_once 'Animal_Abstract_Superclass.php';
class Mammal extends Animal
{
    private $colorFur;

    public function move()
    {
        echo "<p>Running.</p>";
    }
    public function feed()
    {
        echo "<p>Feeding with milk.</p>";
    }
    public function sound()
    {
        echo "<p>Mammal sound.</p>";
    }

    public function getColorFur()
    {
        return $this->colorFur;
    }
    public function setColorFur($cF)
    {
        $this->colorFur = $cF;
    }
}
