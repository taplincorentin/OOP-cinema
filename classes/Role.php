<?php
    class Role {
        private string $_name;
        private array $_castings;

        //construct
        function __construct(string $name){
            $this->_name = $name;
        }

        //get method
        public function get_name(){
		    return $this->_name;
	    }

        public function get_castings(): array {
		    return $this->_castings;
	    }
        
        //set method
        public function set_name($name) {
		    $this->_name = $name;
	    }

        public function set_castings($castings){
            $this -> _castings = $castings;
        }

        public function __toString(){
    		return $this->get_name();
		}

        public function addCasting(Casting $casting){
            $this->_castings []= $casting;
        }

        public function showActors(){
            $result = "actors who played this role : <br>";
			$castings = $this->get_castings();
			foreach($castings as $casting){
				$result .= $casting->get_actor()."<br>";
			}
			return $result;
        }
    }
?>