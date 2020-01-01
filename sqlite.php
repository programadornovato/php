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
        public function leer($buscar=array()){
            $where=" where 1=1 ";
            if(empty($buscar['id'])==false){
                $where=$where." and id=:id ";
            }
            if(empty($buscar['nombre'])==false){
                $where=$where." and nombre=:nombre ";
            }
            if(empty($buscar['precio'])==false){
                $where=$where." and precio=:precio ";
            }
            if(empty($buscar['categoria'])==false){
                $where=$where." and categoria=:categoria ";
            }
            if(empty($buscar['existencia'])==false){
                $where=$where." and existencia=:existencia ";
            }
            $query="SELECT id, nombre, precio, categoria, existencia, foto
            FROM productos
            $where ;";
            $sentencia=self::$db->prepare($query);
            if(empty($buscar['id'])==false){
                $sentencia->bindParam(":id",$buscar['id']);
            }
            if(empty($buscar['nombre'])==false){
                $sentencia->bindParam(":nombre",$buscar['nombre']);
            }
            if(empty($buscar['precio'])==false){
                $sentencia->bindParam(":precio",$buscar['precio']);
            }
            if(empty($buscar['categoria'])==false){
                $sentencia->bindParam(":categoria",$buscar['categoria']);
            }
            if(empty($buscar['existencia'])==false){
                $sentencia->bindParam(":existencia",$buscar['existencia']);
            }
            $sentencia->execute();
            $resultado=$sentencia->fetchAll();
            return $resultado;
        }
    }
?>