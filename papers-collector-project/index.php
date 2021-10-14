<!DOCTYPE html>
<html lang="en">
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "paper-collector";
    $conn = mysqli_connect($host,$user,$pass);
    mysqli_select_db($conn,$db);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLRIT-PAPER-COLLECTOR</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
</head>

<body>
    <div class="header">
        <h1>MLRIT EXAM PAPER COLLECTOR</h1>
    </div>

    <div class="buttons">
        <div class="paperbuttonclass" id="paperbuttonclass" style="text-align:center">
            <button name="papers" id="paperbutton" value="papers" onclick="displaypaperform()">Question PAPERS</button>
            <br><br>
        </div>
        <div class="notesbuttonclass" id="notesbuttonclass" style="text-align: center;">
            <button name="NOTES" id="notesbutton" value="NOTES" onclick="displaynoteform()">NOTES</button>
        </div>
        <div class="uploadbuttoclass" id="uploadbuttoclass" style="text-align: center;">
            <button name="NOTES" id="notesbutton" value="NOTES"
                onclick="openLoginForm()">UPLOAD PAPERS</button>
        </div>
    </div>
    <div class="questionpapers_container">

    </div>
    <div align="center" class="notes_container" style="display: none;">
        <form action="notes.php" method="post">
            <fieldset style="width: 40%; height: auto; text-align: center;">
                <legend>NOTES AND MATERIAL</legend>
                <label for="fname">choose a subject : </label>
                <select name="subject" id="subject">
                    <?php
                        $query = "SELECT name_of_subject FROM `notes_table`;";
                        
                        $res=mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<option value='" . $row['name_of_subject'] ."'>" . $row['name_of_subject'] ."</option>";
                        }
                    ?>
                </select><br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
    </div>
    <div align="center" class="papers_container" style="display: none;">
        <form action="exampapers.php" method="post">
            <fieldset style="width: 40%; height: auto; text-align: center;" >
                <legend>PAPER SELECTION</legend>
                <label for="fname">choose a subject : </label>
                <select name="subject" id="subject">
                <?php
                        $query2 = "SELECT `subject-name` FROM `exam-table`;";
                        
                        $res2=mysqli_query($conn,$query2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                            echo "<option value='" . $row2['subject-name'] ."'>" . $row2['subject-name'] ."</option>";
                        }
                    ?>
                </select><br><br>
                <label for="fname">choose a year : </label>
                <select name="year-selected" id="year-selected">
                    <option value="2020-2021">2018-2019</option>
                    <option value="2021-2022">2019-2020</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                </select><br><br>
                <label for="fname">choose a exam : </label>
                <select name="exam" id="exam">
                    <option value="semister">Sem</option>
                    <option value="mid-1">mid-1</option>
                    <option value="mid-2">mid-2</option>
                    <option value="supply">supply</option>
                </select><br><br>
                <input type="submit" name="submit" value="Submit">
                
            </fieldset>
        </form>
    </div>
    <div class="popup-overlay"></div>
    <div class="popup">
        <div class="popup-close" onclick="closeLoginForm()">&times;</div>
        <div class="form">
            <div class="avatar">
                <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_960_720.png" alt="">
            </div>
            <div class="header">
                Admin login
            </div>
            <div class="element">
                <label for="username">Username</label>
                <input type="text" id="username">
            </div>
            <div class="element">
                <label for="password">Password</label>
                <input type="password" id="password">
            </div>
            <div class="element">
                <button>Login</button>
            </div>
        </div>
    </div>
</body>

</html>