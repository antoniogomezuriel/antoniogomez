<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $bd="formulario";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$bd)or die("Problemas al Conectar");	
 mysqli_select_db($con,$bd)or die("problemas al conectar con la base de datos");


 //recuperar las variables

 $nombre=$_POST['nombre'];
 $Numero=$_POST['Numero'];
 $email=$_POST['email'];
 $direccion=$_POST['direccion'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO formulario VALUES('".$nombre."',
           '".$Numero."',
           '".$email."',
            '".$direccion."')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='formulario.html'>Volver</a>";
 }
?>