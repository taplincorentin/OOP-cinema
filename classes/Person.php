<?php
    class Person {

        //ATTRIBUTES
        protected string $_name;
        protected string $_fName;
        protected string $_sex;
        protected DateTime $_bDate;


        //METHODS
    
        //construct method
        function __construct(string $name, string $fName,string $sex, string $bDate){
            $this->_name = $name;
            $this->_fName = $fName;
            $this->_sex = $sex;
            $this->_bDate = new DateTime($bDate);
        }
        
        //getters
        public function get_name(){
		    return $this->_name;
	    }

        public function get_fName(){
		    return $this->_fName;
	    }

        public function get_sex(){
            return $this->_sex;
        }

        public function get_bDate(): DateTime {
		    return $this->_bDate;
	    }


        //setters
        public function set_name($name) {
		    $this->_name = $name;
	    }

	
	    public function set_fName($fName) {
		    $this->_fName = $fName;
	    }

        public function set_sex($sex){
            $this->_sex = $sex;
        }

	    public function set_bDate(DateTime $bDate) {
		    $this->_bDate = $bDate;
	    }

        public function __toString(){
    		return $this->get_name()." ".$this->get_fName()." ".$this->get_sex()." ".$this->get_bDate()->format("d-m-Y");
		}

      
    }

?>