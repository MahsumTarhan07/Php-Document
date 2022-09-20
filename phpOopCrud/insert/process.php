<?php

include_once("Crud.php");
$insertdata=new Crud();
if(isset($_POST['submit']))
{
    $first_name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");

    $sql=$insertdata->save($first_name, $last_name,$city_name,$email,$insertdate);
    
    if($sql)
    {
       echo "Data inserted successfully !";
    }
    else
    {
        echo "Data inserted error !";
    }
}


?>