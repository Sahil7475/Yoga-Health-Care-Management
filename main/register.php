<?php
   $con = mysqli_connect('localhost', 'root', '','yoga');
   

    $name = $_POST['fullname'];
    $username=$_POST['username'];
    $em=$_POST['email'];
    $password = $_POST['password'];
    

    
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
   
    $sql = "INSERT INTO `user` (`u_email`,`u_passw`,`u_name`,`username`) VALUES ('$em','$password','$name','$username')";
    $rs = mysqli_query($con, $sql);

    if($rs){
        echo '
            <script>
                alert("Registered Sucessfully");
                window.location = "../login.html";
            </script>
            ';
    }

?>