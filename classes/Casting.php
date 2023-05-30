<?php
    class Casting {
        private Actor $_actor;
        private Movie $_movie;
        private Role $_role;

        function __construct($actor, $movie, $role){
            $this->_actor = $actor;
            $this->_movie = $movie;
            $this->_role = $role;
        }
    }
?>