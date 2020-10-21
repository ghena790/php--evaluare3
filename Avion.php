<?
 require "transport.php";
    class airbus extends transport{
        private $name = "airbus";
        private $fuelconsume;
        public function fuel()
        {
            echo "$this->name refuel $this->fuelconsume";
        }

        public function plane()
        {
            echo "$this->name  consume $this->fuelconsume L";
        }

        public function consume()
        {
            echo "$this->name consuma $this->fuelconsume";
        }

        public function left()
        {
            echo "$this->name au ramas $this->fuelconsume";
        }
    }

?>