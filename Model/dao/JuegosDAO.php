<?php
require_once 'config/Conexion.php';

class JuegosDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function selectAll() {
        // sql de la sentencia
        $sql = "select * from Juegos";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        // retorna cada fila como un objeto de una clase anonima
        // cuyos nombres de atributos son iguales a los nombres de las columnas retornadas
        // retorna datos para el controlador
        return $resultados;
    }
    
    public function selectAllxParam($parametro) {


    }

    public function insert($id, $nombre, $descripcion, $precio, $categoria, $Plataforma,$Desarrollador, $FechaLanzamineto,
    $ModoJuego){

$stmt = $pdo->prepare("INSERT INTO Juegos (id, nombre, descripcion, precio, categoria, plataforma, id_desarrollador, fecha_lanzamiento, modo_juego)
                      VALUES (:id, :nombre, :descripcion, :precio, :categoria, :plataforma, :id_desarrollador, :fecha_lanzamiento, :modo_juego)");

$stmt->bindParam(':id', $id);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->bindParam(':precio', $precio);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':plataforma', $Plataforma);
$stmt->bindParam(':id_desarrollador', $Desarrollador);
$stmt->bindParam(':fecha_lanzamiento', $FechaLanzamineto);
$stmt->bindParam(':modo_juego', $ModoJuego);

$stmt->execute();

    }
    public function update($cat){


    }

}
