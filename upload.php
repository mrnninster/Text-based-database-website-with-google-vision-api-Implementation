<?php
//phpinfo();
ini_set("display_errors",1);
error_reporting(E_ALL);


if(isset($_POST["Confirm"])){

if(!isset($_FILES["image1"])||!isset($_FILES["image2"])||!isset($_FILES["image3"])||!isset($_FILES["image4"])||!isset($_FILES["image5"])){
	echo "<script>
alert('No Image File')
	</script>";
	sleep(3);
	echo "<script>
window.location.href=('index.php?insert_product','Home')
	</script>";
	die();

}else{


$imagesone=$_FILES['image1']['name'];
$imagestwo=$_FILES['image2']['name'];
$imagesthree=$_FILES['image3']['name'];
$imagesfour=$_FILES['image4']['name'];
$imagesfive=$_FILES['image5']['name'];


$imageone= "images/"."$imagesone";
$imagetwo= "images/"."$imagestwo";
$imagethree= "images/"."$imagesthree";
$imagefour= "images/"."$imagesfour";
$imagefive= "images/"."$imagesfive";


$imageone_tmp_dir=$_FILES['image1']['tmp_name'];
$imagetwo_tmp_dir=$_FILES['image2']['tmp_name'];
$imagethree_tmp_dir=$_FILES['image3']['tmp_name'];
$imagefour_tmp_dir=$_FILES['image4']['tmp_name'];
$imagefive_tmp_dir=$_FILES['image5']['tmp_name'];


$image_dir='images/';
$imgExtone=strtolower(pathinfo($imagesone,PATHINFO_EXTENSION));
$imgExttwo=strtolower(pathinfo($imagestwo,PATHINFO_EXTENSION));
$imgExtthree=strtolower(pathinfo($imagesthree,PATHINFO_EXTENSION));
$imgExtfour=strtolower(pathinfo($imagesfour,PATHINFO_EXTENSION));
$imgExtfive=strtolower(pathinfo($imagesfive,PATHINFO_EXTENSION));
$validate_extensions=array('jpeg','jpg','png','gif','mp4','wmv','wma');

$stmnt=move_uploaded_file($imageone_tmp_dir, $image_dir.$imagesone);
$stmnt=move_uploaded_file($imagetwo_tmp_dir, $image_dir.$imagestwo);
$stmnt=move_uploaded_file($imagethree_tmp_dir, $image_dir.$imagesthree);
$stmnt=move_uploaded_file($imagefour_tmp_dir, $image_dir.$imagesfour);
$stmnt=move_uploaded_file($imagefive_tmp_dir, $image_dir.$imagesfive);


if($stmnt){
 echo"<script type='text/javascript'>
  alert('Items were succesfully uploaded');
  window.location.href=('insert.php')
</script>";
}else{
echo "<script type='text/javascript'>
  alert('Error item was not uploaded');

</script>";}


 

}

}
?>