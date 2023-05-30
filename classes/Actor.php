<?php
    class Actor extends Person {
                
        //ATTRIBUTES
        private array $_movies;
        private array $_castings;

        //METHODS

        //construct method
        function __construct(string $name, string $fName,string $sex, string $bDate){
            parent::__construct( $name, $fName, $sex, $bDate);
            $this->_movies = [];
            $this->_castings = [];
        }

        //get method
        public function get_movies(): array {
		    return $this->_movies;
	    }

        public function get_castings(): array {
		    return $this->_castings;
	    }

        //set method
        public function set_movies($movies){
            $this -> _movies = $movies;
        }

        public function set_castings($castings){
            $this -> _castings = $castings;
        }
        
        //add movie method, will add in array every movie from this director
        public function addMovie(Movie $movie){
            $this->_movies []= $movie;
        }

        public function addCasting(Casting $casting){
            $this->_castings []= $casting;
        }

        //show someone's filmography
        public function showFilmography(){
            $result = "FILMOGRAPHY : ";
			$movies = $this->get_movies();
			foreach($movies as $movie){
				$result .= $movie->get_title()."<br>";
			}
			return $result;
        }
    }
?>