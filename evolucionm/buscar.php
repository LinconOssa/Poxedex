<?php
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    include("db.php");

    $sql = "SELECT * FROM pokedex
                WHERE (nombre2 LIKE '%" . $keywords . "%'
                OR descripcion2 LIKE '%" . $keywords . "%'OR id2 LIKE '%" . $keywords . "%')
                ORDER BY id2";

    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    $count_results = mysqli_num_rows($query);
    $id2 = $row['id2'];

    //Si hay resultados
    if ($count_results > 0) {
        header("location: ../ver-mas/mas-2.php?id2=$id2");
    }else {
        //Si no hay registros encontrados
        header("location: index.php?id=$id");
    }
}
?>