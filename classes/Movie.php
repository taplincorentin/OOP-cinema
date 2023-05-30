<?php
    class Movie {

        //ATTRIBUTES
        private string $_title;
        private DateTime $_releaseDateFr;
        private DateTime $_duration;
        private Director $_director;
        
        //METHODS
        
        //construct method
        function __construct(string $title, string $releaseDateFr, string $duration){
            $this->_title = $title;
            $this->_releaseDateFr = new DateTime($bDate);
            $this->_duration = new DateTime($duration);
            $this->_director = $director;
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
    }
?>