<?php
	 $conexion=mysql_connect("localhost","root","");
           if(!$conexion)
          {
             die('no se ha podido establecer la conexion por el sigueinte error'.mysql_error());
           }	
	  mysql_select_db("db_ideaa",$conexion);

?>