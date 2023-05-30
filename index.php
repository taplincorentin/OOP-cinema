<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});

    $p1 = new Person("Pitt", "Brad", "M", "18-12-1963");
    //echo $p1;
    $d1 = new Director("Burton", "Tim", "M", "25-08-1958");
    //echo $d1."<br>";
    $m1 = new Movie("Batman", "13-09-1989","126", $d1);
    //echo $m1;
    echo $d1->showMovies();
?>