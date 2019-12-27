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
                echo "Se creo la tabla productos de forma existosa";
            } catch (\Throwable $th) {
                echo "Error al crear la tabla productos".$th->getMessage();
            }
        }
    }
?>