<?php
session_start();
if($_SESSION['usuario']){
    require '../modelo/facade.php';

    /*Se valida el valor que se envia por el metodo POST, del botón correspondiente
    a editar CONTRASEÑA DEL USUARIO CULTIVADOR, si cumple con el valor, se procede a instanciar 
    al facade para comunicarnos con el DAO permitiendonos actualizar los datos*/
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDITAR2'){ //OK
   if(isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['idu'])){
      $obj=new facade();
      $resul=$obj->updatePassUserById($_POST['idu'],$_POST['pass1'],$_POST['pass2']);
      header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=$resul");
   }
}

      /*Recibimos los datos enviados por el metodo POST 
      PARA EDITAR LA CONTRASEÑA DEL USUARIO PROVEEDOR */
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDITARP'){//OK
  if(isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['idu'])){
     $obj=new facade();
     $resul=$obj->updatePassUserById($_POST['idu'],$_POST['pass1'],$_POST['pass2']);
     header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=$resul");
  }
}

  



/*-------------------INSERT NÚMEROS PARA TODOS LOS USUARIOS----------------*/

  /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de añadir un nuevo número de teléfono USUARIO CULTIVADOR*/
if(isset($_POST['user_edit']) && $_POST['user_edit']=='ADDTEL'){ //OK
  if(isset($_POST['tipo_telefono']) && isset($_POST['telefono']) && isset($_POST['idu'])){
     $obj=new facade();
     $resul=$obj->agregar_telefono($_POST['idu'],$_POST['tipo_telefono'],$_POST['telefono']);

     if($resul=="hecho"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=ok2");
     }else if ($resul=="error"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=bad1");
     }else if ($resul=="tele"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=tel");
     }
    
  }
}

 /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de añadir un nuevo número de teléfono USUARIO PROVEEDOR*/
  if(isset($_POST['user_edit']) && $_POST['user_edit']=='ADDTELP'){ //OK
    if(isset($_POST['tipo_telefono']) && isset($_POST['telefono']) && isset($_POST['idu'])){
       $obj=new facade();
       $resul=$obj->agregar_telefono($_POST['idu'],$_POST['tipo_telefono'],$_POST['telefono']);
  
       if($resul=="hecho"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=ok2");
       }else if ($resul=="error"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=bad1");
       }else if ($resul=="tele"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=tel");
       }
      
    }
  }

  /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de añadir un nuevo número de teléfono USUARIO ADMINISTRADOR*/
  if(isset($_POST['user_edit']) && $_POST['user_edit']=='ADDTELA'){ //OK
    if(isset($_POST['tipo_telefono']) && isset($_POST['telefono']) && isset($_POST['idu'])){
       $obj=new facade();
       $resul=$obj->agregar_telefono($_POST['idu'],$_POST['tipo_telefono'],$_POST['telefono']);
  
       if($resul=="hecho"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=ok2");
       }else if ($resul=="error"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=bad1");
       }else if ($resul=="tele"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=tel");
       }
      
    }
  }

/*-------------------FIN INSERT NÚMEROS PARA TODOS LOS USUARIOS----------------*/


/*-------------------UPDATE NÚMEROS PARA TODOS LOS USUARIOS----------------*/

  /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de actualizar número de teléfono 1  USUARIO CULTIVADOR*/
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TEL1'){ //OK
    if(isset($_POST['telefono1']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior1'])){
       $obj=new facade();
       $resul=$obj->editar_telefono($_POST['idu'],$_POST['telefono1'],$_POST['tel_anterior1']);
 
       if($resul=="hecho"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=ok2");
       }else if ($resul=="error"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=bad1");
       }else if ($resul=="tele"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=tel");
       }else if ($resul=="not"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=not");
      }
      
    }
    
 }
    /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de actualizar número de teléfono 2 USUARIO CULTIVADOR*/
 if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TEL2'){ //OK
  if(isset($_POST['telefono2']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior2'])){
    $obj_fa=new facade();
       $resul1=$obj_fa->editar_telefono($_POST['idu'],$_POST['telefono2'],$_POST['tel_anterior2']);
 
      if($resul1=="hecho"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=ok2");
      }else if ($resul1=="error"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=bad1");
      }else if ($resul1=="tele"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=tel");
      }else if ($resul1=="not"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=not");
     }
  }
 }

   /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de actualizar número de teléfono 1  USUARIO PROVEEDOR*/
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TELP1'){ //OK
  if(isset($_POST['telefono1']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior1'])){
     $obj=new facade();
     $resul=$obj->editar_telefono($_POST['idu'],$_POST['telefono1'],$_POST['tel_anterior1']);

     if($resul=="hecho"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=ok2");
     }else if ($resul=="error"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=bad1");
     }else if ($resul=="tele"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=tel");
     }else if ($resul=="not"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=not");
    }
    
  }
  
}
  /*Recibimos los datos eviados por el metodo POST para realizar la acción
de actualizar número de teléfono 2 USUARIO PROVEEDOR*/
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TELP2'){ //OK
if(isset($_POST['telefono2']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior2'])){
  $obj_fa=new facade();
     $resul1=$obj_fa->editar_telefono($_POST['idu'],$_POST['telefono2'],$_POST['tel_anterior2']);

    if($resul1=="hecho"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=ok2");
    }else if ($resul1=="error"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=bad1");
    }else if ($resul1=="tele"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=tel");
    }else if ($resul1=="not"){
     header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=not");
   }
}
}

/*Recibimos los datos eviados por el metodo POST para realizar la acción
  de actualizar número de teléfono 1  USUARIO ADMINISTRADOR*/
  if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TELA1'){ //OK
    if(isset($_POST['telefono1']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior1'])){
       $obj=new facade();
       $resul=$obj->editar_telefono($_POST['idu'],$_POST['telefono1'],$_POST['tel_anterior1']);
  
       if($resul=="hecho"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=ok2");
       }else if ($resul=="error"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=bad1");
       }else if ($resul=="tele"){
         header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=tel");
       }else if ($resul=="not"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=not");
      }
      
    }
    
  }
    /*Recibimos los datos eviados por el metodo POST para realizar la acción
  de actualizar número de teléfono 2 USUARIO ADMINISTRADOR*/
  if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDIT_TELA2'){ //OK
  if(isset($_POST['telefono2']) &&  isset($_POST['idu']) &&  isset($_POST['tel_anterior2'])){
    $obj_fa=new facade();
       $resul1=$obj_fa->editar_telefono($_POST['idu'],$_POST['telefono2'],$_POST['tel_anterior2']);
  
      if($resul1=="hecho"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=ok2");
      }else if ($resul1=="error"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=bad1");
      }else if ($resul1=="tele"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=tel");
      }else if ($resul1=="not"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=not");
     }
  }
  }
/*-------------------FIN UPDATE NÚMEROS PARA TODOS LOS USUARIOS----------------*/

 


    //Se valida el valor que se envia por el metodo POST, del botón correspondiente
    //a editar DATOS DE USARIO CULTIVADOR, si cumple con el valor, se procede a instanciar 
    //al facade para comunicarnos con el DAO permitiendonos actualizar los datos
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDITAR1' ){//OK
    if(isset($_POST['nombres']) &&  isset($_POST['apellidos']) && isset($_POST['sexo'])
     && isset($_POST['correo'])){
       $obj=new facade();
    
        $resul=$obj->correoUnico($_POST['idu'],$_POST['nombres'],$_POST['apellidos'],
        $_POST['correo']);
      
      if($resul=="hecho"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=ok");
      }if($resul=="email"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=em");
      }if($resul=="not"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=not");
      }if($resul=="fail"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/user_perfil.php?iderror=bad");
      }
    }
   }
      /*Recibimos los datos enviados por el metodo POST 
      PARA EDITAR LOS DATOS DEL USUARIO PROVEEDOR */
if(isset($_POST['user_edit']) && $_POST['user_edit']=='EDITARD' ){//OK
    if(isset($_POST['nombres']) &&  isset($_POST['apellidos']) && isset($_POST['sexo']) 
    && isset($_POST['correo']) ){

       $obj=new facade();
       $resul=$obj->correoUnico($_POST['idu'],$_POST['nombres'],$_POST['apellidos'],
       $_POST['correo']);
      if($resul=="hecho"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=ok");
      }if($resul=="email"){
        header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=em");
      }if($resul=="fail"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/proveedor_inicio.php?iderror=bad");
      }
    }
   }

   /*Recibimos los datos enviados por el metodo POST 
      PARA EDITAR LOS DATOS DEL USUARIO ADMINISTRADOR */
if(isset($_POST['Sadmon']) && $_POST['Sadmon']=='EDITARD' ){//OK
      if(isset($_POST['nombres']) &&  isset($_POST['apellidos']) && isset($_POST['sexo']) &&
      isset($_POST['correo']) ){
    
      $obj=new facade();
      $resul=$obj->correoUnico($_POST['idu'],$_POST['nombres'],$_POST['apellidos'],
      $_POST['correo']);
      if($resul=="hecho"){
          header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=ok");
      }if($resul=="email"){
          header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=em");
      }if($resul=="fail"){
          header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=bad");
      }
    }
  }

   //Actualizando contraseña de admon
if(isset($_POST['Sadmon']) && $_POST['Sadmon']=='EDITAR'){//OK
    $ida=$_SESSION['usuario'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $obj=new facade();
    $result=$obj->updatePassUserById($ida,$pass1,$pass2);
    header("Location: http://localhost/proyecto_grado/croptech/vista/admon_inicio.php?iderror=$result");
  }
     //Actualizando contraseña del usuario (Lo hace el usuario administrador)
if(isset($_POST['Sadmon']) && $_POST['Sadmon']=='EDITAR' && isset($_POST['idu'])){
    $idu=$_POST['idu'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $obj=new facade();
    $result=$obj->updatePassUserById($idu,$pass1,$pass2);
    header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=$result");
  
  }

    //Eliminando usuario (Lo hace el usuario administrador)
  if(isset($_GET['idu']) && $_GET['accion']=='delete'){
    $obj=new facade();
    $resul=$obj->deleteFullUser($_GET['idu']);
    if($resul){
       header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=ok2");
    }else{
       header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=bad2");
    }
 }

  //actualizando datos de usuario (Lo hace el usuario administrador)
 if(isset($_POST['admon_edit']) && $_POST['admon_edit']=='EDITAR_A' ){
  if(isset($_POST['nombres']) &&  isset($_POST['apellidos']) && isset($_POST['sexo']) &&
  isset($_POST['telefono']) && isset($_POST['correo']) ){
     $obj=new facade();
     $resul=$obj->correoUnico($_POST['idu'],$_POST['nombres'],$_POST['apellidos'],
     $_POST['correo'],$_POST['telefono']);
     if($resul=="hecho"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=ok");
     }if($resul=="telefono"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=tel");
     }if($resul=="email"){
       header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=em");
     }if($resul=="fail"){
      header("Location: http://localhost/proyecto_grado/croptech/vista/admon_usuarios.php?iderror=bad");
     }
    
  }
 }

}else{
    echo "<script type='text/javascript'>
    alert('ERROR!! al iniciar sesion');
    window.location='../index.php';
    </script>";}
  ?>