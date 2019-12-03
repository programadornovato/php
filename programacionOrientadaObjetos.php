<!doctype html>
<html lang="en">

<head>
    <title>Programacion Orientada a Objetos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    class carro
    {
        function __construct($marca,$modelo,$alto=1.5,$largo=3,$color="Blanco")
        {
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->alto=$alto;
            $this->largo=$largo;
            $this->color=$color;
        }
        function arrancar(){
            $this->velocidad=0;
        }
        function acelerar($aceleracion){
            $this->velocidad+=$aceleracion;
        }
        function giro($direccion){
            if($direccion=="derecha"){
                $this->angulo+=45;
                if($this->angulo>=360){
                    $this->angulo=0;
                }
            }
            if($direccion=="izquierda"){
                $this->angulo-=45;
                if($this->angulo<=-360){
                    $this->angulo=0;
                }
            }

        }
        var $marca;
        var $modelo;
        var $alto;
        var $largo;
        var $color;
        var $velocidad;
        var $angulo;
        var $imagen;
    }
    $lamborgini1 = new carro("Lamborgini",2020);
    $bmw1 = new carro("BMW",2020,1.3,4,"Rojo");
    $cybertruck1 = new carro("Tesla","Cyber truck 2021");

    $lamborgini1->arrancar();
    echo "Velocidad de lamborgini=".$lamborgini1->velocidad."<br>";
    $lamborgini1->acelerar(20);
    echo "Velocidad de lamborgini=".$lamborgini1->velocidad."<br>";
    $lamborgini1->acelerar(50);
    echo "Velocidad de lamborgini=".$lamborgini1->velocidad."<br>";
    $lamborgini1->acelerar(-10);
    echo "Velocidad de lamborgini=".$lamborgini1->velocidad."<br>";

    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    $lamborgini1->giro("derecha");
    echo "Angulo del lamborgini=".$lamborgini1->angulo."<br>";
    ?>

</body>

</html>