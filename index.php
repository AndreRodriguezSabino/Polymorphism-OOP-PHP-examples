<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Polymorphism</title>
</head>

<body>
    <?php
    require_once 'Mammal.php';
    require_once 'Reptile.php';
    require_once 'Fish.php';
    require_once 'Bird.php';

    $m = new Mammal();
    $r = new Reptile();
    $f = new Fish();
    $b = new Bird();

    $m->setWeight(20.3);
    $m->setBodyMembers(4);
    $m->setAge(4);
    $m->setColorFur("Brown");
    print_r($m);

    $m->move();
    $r->move();
    $f->move();
    $b->move();
    ?>
</body>

</html>