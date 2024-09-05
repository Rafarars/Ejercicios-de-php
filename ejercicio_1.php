//Crea un programa que imprima la fecha y hora actual del servidor.

<?php
    function fecha(){
        return date ("d-m-Y");
    }
    function hora(){
       return date("H:i:s");
    }
    function option1(){
        echo "la fecha es:". fecha() . "\n" ;
    }
    function option2(){
        echo "La hora es:". hora() ;

    }
    
    $opcion =0;

    do{
        echo "menu para saber la hora o la fecha.\n";
        echo "Presione el numero 1 para saber la fecha\n";
        echo "Presione el numero 2 para saber la hora\n";
        echo "Presiones el numero 3 para salir del menu\n";
        echo "Elija una opcion\n";

        $opcion = trim(fgets(STDIN));

        switch($opcion){
            case 1: 
                option1();
                break;
            case 2:
                option2();
                break;
            case 3:
                echo "saliendo del programa\n";
                break;
            default:
            echo "Error a presionado una tecla incorrecta\n";
        }
        echo "\n";
    }while($opcion!=3);
?>