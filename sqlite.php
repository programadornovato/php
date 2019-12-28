<?php
    class sqlite{
        static private $db=null;
        function __construct()
        {
            try {
                self::$db=new PDO("sqlite:empresa.sqlite");
                self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);    
                self::crearTablas();
            } catch (\Throwable $th) {
                die("Error al crear la bd empresa ".$th->getMessage());
            }
        }
        private static function crearTablas(){
            $query="CREATE TABLE IF NOT EXISTS productos(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nombre VARCHAR (100) NOT NULL,
                precio REAL,
                categoria VARCHAR (100) NOT NULL,
                existencia INTEGER (5) NOT NULL,
                foto VARCHAR (100) NOT NULL
            );";
            try {
                self::$db->exec($query);
            } catch (\Throwable $th) {
                echo "Error al crear la tabla productos".$th->getMessage();
            }
        }
        public function insertar($producto=array()){
            //$nombre=$producto['nombre'];
            extract($producto);
            $query="INSERT INTO productos 
            (nombre, precio, categoria, existencia, foto)VALUES 
            (:nombre,:precio,:categoria,:existencia,:foto);";
            $sentecia=self::$db->prepare($query);
            $sentecia->bindParam(':nombre',$nombre);
            $sentecia->bindParam(':precio',$precio);
            $sentecia->bindParam(':categoria',$categoria);
            $sentecia->bindParam(':existencia',$existencia);
            $sentecia->bindParam(':foto',$foto);
            if($sentecia->execute()==true){
                return true;
            }
            else{
                return true;
            }
        }
        public function leer(){
            $query="SELECT id, nombre, precio, categoria, existencia, foto
            FROM productos;";
            $sentencia=self::$db->query($query);
            $sentencia->execute();
            $resultado=$sentencia->fetchAll();
            return $resultado;
        }
    }
?>