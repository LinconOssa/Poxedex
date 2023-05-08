<?php
//Si se ha pulsado el botón de buscar
if (isset($_POST['search'])) {
    //Recogemos las claves enviadas
    $keywords = $_POST['keywords'];

    //Conectamos con la base de datos en la que vamos a buscar
    include("db.php");

    $sql = "SELECT * FROM pokedex
                WHERE (nombre3 LIKE '%" . $keywords . "%'
                OR descripcion3 LIKE '%" . $keywords . "%'OR id3 LIKE '%" . $keywords . "%')
                ORDER BY id3";

    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
    $count_results = mysqli_num_rows($query);
    $id3 = $row['id3'];

    //Si hay resultados
    if ($count_results > 0) {
        header("location: ../ver-mas/mas-3.php?id3=$id3");
    }else {
        //Si no hay registros encontrados
        header("location: index.php?id=$id");
    }
}
?>