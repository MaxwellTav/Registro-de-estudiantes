<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="diseno.css">
     <link rel="stylesheet" href="bootstrap-4.4.1-dist\css\bootstrap.min.css">
   <!-- <script src="bootstrap-4.4.1-dist\css\bootstrap.min.css"></script>-->

   <?php


    include("funcion.php");
 


    session_start();
    
   // var_dump($_SESSION['datos']);

    modificar1();

    global $datoo;
    global $key;
    
    

    if ($_GET) {
        # code...
        $datoo = BuscarId($_GET['estudiante']);
       // var_dump($datoo);
        $key = $_GET['estudiante'];
        $_SESSION['key'] = $key;
    }

    

    $carreras = ["...","Redes","Software","Multimedia","Mecatronica","Seguridad informática"];
    
    
    
?>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="Modificar.php" method="post">
                    <fieldset>
                        <legend class="text-center header">Modificar Estudiante</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Nombre<i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control"value=' <?php echo $datoo[0] ;?>' >
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Apellido<i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="apellido" type="text" placeholder="Apellido" class="form-control" value='<?php echo $datoo[1] ;?>' >
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Carreras<i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">

                            <select class="custom-select" for="Carrera" id="Carreras" name="tecnico" >

                            <?php foreach($carreras as $tecnico ):?>

                                <?php if($tecnico != $datoo[2]): ?>
                                    <option value="<?php echo $tecnico ; ?>" > <?php echo $tecnico ; ?></option>
                                
                                <?php else:?>
                                    <option selected value="<?php echo $tecnico ; ?>" > <?php echo $tecnico ; ?></option>
                                <?php endif; ?>

                            <?php endforeach;?>

                            </select>



                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">Estado<i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">

                                <?php if ($datoo[3] == "activo"):?>

                                    <label for="activo">Activo</label>
                                    <input type="checkbox" checked name="estado" id="" value="activo" >

                                    <label for="desactivado">Desactivado</label>
                                    <input type="checkbox" name="estado" id="" value="no activo" >

                                    <?php  else: ?>
                                        <label for="activo">Activo</label>
                                    <input type="checkbox"  name="estado" id="" value="activo" >

                                    <label for="desactivado">Desactivado</label>
                                    <input type="checkbox" name="estado" id="" checked value="no activo" >

                                <?php endif; ?>
                            

                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Modificar</button>
                                <a href="index.php" class="btn btn-warning">Volver a la pagina Principal </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>