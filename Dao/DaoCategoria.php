<?php

require_once 'MySqlCon.php';
require_once '/../Model/Categoria.php';
//require_once '/xampp/htdocs/CafeVinil/Model/Pagina.php';
class DaoCategoria   {
    //put your code here
    function BuscarCategoria()
    {
        $conn = new MySqlCon();
        $connect = $conn->connect();
        $listCategorias = array();
        
        if(mysqli_connect_errno())
           {
            printf("Error de conexión: %s\n", mysqli_connect_error());
           } 
           $stmt=$connect->prepare("call sp_buscarCategorias()");
           $stmt->execute();
           $stmt->bind_result($idCategoria,$nombre);
               $contador=0;
           while ($stmt->fetch())
           {
               $categoria = new Categoria(NULL, NULL);
               $categoria->setIdCategoria($idCategoria);
               $categoria->setNombreCategoria($nombre);
               $listCategorias[$contador]=$categoria;
               $contador++;
           }
           return $listCategorias;

    }


}
