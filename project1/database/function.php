<?php
    include 'connect.php';
    function createRow(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $query = 'INSERT INTO users(email, password, fullname) VALUES("$email", "$password", "$fullname")';
        $result = mysqli_query($conn,$query);
        if(!$result){
            die('Query failed!'.mysqli_error());
        }else{
            echo 'Record Create';
        }  
    }  
?>