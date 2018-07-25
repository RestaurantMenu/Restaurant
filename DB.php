<?php

    $host="localhost";
    $userName="root";
    $password="";
    $db="restaurant";
    $querry="insert into client(ID,FullName,PHONE,MAIL,CARD,PIN) values('fullName','phoneNumber','mail','card','pin')";

    $connection = new mysqli($host,$userName,$password,$db);

    if($connecton){
        echo "Successfully Connected";
    }else{
        echo "Error";
    }
    /*if($connection->connect_error){
        echo $connection->connect_error;
    }else{
        
        if($connection->query($querry)){
            echo "inserted ";
        }else{
            echo "Error ";
        }
    }*/
?>