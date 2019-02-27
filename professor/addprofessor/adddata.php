<?php
            $servername = "kcas.site";
            $username = "u905601922_tloop";
            $password = "#tloop_1234";
            $dbname = "u905601922_tloop";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $professorname = $_POST['addprofessorname'];
            $professorid = $_POST['addprofessorid'];
            $subjectid = $_POST['addsubjectid'];

            $sql = "INSERT INTO addprofessor (professor_name, professor_token, professor_subjectid)
            VALUES ('$professorname' , '$professorid' , '$subjectid');";

            if ($conn->multi_query($sql) === TRUE) {
                echo  "Wow ! Insert Success";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
?>
<p><form style="width:70%;text-align:center;width:70%; margin-left:15%; margin-right:15%" action="../professor.php">
        <input type="submit" value = "ACCEPT">
        </form></p>