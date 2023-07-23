<?php
    $totalName = $_POST['totalName'];
    $totalMail = $_POST['totalMail'];
    $totalNumber = $_POST['totalNumber'];
    $totalText = $_POST['totalText'];
    $totalTextArea = $_POST['totalTextArea'];

    //Database Connection
    $conn = new mysqli('localhost','root','','test');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt = $conn->prepare("insert into registration(totalName, totalMail, totalNumber, totalText, totalTextArea) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $totalName, $totalMail, $totalNumber, $totalText, $totalTextArea);
            $execval = $stmt->execute();
            echo $execval;
            echo "Registration successfully...";
            $stmt->close();
            $conn->close();
        }
?>