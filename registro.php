<?php 
 $inc=include("db.php");
 $sql="SELECT *  FROM pokedex";  
 $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);
 if ($inc) {
    $consulta= "SELECT * FROM pokedex";
    $resultado= mysqli_query($conexion,  $consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $id=$row['id'];
            $nombre=$row['nombre'];
            $img=$row['img'];
            $descripcion=$row['descripcion'];
            $altura=$row['altura'];
            $peso=$row['peso'];
            $sexo=$row['sexo'];
            $tipo=$row['tipo'];
            $debilidad=$row['debilidad'];
            $id2=$row['id2'];
            $img2=$row['img2'];
            $nombre2=$row['nombre2'];
            $descripcion2=$row['descripcion2'];
            $altura2=$row['altura2'];
            $peso2=$row['peso2'];
            $id3=$row['id3'];
            $img3=$row['img3'];
            $nombre3=$row['nombre3'];
            $descripcion3=$row['descripcion3'];
            $altura3=$row['altura3'];
            $peso3=$row['peso3'];


            ?>       
            <?php 
            if($nombre == ""){
               
            }else{
              ?> 
                        <article>
                    <div class="contenedor-articulo">
                    
                        <div id="imagen-articulo">
                              <p>N◦: <?php echo "$id" ?> </p> 
                            <img src="<?php echo "$img" ?>">
                           
                        </div>
                        
                        <div id="contenido-articulo">
                            <h2><?php echo "$nombre"  ?></h2>
                            <a href="ver-mas/mas-1.php?id=<?php echo $row['id'] ?>"><img src="ima/l.png" ></a>
                            
                     
       

                        </div>
                    </div>
                </article>
              <?php    
            }
            ?> 
                        <?php 
            if($nombre2 == ""){
               
            }else{
              ?> 
                        <article>
                    <div class="contenedor-articulo">
                    
                        <div id="imagen-articulo">
                              <p>N◦: <?php echo "$id2" ?> </p> 
                            <img src="<?php echo "$img2" ?>">
                           
                        </div>
                        
                        <div id="contenido-articulo">
                            <h2><?php echo "$nombre2"  ?></h2>
                            <a href="ver-mas/mas-2.php?id2=<?php echo $row['id2'] ?>"><img src="ima/l.png" ></a>
                            
                     
       

                        </div>
                    </div>
                </article>
                
              <?php    
            }
            ?> 
                 <?php 
            if($nombre3 == ""){
               
            }else{
              ?> 
                              <article>
                    <div class="contenedor-articulo">
                    
                        <div id="imagen-articulo">
                              <p>N◦: <?php echo "$id3" ?> </p> 
                            <img src="<?php echo "$img3" ?>">
                           
                        </div>
                        
                        <div id="contenido-articulo">
                            <h2><?php echo "$nombre3"  ?></h2>
                            <a href="ver-mas/mas-3.php?id3=<?php echo $row['id3'] ?>"><img src="ima/l.png" ></a>
                            
                     
       

                        </div>
                    </div>
                </article>
                
              <?php    
            }
            ?> 

         
            <?php
                }
            }
        }
        ?>