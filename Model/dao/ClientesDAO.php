<?php
require_once 'config/Conexion.php';

class ClientesDAO {
     private $con;
    
    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function selectAll() {
        $exito=false;
        // sql de la sentencia
        $sql = "select * from Cliente";
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


    public function new($prod){
       
         try{
             $sql = "INSERT INTO  cliente set nombre=:nom, apellido=:ape, email=:emaill";
    //bind parameters
     $stmt = $this->con->prepare($sql);
 
 
 $data = array(
                'nom' =>  $prod->getNombre(),
                 'ape' =>  $prod->getApellido(),
                 'emaill' =>  $prod->getEmail()
                 
         );
 $stmt->execute($data);
 
 if ($stmt->rowCount() > 0) {// verificar si se inserto 
     //rowCount permite obtner el numero de filas afectadas
    
     return  true;
    
 }
 
 }catch(Exception $e){
 echo $e->getMessage();
 return  false;
 }
 
 return  true;  
 
 }
 


    public function update($prod){
       $exito=false;
        try{
            $sql = "UPDATE cliente set nombre=:nom, apellido=:ape, email=:email where idCliente=:id";
   //bind parameters
    $stmt = $this->con->prepare($sql);


$data = array(
               'nom' =>  $prod->getNombre(),
                'ape' =>  $prod->getApellido(),
                'email' =>  $prod->getEmail(),
                'id' =>  $prod->getId()
        );
$stmt->execute($data);

if ($stmt->rowCount() > 0) {// verificar si se inserto 
    //rowCount permite obtner el numero de filas afectadas
   
    return  true;
   
}

}catch(Exception $e){
echo $e->getMessage();
return  false;
}

return  true;  

}

public function delete($prod){
 
     try{
         $sql = "DELETE FROM cliente where idCliente=:id";
//bind parameters
 $stmt = $this->con->prepare($sql);
 $data = array(
    
     'id' =>  $prod->getId()
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

return  true;  

}



public function selectOne($id) {
    try {
        $stmt = $this->con->prepare("SELECT * FROM cliente WHERE idCliente = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    } catch (Exception $e) {
        echo $e->getMessage();
        return null; // O manejar el error de alguna manera
    }
}
public function Search($Nombres) {
    try {
        // Modificar la consulta para buscar por nombre usando LIKE
        $stmt = $this->con->prepare("SELECT * FROM cliente WHERE nombre LIKE :nombres");
        $nombre = $Nombres->getNombre();
   
       $stmt->execute(array(':nombres' => '%' . $nombre . '%'));

        $stmt->execute();

      
        $resultados= $stmt->fetchAll(PDO::FETCH_OBJ);
       

    } catch (Exception $e) {
        echo $e->getMessage();
        return null; // O manejar el error de alguna manera
    }
    return $resultados;
}
}