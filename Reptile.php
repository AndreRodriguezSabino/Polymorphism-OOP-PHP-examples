<?php
class Reptile extends Animal
{
    private $colorScale;

    public function move()
    {
        echo "<p>Crawling.</p>";
    }
    public function feed()
    {
        echo "<p>Eating vegetables.</p>";
    }
    public function sound()
    {
        echo "<p>Reptile sound.</p>";
    }

    public function getColorScale()
    {
        return $this->colorScale;
    }
    public function setColorScale($cS)
    {
        $this->colorScale = $cS;
    }
}
