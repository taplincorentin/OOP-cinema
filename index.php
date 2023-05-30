<?php
    spl_autoload_register(function($class_name){require 'classes/'.$class_name.'.php';});


    //INSTANCES TO CHECK OUR METHODS
    //Genre instances
    $g1 = new Genre("Action");
    $g2 = new Genre("Comedy");
    $g3 = new Genre("Horror");


    //Director instances
    $d1 = new Director("Burton", "Tim", "M", "25-08-1958");
    $d2 = new Director("Mckay", "Christopher", "M", "11-11-1973");
    $d3 = new Director("Kubrick", "Stanley", "M", "26-07-1928");
    

    //Actor instances
    $a1 = new Actor("Nicholson", "Jack", "M", "22-04-1937");
    $a2 = new Actor("Arnett","Will", "M", "04-05-1970");
    $a3 = new Actor("Keaton", "Michael", "M", "05-09-1951");
    $a4 = new Actor("Galifianakis","Zach", "M", "01-10-1969");

    //Movie instances
    $m1 = new Movie("Batman", "13-09-1989", 126, $d1,$g1);
    $m2 = new Movie("Lego Batman","08-02-2017", 104, $d2,$g2);
    $m3 = new Movie("The Shining","16-10-1980", 119, $d3, $g3);
    
    
    //Role instances
    $r1 = new Role("Joker");
    $r2 = new Role("Batman");
    $r3 = new Role("Jack Torrance");


    //Casting instances
    $c1 = new Casting($a1,$m1,$r1); //Nicholson played The joker in Batman(1989)
    $c2 = new Casting($a2,$m2,$r2); //Arnett played Batman in BatmanLego
    $c3 = new Casting($a3,$m1,$r2); //Keaton played Batman in Batman(1989)
    $c4 = new Casting($a4,$m2,$r1); //Galifianakis played Joker in BatmanLego
    $c5 = new Casting($a1,$m3,$r3); //Nicholson played Jack Torrance in The Shining
   

    //tests

    echo $r1->showActors()."<br>"; //show actors who played this role (Joker)

    echo $m1->showActors()."<br>"; //show actors who played in Batman(1989)

    echo $g2->showMovies()."<br>"; //show movies of the comedy genre

    echo $a3->showFilmography()."<br>"; //show Jack Nicholson Filmography

    echo $d1->showMovies()."<br>"; //show Tim Burton Filmography
?>
