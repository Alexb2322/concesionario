<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="script.js"></script>
  
</head>
<body>

<div class="container">
  <h2>Agregar Automovil</h2>
  <p>Formulario de registro de automoviles</p>
  <form  name="f1" action="registro.php" class="was-validated" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="uname">Id:</label>
      <input type="number" class="form-control" id="uide" placeholder="Digita id" name="uide" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Por favor rellena el campo.</div>
    </div>
    <div class="form-group">
      <label for="uname">Modelo:</label>
      <input type="number" class="form-control" id="umodelo" placeholder="Digita modelo" name="umodelo" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Por favor rellena el campo.</div>
    </div>	
	<div class="form-group">
      <label for="uname">Marca:</label>
      <input type="text" class="form-control" id="umarca" placeholder="Digita marca" name="umarca" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Por favor rellena el campo.</div>
    </div>
	 <div class="form-group">
      <label for="uname">Precio:</label>
      <input type="number" class="form-control" id="upre" placeholder="Digita precio" name="upre" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Por favor rellena el campo.</div>
    </div>
	<div class="form-group">
      <label for="uname">Color:</label>
      <select name="ucolor" class="form-control">
	  <option value="R">Rojo</option>
	  <option value="B">Blanco</option>
	  <option value="G">Gris</option>
	  <option value="N">Negro</option>
	  </select>
      <div class="invalid-feedback">Por favor rellena el campo.</div>
    </div>        	
	
	<div class="form-group" enctype="multipart/form-data>
	<tr>
		<label for="pwd">Ingresar imagen:</label>
		<input type="file" name="photo" accept="image/gif, .jpg, .png">></td> 
	<!--Llamar a Jquery y verificar -->
	</tr>
	</div>
	   <button type="submit" id="aceptar" class="btn btn-primary" name="nombreboton">Registrar</button>
  </form>
</div>

</script>
</body>
</html>