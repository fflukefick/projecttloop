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
            $objCSV = fopen($_POST['filename'],"r");
            while (($objArr = fgetcsv($objCSV,1000,"," )) != FALSE) {
                $sql = "INSERT INTO student (student_id, student_name, student_subjectid)
                VALUES ('$objArr[0]' , '$objArr[1]' , '$objArr[2]');";
                echo "$objArr[0]<br>";
                echo "$objArr[1]<br>";
                echo "$objArr[2]<br>";
                if ($conn->multi_query($sql) === TRUE) {
                    echo  "Wow ! Insert Success";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($objCSV);
            $conn->close();
            
            echo "Upload Done";
            ?>
            <p>dawdaw</p>