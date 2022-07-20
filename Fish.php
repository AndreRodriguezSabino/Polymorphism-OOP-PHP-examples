<?php
require_once 'Animal_Abstract_Superclass.php';
class Fish extends Animal
{
    private $colorScale;

    public function move()
    {
        echo "<p>Swimimming.</p>";
    }
    public function feed()
    {
        echo "<p>Feeding planctons.</p>";
    }
    public function sound()
    {
        echo "<p>Fish does not make sound.</p>";
    }
    public function dropBubble()
    {
        echo "<p>Dropping a bubble...</p>";
    }

    public function getColorScale()
    {
        return $this->colorScale;
    }
    public function setColorScale($coS)
    {
        $this->colorScale = $coS;
    }
}
