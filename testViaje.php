<?php
include 'viaje.php';


$viajeUnoPasaj= [
    ["nombre"=>"Pedro"  ,"apellido"=>"Ruiz" ,"documento"=>148812369],
    ["nombre"=>"Juan"   ,"apellido"=>"Perez","documento"=>163451231],
    ["nombre"=>"Martha" ,"apellido"=>"Diaz" ,"documento"=>177642013]
];

$viajeUno = new Viaje(1337,"Chos Malal",6,$viajeUnoPasaj);

do{
echo "\n1- Imprimir datos del viaje.\n2- Imprimir datos de una variable del viaje.\n3- editar datos del viaje.\n4- Salir";
$i=trim(fgets(STDIN));
switch($i){
    case 1:
        echo "\n".$viajeUno;
        fgets(STDIN);
        break;
    case 2:
         do{
                echo "\n1-Imprimir código de viaje.\n2-Imprimir destino de viaje.\n3-Imprimir cantidad máxima de pasajeros.\n4-Imprimir lista de pasajeros.\n5-Salir.\n";
                $j=trim(fgets(STDIN));
                switch($j)  {
                                 case 1:
                                    echo "\nCódigo de viaje: ".$viajeUno->getCodigo();
                                    fgets(STDIN);
                                    break;
                                case 2:
                                    echo "\nDestino: ".$viajeUno->getDestino();
                                    fgets(STDIN);
                                    break;
                                case 3:
                                    echo "\nCantidad Máxima de pasajeros: ".$viajeUno->getMaxPasajeros();
                                    fgets(STDIN);
                                    break;
                                case 4:
                                    $listaPasajeros="";
                                    foreach($viajeUno->getPasajeros() as $unPasajero){
                                        $nom = $unPasajero["nombre"];
                                        $ape = $unPasajero["apellido"];
                                        $docu = $unPasajero["documento"];
                                        $listaPasajeros .= ($nom." ".$ape." |DNI: ".$docu."\n");
                                    }     
                                    echo "\nLista de Pasajeros:\n".$listaPasajeros."\n";
                                    fgets(STDIN);
                                    break;
                            }   

             }while($j<>5);
            break;
    case 3:
        do{
            echo "\n1-Editar código de viaje.\n2-Editar destino de viaje.\n3-Editar cantidad máxima de pasajeros.\n4-Editar lista de pasajeros.\n5-Salir.\n";
           $j=trim(fgets(STDIN));
            switch($j){
                case 1:
                    echo "\nIngrese el nuevo código de viaje: ";
                    $nCod=trim(fgets(STDIN));
                    $viajeUno->setCodigo($nCod);
                    echo "\n Código actualizado, presione cualquier tecla.\n";
                    fgets(STDIN);
                break;
                case 2:
                    echo "\nIngrese el nuevo destino de viaje: ";
                    $nDes=trim(fgets(STDIN));
                    $viajeUno->setDestino($nDes);
                    echo "\n Destino actualizado, presione cualquier tecla.\n";
                    fgets(STDIN);
                break;
                case 3:
                    echo "\nIngrese la nueva cantidad máxima de pasajeros: ";
                    $nCMax=trim(fgets(STDIN));
                    $viajeUno->setMaxPasajeros($nCMax);
                    echo "\n Cantidad de pasajeros máxima actualizada, presione cualquier tecla.\n";
                    fgets(STDIN);
                break;
                case 4:
                    echo "\nIngrese la cantidad de pasajeros a ingresar: ";
                    $numNuePasajeros=trim(fgets(STDIN));
                    for($i=0;$i<$numNuePasajeros;$i++){
                        $pasajerosAAgregar=array();
                        echo "\nIngrese el nombre del pasajero".($i+1).": ";
                        $pasajerosAAgregar[$i]["nombre"]=trim(fgets(STDIN));
                        echo "\nIngrese el apellido: del pasajero".($i+1).": ";
                        $pasajerosAAgregar[$i]["apellido"]=trim(fgets(STDIN));
                        echo "\nIngrese el DNI: del pasajero".($i+1).": ";
                        $pasajerosAAgregar[$i]["DNI"]=trim(fgets(STDIN));
                    }
                    $pasajeros=$viajeUno->getPasajeros()+$numNuePasajeros;
                    $viajeUno->setPasajeros($pasajeros);
                break;
            }


        }while($j<>5);
        break;
    }

}while($i<>4);
echo "lol";
?>