<?php
    
    include("database.php");

    $ide=$_POST['uide'];
    $mode=$_POST['umodelo'];
	$mar = $_POST['umarca'];
    $prec=$_POST['upre'];
	$col=$_POST['ucolor'];
		
	$photo_url_db = "images/".$_FILES['photo']['name'];
	
	if($photo_url_db =="jpg" or $photo_url_db =="png"){
		
		$file_name = $_FILES['photo']['name']; //'name nunca cambia, es de sistema'
		$file_type = $_FILES['photo']['type']; //trae el tipo de la foto
		$file_size = $_FILES['photo']['size']/1024; //trae el tamaño del archivo (default:KB) se divide para que sea en Megabytes
		$file_tmp = $_FILES ['photo']['tmp_name']; //el nombre de la carpeta donde se esta guardando temporalmente
		$photo_url_db = "images/".$_FILES['photo']['name'];
	
				
	}else {
		echo "<script language='javascript'>alert('File Fake')</script>";
		$photo_url_db = "images/car.png";	
	}
			
	//1. Create query
	$sql_validation2 = "SELECT * FROM autos WHERE identification = '$identification' ";
	//2. Execute query
	$result2=$conn->query($sql_validation2);
	//3. Validation
	if($result2->num_rows == 0){
		$sql="INSERT INTO autos (id, modelo,marca,precio,color,imagen) VALUES('$ide','$mode','$mar','$prec','$col','$photo_url_db')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Auto regisrado con exito')</script>";
			move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$_FILES['photo']['name']); //mueve la foto a la carpeta
			header("Refresh:0;url=lista_admin.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Auto ya existe')</script>";
		header("Refresh:0;url=lista_admin.php");
	}	
	

?>