<?php
    class Role {
        private string $_name;

        //construct
        function __construct(string $name){
            $this->_name = $name;
        }

        //get method
        public function get_name(){
		    return $this->_name;
	    }
        
        //set method
        public function set_name($name) {
		    $this->_name = $name;
	    }
    }
?>