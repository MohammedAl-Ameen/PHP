<?php 

    class fruit{
        public $type;
        public $color;
        public $name;

        public function __construct($dddd , $color , $name)
        {
            $this->type = $dddd;
            $this->color = $color;
            $this->name = $name;
        }

        public function info(){
            echo "$this->name $this->color $this->type";
        }

    }


    class mohamemd extends fruit{
        public function message(){
            echo "what is your name <br>";
        }
    }

    $a = new mohamemd("apple" , "red" , "apple" );
    $a->message();
    echo $a->name;



?>