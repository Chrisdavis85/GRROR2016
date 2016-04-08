<?php
if(isset($_POST["submit"])) {
$target_dir = "uploadFolder/";
$target_file = $target_dir . basename($_FILES["fUpload"]["name"]);
$file_name = $_FILES['fUpload']['name'];
$listing = $_POST["fTitle"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fUpload"]["tmp_name"]);
    if($check !== false) {
        echo $listing . "<br>"."Sucessfully Uploaded: " . $file_name .
        "<br>" . "<a href='http://localhost:8888/'class='btn btn-success'>Go back</a>" ;
       move_uploaded_file($_FILES["fUpload"]["tmp_name"], $target_dir .
       	$file_name);
    } else {
        echo "<h1 class='text-center' style='color:#ff0033'>File not Uploaded</h1>" . "<a href='http://localhost:8888/'class='btn btn-primary-center'>Go back</a>";
    }
}
?>
