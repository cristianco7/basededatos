<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$conexion=pg_connect("host=localhost dbname=postgres user=postgres password=vergamo1");
$consulta="SELECT * FROM repuestos.usuario WHERE usuario='$usuario' and contraseÑa='$contraseña'";
$resultado=pg_query($conexion,$consulta);

$filas=pg_num_rows($resultado);
 if ($filas>0) {
  header ("location:home.html");
}
else {
  header ("location:index.html");
}
pg_free_result($resultado);
pg_close($conexion);


?>