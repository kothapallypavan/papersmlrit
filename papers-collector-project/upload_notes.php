<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "paper-collector";
$conn = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
if($_FILES['document']){
    $subject_name = $_POST['subject_name'];
    $unit_description = $_POST['unitnumber'];
    $original_file= $_FILES['document']['name'];
    $source_file = $_FILES['document']['tmp_name'];
    $destination = "Notes/".$original_file;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `notes_table` (`id`, `name_of_subject`, `decription_of_notes`, `notes_file`) VALUES (NULL, '$subject_name', '$unit_description', '$original_file');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "data addes successfully";
    }
    else{
        echo "error occured";
    }
}
?>