<?php
    class Actor extends Person {
                
        //ATTRIBUTES
        private array $_castings;

        //METHODS

        //construct method
        function __construct(string $name, string $fName,string $sex, string $bDate){
            parent::__construct( $name, $fName, $sex, $bDate);
            $this->_castings = [];
        }

        //get method
        public function get_castings(): array {
		    return $this->_castings;
	    }

        //set method
        public function set_castings($castings){
            $this -> _castings = $castings;
        }

        public function addCasting(Casting $casting){
            $this->_castings []= $casting;
        }

        //show someone's filmography
        public function showFilmography(){
            $result = "FILMOGRAPHY : ";
			$castings = $this->get_castings();
			foreach($castings as $casting){
				$result .= ($casting->get_movie())->get_title()."<br>";
			}
			return $result;
        }
    }
?>