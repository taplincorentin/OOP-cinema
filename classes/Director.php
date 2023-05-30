<?php
    class Director extends Person{
        
        //ATTRIBUTES
        private array $_movies;

        //METHODS

        //construct method
        function __construct(string $name, string $fName,string $sex, string $bDate){
            parent::__construct( $name, $fName, $sex, $bDate);
            $this->_movies = [];
        }

        //get method
        public function get_movies(): array {
		    return $this->_movies;
	    }

        //set method
        public function set_movies($movies){
            $this -> _movies = $movies;
        }
    }
?>