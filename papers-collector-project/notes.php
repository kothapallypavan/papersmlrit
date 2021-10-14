<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"paper-collector");

if(isset($_POST['submit'])){
    $sname = $_POST['subject']; 
    $query = "SELECT * FROM `notes_table` WHERE name_of_subject=\"$sname\";";
    $raw = mysqli_query($conn,$query);
    while($res = mysqli_fetch_array($raw)){
        ?>
        <embed src="Notes/<?php echo $res['notes_file'];?>" type="application/pdf" width="700" height="600">
        <?php
    }
}
?>