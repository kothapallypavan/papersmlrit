<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "paper-collector";
$conn = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if($_FILES['fileofexam']){
    $subject_name = $_POST['subject_name'];
    $examtype = $_POST['exam-type'];
    $paper_date = $_POST['year-selected'];

    $original_file= $_FILES['fileofexam']['name'];
    $source_file = $_FILES['fileofexam']['tmp_name'];

    $temp = explode(".", $_FILES["fileofexam"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $destination = "EXAM-PAPERS/".$newfilename;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `exam-table` (`id`, `exam_type`, `subject-name`, `date_of_exam`, `file_of_exampaper`) VALUES (NULL, '$examtype', '$subject_name', '$paper_date', '$newfilename');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "data addes successfully";
    }
    else{
        echo "error occured";
    }
}
?>