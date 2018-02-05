<?php
include "..include/dbconnection.php";

if(isset($_POST['submit'])){
	$title= $_POST['title'];
	$page= $_POST['pages'];
	$author= $_POST['author'];
	$year= $_POST['year'];
	

	// $sql = $connect->query("SELECT * FROM `patient` WHERE `patient_firstName` = '$fname' AND `patient_lastName` = '$lname'") or die(mysqli_error());
	// $count = mysqli_num_rows($sql);


	// if($count != 0){
	// 	echo "<script>alert('Already Exist);window.location.href='../DataEntry-Patient.php';</script>";

	// }else{
		mysqli_query($connect, "INSERT INTO booklibrary (title,pages,author,year) VALUES ('$title','$page','$author','$year')") or die(mysqli_error($connect)); 


		header("location: ../addbook.php");

	// }
	





}elseif(isset($_POST['pedit'])){
	$title= $_POST['title'];
	$page= $_POST['pages'];
	$author= $_POST['author'];
	$year= $_POST['year'];
	$bid= $_POST['id'];


	mysqli_query($connect, "UPDATE booklibrary SET  title= '$title' , pages = '$page' , author = '$author' , year = '$year' WHERE `id` =  '$bid' ") or die(mysqli_error($connect));

		header("location: ../addbook.php");


}//elseif(isset($_POST['pdel'])){
	//$id= $_POST['id'];
	//mysqli_query($connect, "DELETE FROM patient WHERE `patient_ID` = '$id' ") or die(mysqli_error($connect));
	//header("location: ../DataEntry-Patient.php");//

}

?>