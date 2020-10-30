<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="diseno.css">

    <?php

    include("funcion.php");
 
     session_start();
     if(isset($_GET['estudiante'])){
        // var_dump($_GET);
        Eliminar($_GET['estudiante']);
     }

     # Esta era al funcion para el fitro pero nada de funciona 
     /*if (isset($_GET['filtro'])) {
         # code...
         global $f;
         $f = filtro($_GET['filtro']);
         //var_dump($f);
     }*/

     $carreras = ["...","Redes","Software","Multimedia","Mecatronica","Seguridad informática"];
    ?>

</head>
<body>

<div class="container">
        <div class=row>
            <div class="col-3">
                <span>Pagina de Inicio</span>
            </div>
            <div class="col-7">

                <?php foreach($carreras as $filtro ):?>

                    <a href='<?php  echo "index.php?filtro=". $filtro ;?>' class="btn btn-secondary" > <?php echo $filtro;?> </a>

                <?php endforeach;?>

            </div>
        </div>
    </div> 

<?php// if(!isset($_GET['filtro'])):?>

       

    <?php  $datos = $_SESSION['datos']; ?>

<table class="table">

<tr>
    

  <th scope="col">Nombre</th>

  <th scope="col">Apellido</th>

  <th scope="col">Carrera</th>

  <th scope="col">Estado</th>

  <th scope="col">...</th>

</tr>

<?php foreach($datos as $key ): ?>
    
    <?php foreach($key as $clave ): ?>
        <tr   id="<?php echo key($key); ?> " > 
        
            <?php foreach($clave as $chave => $valor ): ?> 
                <?php if($valor != "no activo"):?>
                    <td><?php echo $valor?></td>
                <?php else:?>
                    <td id="block"><?php echo $valor?></td>
                <?php endif;?> 
            <?php endforeach ;?>
            <td><a class="btn btn-danger" href=<?php  echo "index.php?estudiante=". key($key) ;?>>Elimiar</a>
            <a class="btn btn-warning" href=<?php  echo "Modificar.php?estudiante=". key($key) ;?>>Modificar</a></td>

        </tr>       
    <?php endforeach ;?>
    
<?php endforeach ;?>

</table>
<a href="Registro.php" class="btn btn-primary">Entrar a Registro </a>

   
<?php //endif;?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>