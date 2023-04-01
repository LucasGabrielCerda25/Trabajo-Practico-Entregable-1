<?php
class Viaje {

    /*Atributos de la clase viaje. Incluye el código del viaje, el destino, cant. max de pasajeros
    y el array asociativo de pasajeros.*/
    private int $codigo;
    private string $destino;
    private int $maxPasajeros;
    private array $pasajeros;

    //Método constructor
    public function __construct($code,$dest,$mPas,$pas)
    {
        $this->codigo=$code;
        $this->destino=$dest;
        $this->maxPasajeros=$mPas;
        $this->pasajeros=$pas;
    }

    //Métodos de acceso get
    public function getCodigo()         {return $this->codigo;}
    public function getDestino()        {return $this->destino;}
    public function getMaxPasajeros()   {return $this->maxPasajeros;}
    public function getPasajeros()      {return $this->pasajeros;}

    //Métodos de acceso set
    public function setCodigo(int $cod)         {$this->codigo = $cod;}
    public function setDestino(string $des)     {$this->destino = $des;}
    public function setMaxPasajeros(int $mxP)   {$this->maxPasajeros = $mxP;}
    public function setPasajeros(array $pas)    {$this->pasajeros = $pas;}

    //toString
    public function __toString()
    {
        $listaPasajeros="";
        //foreach($this->getPasajeros() as list($nom, $ape, $docu)) <- Mi error
        foreach($this->getPasajeros() as $unPasajero){ //Codigo arreglado para usar arreglo asociativo
            $nom = $unPasajero["nombre"];
            $ape = $unPasajero["apellido"];
            $docu = $unPasajero["documento"];
            $listaPasajeros .= ($nom." ".$ape." |DNI: ".$docu."\n");
        }

        return "\n"."Código de viaje: ".$this->getCodigo()."\nDestino: ".$this->getDestino().
        "\nMáxima cantidad de pasajeros: ".$this->maxPasajeros."\nLista de Pasajeros:\n".$listaPasajeros;
    }


}

?>
