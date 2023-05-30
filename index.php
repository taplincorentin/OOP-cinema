<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    $g1 = new Genre("Action");
    $a1 = new Actor("Nicholson", "Jack", "M", "22-04-1937");
    //echo $p1;
    $d1 = new Director("Burton", "Tim", "M", "25-08-1958");
    //echo $d1."<br>";
    $m1 = new Movie("Batman", "13-09-1989","126", $d1,$g1);
    //echo $m1;
    $r1 = new Role("Joker");
    $c1 = new Casting($a1,$m1,$r1);
    //echo $d1->showMovies();
    //echo $g1->showMovies();
    echo $c1;
?>
