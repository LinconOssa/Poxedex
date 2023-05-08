<?php

//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    include("db.php");

    $sql = "SELECT * FROM pokedex
                WHERE (nombre LIKE '%" . $keywords ."%' OR nombre2 LIKE '%" . $keywords . "%' OR nombre3 LIKE '%" . $keywords . "%'     
                OR id LIKE '%" . $keywords . "%' OR id2 LIKE '%" . $keywords . "%' OR id3 LIKE '%" . $keywords . "%')
                ORDER BY id";

    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    $count_results = mysqli_num_rows($query);
    $id = $row['id'];
    $id2 = $row['id2'];
    $id3 = $row['id3'];

    //Si hay resultados
    if ($count_results > 0) {
        header("location: ver-mas/mas-1.php?id=$id");

    }else {
        //Si no hay registros encontrados
        header("location: index.php?id=$id");
    }
}
?>
