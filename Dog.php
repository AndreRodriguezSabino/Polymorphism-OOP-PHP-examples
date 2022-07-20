<?php
require_once 'Mammal.php';
class Dog extends Mammal
{
    public function sound()
    {
        echo "<p>The dog is barking.</p>";
    }
}
