<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/2ef3fe6e41.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilos.css">
        <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Pokebola-pokeball-png-0.png/800px-Pokebola-pokeball-png-0.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/402bbae3b2.js" crossorigin="anonymous"></script>
        <title>Pokédex</title>
    </head>

    <body>
  
        <header><div style="position: fixed; 	z-index: 1;	width: 100%; height: 70px; background: rgb(247, 37, 37);display: flex; flex-direction: row;
	text-align: right;">
        <div id="logo" >
            <img src="ima/l.png" >
  
            
            </div>
            <div id="perfil">
           
            <img src="ima/k.png" >
            
            </div>
     
            <nav id="menu">
                    <ul>
                        
                        <li><a href="../index.php"><p>Inicio</p> </a></li>
                        <li><a href="../evolucioni/index.php"><p> Evolucion inicial</p></a></li>
                        <li><a href="index.php"><p>Evolucion media </p> </a></li>
                        <li><a href="../evolucionmax/index.php"><p>Evolucion maxima</p> </a></li>
                        <li><a href="mailto:ossalincon422@gmail.com"><p>Contacteme</p> </a></li>
                    </ul>
                </nav>

        </header>
        </div>
        <section>
        <div id="buscador">
            <h1>BIENVENIDO A LA POKEDEX</h1>
            <form action="buscar.php" method="POST">
                <input  type="text" id=keywords placeholder="Buscar... " name="keywords" size="30" maxlength="30" >
                <input type="submit" name="search" id="search" value="⚡Buscar⚡" >
            </form>
            
            </div>

            
            <div id="contenedor-articulos">
    
            <?php  include("registro.php")?>
           
            </div>
            
        </section>
          <footer>
            <div id="contenedor-footer" >
                <p>Lincon David Ossa Duarte &copy; 2022 <a href="mailto:ossalincon422@gmail.com">Contacatme</a></p>                
            </div>
		
	</footer>

    </body>        


</html>  