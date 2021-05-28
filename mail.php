<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $msg=$_POST['msg'];

        $to = "usg.lu.21@gmail.com";
        $subject = "From submission";

        $message="Name: ".$name."\n".$phone."\n"."wrote the following: "."\n\n".$msg;
        $headers="from: ".$email;

        if(mail($to,$subject,$headers)){
            echo"<h1>sent successfully! Thank you"." ".$name.",we will cintact you later!<h1>";
        }
        else{
            echo "Somthing went wrong! please check your email or password";
        }
    }
?>