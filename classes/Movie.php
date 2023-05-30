<?php
    class Movie {

        //ATTRIBUTES
        private string $_title;
        private DateTime $_releaseDateFr;
        private int $_duration;
        private Director $_director;
        private Genre $_genre;
        private array $_castings;
        
        //METHODS
        
        //construct method
        function __construct(string $title, string $releaseDateFr, int $duration, Director $director, Genre $genre){
            $this->_title = $title;
            $this->_releaseDateFr = new DateTime($releaseDateFr);
            $this->_duration = $duration;
            $this->_director = $director;
            $this->_director->addMovie($this);
            $this->_genre = $genre;
            $this->_genre->addMovie($this);
        }

        //getters
        public function get_title(){
            return $this->_title;
        }

        public function get_releaseDateFr(){
            return $this->_releaseDateFr;
        }

        public function get_duration(){
            return $this->_duration;
        }

        public function get_director(){
            return $this->_director;
        }

        public function get_castings(): array {
		    return $this->_castings;
	    }

        //setters
        public function set_title($title) {
		    $this->_title = $title;
	    }

        public function set_releaseDateFr($releaseDateFr) {
		    $this->_releaseDateFr = $releaseDateFr;
	    }

        public function set_duration($duration) {
		    $this->_duration = $duration;
	    }

        public function set_director($director) {
		    $this->_director = $director;
	    }

        public function set_castings($castings){
            $this -> _castings = $castings;
        }

        //toString method
		public function __toString(){
    		return $this->get_title()." ".$this->get_releaseDateFr()->format("d-m-Y")." ".$this->get_duration()." ".$this->get_director();
		}

        public function addCasting(Casting $casting){
            $this->_castings []= $casting;
        }
    }
?>