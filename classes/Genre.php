<?php
    class Genre {
        private string $_name;
        private array $_movies;
        
        //construct
        function __construct(string $name){
            $this->_name = $name;
        }

        //get method
        public function get_name(){
		    return $this->_name;
	    }

        public function get_movies(): array {
		    return $this->_movies;
	    }

        
        //set method
        public function set_name($name) {
		    $this->_name = $name;
	    }

        public function set_movies($movies){
            $this -> _movies = $movies;
        }


        //add movie from this genre in array
        public function addMovie(Movie $movie){
            $this->_movies []= $movie;
        }

        //show movie from this genre
        public function showMovies(){
            $result = "movies from this genre : <br>";
			$movies = $this->get_movies();
			foreach($movies as $movie){
				$result .= $movie->get_title()."<br>";
			}
			return $result;
        }
    }
?>