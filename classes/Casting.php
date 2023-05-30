<?php
    class Casting {
        private Actor $_actor;
        private Movie $_movie;
        private Role $_role;

        function __construct($actor, $movie, $role){
            $this->_actor = $actor;
            $this->_movie = $movie;
            $this->_role = $role;
            $this->_actor->addCasting($this);
            $this->_movie->addCasting($this);
            $this->_role->addCasting($this);
        }
        
        //set method
        public function get_actor() {
		    return $this->_actor;
	    }

        public function get_movie() {
		    return $this->_movie;
	    }

        public function get_role() {
		    return $this->_role;
	    }

        
        //set method
        public function set_actor($actor) {
		    $this->_actor = $actor;
	    }

        public function set_movie($movie) {
		    $this->_movie = $movie;
	    }

        public function set_role($role) {
		    $this->_role = $role;
	    }

        public function __toString(){
    		return $this->get_actor()." ".$this->get_movie()." ".$this->get_role();
		}

    }
?>