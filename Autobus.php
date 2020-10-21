<?
require "transport.php";
class autobus extends transport{
    public $name = "airbus";
    public $fuelconsume;
    private $distance;
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
        $this->name = $this->distace / $this->fuelconsume;
    }

    public function left()
    {
        echo "$this->name au ramas $this->fuelconsume";
    }
}

?>
