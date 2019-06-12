<html>
	<head><title>AUTOS</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 </head>
	<body>		
  <br><h2 align="center">Lista Autos</h2>
	<table>
	<th width="910px" style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 150px"><a href="index.php"><button type="button" class="btn btn-primary btn-lg">
	Regresar</button></a></th>
	</table>
  <div class="container">
  <table class="table" id="tabla">
    <thead class="thead-light">
      <tr>		
			
			<th>Id</th>			
			<th>Modelo</th>			
			<th>Marca</th>      
			<th>Precio</th>      
			<th>Color</th>      
			<th>Imagen</th>      
			  						                     
      </tr>
	</thead> 	
   </div>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM autos";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['id']."</td>";
			  echo "<td>".$row['modelo']."</td>";
			  echo "<td>".$row['marca']."</td>";
			  echo "<td>".$row['precio']."</td>";
			  echo "<td>".$row['color']."</td>";
			  echo "<td>".$row['imagen']."</td>";
			}
		  echo "</table>";
	  }else{
		  echo " No hay Autos registrados";
	  }

?>
<html>
<br><br>
<div class="well-sm col-sm-12">
<div class="btn-group pull-right">
	<td></td>
	<td><a href="agregar.php"><button type="button" id="agregar" name='agregar' class="btn btn-info">Agregar Auto</button></a>
	</td><td></td><td></td><td></td>
	<td><button type="button" id="eliminar" name='eliminar' class="btn btn-info" onclick="eliminar()">Eliminar Auto</button>
	</td>
</div>
</div>

<script type="text/javascript">
var seleccionado=null;            //contiene la fila seleccionada

function onclickHandler() {
        if(seleccionado==this) {
            this.style.backgroundColor="transparent";
            seleccionado=null;
        }
        else {
            if(seleccionado!=null) 
                seleccionado.style.backgroundColor="transparent";
            this.style.backgroundColor="#e0b";
            seleccionado=this;
        }        
    }

var filas=document.getElementById("tabla").getElementsByTagName("tr");
for(var i=0; i<filas.length; i++) {
    filas[i].onclick=onclickHandler;
}

function eliminar() {
    if(seleccionado==null) return alert("Seleccione una fila haciendo click sobre ella");
    seleccionado.parentNode.removeChild(seleccionado);
}

</script> 

</html>