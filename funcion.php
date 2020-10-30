<?php
   

    function tomarDatos(){

      if (isset($_POST['nombre'])) {

        $_SESSION['datos'] = isset($_SESSION['datos']) ? $_SESSION['datos'] : array() ;
      $_SESSION['contador'] = isset($_SESSION['contador']) ? $_SESSION['contador'] : 0 ;

      
        $datos = $_SESSION['datos'];
        $contador = $_SESSION['contador'];
    
        #if (isset($_POST['estado'])) {
            # code...
            array_push($datos, [ "user$contador" => ['nombre'=> $_POST['nombre'], 'apellido' => $_POST['apellido'], 'tecnico' => $_POST['tecnico'], 'estado' => $_POST['estado']  ]] );
            
            $_SESSION['datos'] = $datos;
            $_SESSION['contador'] += 1;

            header("Location: index.php");
            exit();
        #}else{
            #array_push($datos, [ "user$contador" => ['nombre'=> $_POST['nombre'], 'apellido' => $_POST['apellido'], 'tecnico' => $_POST['tecnico'], 'noactivo' => $_POST['noactivo']  ]] );
            
            #$_SESSION['datos'] = $datos;
            #$_SESSION['contador'] += 1;
           # header("Location: index.php");
          #  exit();

    
        #}
    
        
      } 
      

    }

    function Eliminar($estudiante){



      $_SESSION['datos'] = isset($_SESSION['datos']) ? $_SESSION['datos'] : array() ;
      $datos = $_SESSION['datos'];

      //var_dump($estudiante);
      for($i = 0; $i< count($datos) ; $i++ ){
        unset($datos[$i][$estudiante]);
      }
      
      
      $_SESSION['datos'] = $datos;
      header("Location: index.php");
      exit();
    }
    

  function BuscarId($buscar){
    $_SESSION['datos'] = isset($_SESSION['datos']) ? $_SESSION['datos'] : array() ;
    $datos = $_SESSION['datos'];
    $r = [];

    for ($i=0; $i < count($datos) ; $i++) { 
      # code...
      if (isset($datos[$i][$buscar])) {
        # code...
          array_push($r,$datos[$i][$buscar]['nombre']);
          array_push($r,$datos[$i][$buscar]['apellido']);
          array_push($r,$datos[$i][$buscar]['tecnico']);
          if (isset($datos[$i][$buscar]['estado'])) {
            # code...
            array_push($r, 'activo');
            break;
          }else {
            # code...
            array_push($r, 'no activo');
            break;
          }
        
      }
    }
     return $r;
  }

  //modificar

  function filtro($buscarr){ // funcion 1

    $_SESSION['datos'] = isset($_SESSION['datos']) ? $_SESSION['datos'] : array() ;
    $datoss = $_SESSION['datos'];
    $r = [];
    $rr = [];
    
    $i = 0;
    while($i < count($datoss) ) { // for 1
      # code...
      #["...","Redes","Software","Multimedia","Mecatronica","Seguridad informática"];
    //  var_dump($buscar);
          if (isset($datoss[$i]["user$i"]['tecnico'])) {// end if 1
            
             //var_dump($datoss);
           // switch ($buscarr) { // switch 1
             // case 'Multimedia':

              if ($datoss[$i]["user$i"]['tecnico'] == $buscarr) {
                
                array_push($r,$datoss[$i]["user$i"]['nombre']);
                array_push($r,$datoss[$i]["user$i"]['apellido']);
                array_push($r,$datoss[$i]["user$i"]['tecnico']);
                array_push($r,$datoss[$i]["user$i"]['estado']);
                array_push($rr, [ "user$i" => ['nombre'=> $r[0], 'apellido' => $r[1], 'tecnico' => $r[2], 'estado' => $r[3]  ]] );
                var_dump($rr);
                $r = [];
                $i++;
              }
                
            //    break;
              
          //  } // endswitch 1



          }// end if 1

          else{
            $i++;
          }

    } // endfor 1
     return $rr;

  } // endfuncion

  function modificar1(){

    if (isset($_POST['nombre'])) {

      $_SESSION['datos'] = isset($_SESSION['datos']) ? $_SESSION['datos'] : array() ;
   // $_SESSION['contador'] = isset($_SESSION['contador']) ? $_SESSION['contador'] : 0 ;
      $_SESSION['key'] = isset($_SESSION['key']) ? $_SESSION['key'] : '0';
    
      $key = $_SESSION['key'];
      $datos = $_SESSION['datos'];
      //$contador = $_SESSION['contador'];
  
      for ($i=0; $i < count($datos) ; $i++) { 
        # code...
        if (isset($datos[$i][$key])) {
          # code...
          $datos[$i][$key]['nombre'] = $_POST['nombre'];
          $datos[$i][$key]['apellido'] = $_POST['apellido'];
          $datos[$i][$key]['tecnico'] = $_POST['tecnico'];
          $datos[$i][$key]['estado'] = $_POST['estado'];

          $_SESSION['datos'] = $datos;
          //$_SESSION['contador'] += 1;
        break;
        }
        
        
      }
      header("Location: index.php");
      exit();

      
      #if (isset($_POST['activo'])) {
          # code...
          //array_push($datos, [ "user$contador" => ['nombre'=> $_POST['nombre'], 'apellido' => $_POST['apellido'], 'tecnico' => $_POST['tecnico'], 'activo' => $_POST['activo']  ]] );
          
      #}else{
          //array_push($datos, [ "user$contador" => ['nombre'=> $_POST['nombre'], 'apellido' => $_POST['apellido'], 'tecnico' => $_POST['tecnico'], 'noactivo' => $_POST['noactivo']  ]] );
          
     #     $_SESSION['datos'] = $datos;
         // $_SESSION['contador'] += 1;
    #      header("Location: index.php");
   #       exit();

  
  #    }
  
      
    } 
    

  }

    
 

?>

