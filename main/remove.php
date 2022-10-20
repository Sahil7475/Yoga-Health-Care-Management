<?php
session_start();
  
$userdata = $_SESSION['userdata'];
$con = mysqli_connect('localhost', 'root', '','yoga');
   


    
    /* if ($password==$cpassword) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        move_uploaded_file($tmp_name, "../uploads/$photo");
        $insert = mysqli_query($connect, "INSERT INTO users (name, contact, address, dob, role, gender, photo, status, password, votes) 
        VALUES ('$name','$mobile','$address','$dob','$role','$gender','$photo',0,'$hash',0)");

        if ($insert) {
            echo '
            <script>
                alert("Registration Succesful!");
                window.location = "../login.html";
            </script>
            ';
        }
    } */
   
    $sql = "DELETE FROM user WHERE username='$userdata[username]'";
    $rs = mysqli_query($con, $sql);

    if($rs){
        echo '
            <script>
                alert("Removed Sucessfully");
                window.location = "../login.html";
            </script>
            ';
    }

?>