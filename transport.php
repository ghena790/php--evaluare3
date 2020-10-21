<?

 abstract class transport
{
    public $name = NONE;
    public $fuelconsume = NULL;
    public $consuption = 0;


    public function __construct($name, $fuelconsume, $distance)
    {
        $this->name = $name;
        $this->fuelconsume = $fuelconsume;
        $this->consuption = $distance;
    }

    public function fuel()
    {
        echo "$this->name  refuel $this->fuelconsume";
    }

    public function distance()
    {
         $this->fuel = consuption/0.1 * $this->fuelconsume;
    }

    public function concume()
    {
        echo "$this->name consuma $this->fuelconsume";
    }

    public function left()
    {
        echo "$this->name au ramas $this->fuelconsume";
    }


};
?>