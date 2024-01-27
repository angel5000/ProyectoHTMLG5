<?php
require_once 'config/Conexion.php';

class JuegosDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll() {
        $exito=false;
        // sql de la sentencia
        $sql = "SELECT jg.idJuego,jg.NombJuego,jg.Descripcion,jg.precio,ct.Categoria,pf.Plataformas,
        ds.Desarrolador as Desarrollador ,jg.Fecha_Lanzamiento, mj.Modojuego as ModoJuego,
        jg.Puntuacion, jg.Estado from juegos jg join categorias ct on jg.Categoria=ct.idCategoria join plataforma pf on jg.Plataforma=pf.idplatf
        join desarrolladores ds on jg.Desarrollador=ds.idDevp  join modojuego mj on jg.ModoJuego=mj.idModJuego;";
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






     public function selectById($id) {
         // sql de la sentencia
      try{
        $sql = "SELECT NombJuego FROM Juegos WHERE idJuego = :id";
        
        // preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Obtener los resultados
        $resultados = $stmt->fetch(PDO::FETCH_OBJ);
var_dump( $resultados);
        // Cerrar la conexión
       // $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }

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
    public function updatejg($jg){
        try{
            $sql = "UPDATE Juegos Set Estado = :est where idJuego=:id";
   //bind parameters
    $stmt = $this->con->prepare($sql);
    $data = array(
        'est' =>  $jg->getEstado(),
        'id' =>  $jg->getIdj()
   );
   $stmt->execute($data);
   
   if ($stmt->rowCount() > 0) {// verificar si se inserto 
    //rowCount permite obtner el numero de filas afectadas
   
    return  true;
   
   }
   
   }catch(Exception $e){
   echo $e->getMessage();
   //return  false;
   }

    }

}
