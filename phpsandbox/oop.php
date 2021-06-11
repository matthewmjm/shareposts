<?php
    class Person {
        private $name;
        private $email;
        // public static $ageLimit = 40;
        private static $ageLimit = 40;

            // constructor
            // Runs when an object is instantiated
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            // echo 'Person created<br>';
            echo __CLASS__ . ' created<br>';
        }

        // destructor
        // Called when no other references to a certain object
        // used for cleanup, closing
        public function __destruct(){
            echo __CLASS__ . ' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name . '<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email . '<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;   //we don't use this in a static method but use self & :: instead of ->
        }
    }

        // Static Props and Methods
    // echo Person::$ageLimit;
    echo Person::getAgeLimit();
    
    // $person1 = new Person;
    // $person1 = new Person('John Doe', 'jdoe@gmail.com');
    // echo $person1->getName();
    
    // $person1->setName('John Doe');
    // echo $person1->getName();
    
    // $person1->name = "John Doe";
    // echo $person1->name;
    
    
    
    
    
    class User {
        private $name;
        private $age;
        
        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function getName(){
            return $this->name;
        }
        
        public function setName($name){
            $this->name = $name;
        }
        
        // __get MAGIC METHOD
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        
        // __set MAGIC METHOD
        public function __set($property, $value){
            if(property_exists($this, $property)){
                $this->$property = $value;
            } 
            return $this;
        }
    }
    
    echo $user1->set('name');
        $user1 = new User('John', 40);

    //$user1->name = 'Jeff';
    //echo $user1->name;

    // echo $user1->setName('Jeff');
    // echo $user1->getName();

    $user1->__set('age', 41);
    echo $user1->__get('age');



    
    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new ' . __CLASS__ . ' has been created<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }
    
        public function getBalance(){
            return $this->balance . '<br>';
        }
        
    }
    
    // $customer1 = new Customer('John Doe', 'jdoe@sol.com', 300);
    // echo $customer1->getBalance();

?>