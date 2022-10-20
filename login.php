<?php
session_start();

$con = mysqli_connect('localhost', 'root', '','yoga');
   

    
    $username=$_POST['username'];
   
    $password = $_POST['password'];
    $sql="SELECT * FROM user WHERE username='$username'";
    $check = mysqli_query($con,$sql);
    $userdata = mysqli_fetch_array($check);
    $check_pass_hash = password_verify($password,$userdata['u_passw']);
    if($password==$userdata['u_passw']){
        

        $_SESSION['userdata'] = $userdata;
        

        echo
            '<script>
                alert("User Logged in Successfully")
                window.location = "main/home.php";
            </script>
            ';    
    }
    else{
        echo '
        <script>
            alert("Invalid Credentials!");
            window.location = "login.html";
        </script>
        ';    
    }

/* include("connect.php");

#all DML query

$contact = $_POST["number"];
$password = $_POST["password"];   
$role = $_POST["role"];

$check = mysqli_query($connect, "SELECT * FROM users WHERE contact='$contact' AND role='$role'");




if (mysqli_num_rows($check)>0) {
    $userdata = mysqli_fetch_array($check);
    $check_pass_hash = password_verify($password,$userdata['password']);
    if($check_pass_hash==1){
        $groups = mysqli_query($connect, "SELECT * FROM users WHERE role=2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;

        echo
            '<script>
                window.location = "../routes/dashboard.php";
            </script>
            ';    
    }
    else{
        echo '
        <script>
            alert("Invalid Credentials!");
            window.location = "../login.html";
        </script>
        ';    
    }
    
}
else{
    echo '
    <script>
        alert("Invalid Credentials!");
        window.location = "../login.html";
    </script>
    ';
} */

?>
