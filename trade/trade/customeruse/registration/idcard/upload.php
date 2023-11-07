<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";
    $user=$_POST['username'];
	
	$sql = "SELECT * FROM license_info WHERE username='$user' ";
	$res = mysqli_query($conn,  $sql);
	$row=mysqli_num_rows($res);
	if($row==1){
	

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "UPDATE license_info SET idcard='$new_img_name' WHERE username='$user'";
				mysqli_query($conn, $sql);
				echo"<script> alert('Succesfully Attached!'); window.location='../choice.html'</script>";
			}else {
				echo"<script> alert('You can't upload files of this type!'); window.location='idupload.php'</script>";
				
			}
		}
	}else {
		
	
		echo"<script> alert('unknown error occurred!'); window.location='idupload.php'</script>";
	}

}else {
	echo"<script> alert('User Name not found!'); window.location='idupload.php'</script>";
	
}
}