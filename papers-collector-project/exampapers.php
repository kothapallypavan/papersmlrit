<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"paper-collector");

if(isset($_POST['submit'])){
    $sname = $_POST['subject'];
    $paperyear = $_POST['year-selected'];
    $exam = $_POST['exam'];

    $query = "SELECT * FROM `exam-table` WHERE `subject-name`=\"$sname\" AND date_of_exam=\"$paperyear\" AND exam_type=\"$exam\";";
    $raw = mysqli_query($conn,$query);
    while($res = mysqli_fetch_array($raw)){
        ?>
        <embed src="EXAM-PAPERS/<?php echo $res['file_of_exampaper'];?>" type="application/pdf" width="700" height="600">
        <?php
    }
}
?>