<?php

    $idc =  $_GET["idc"];

    $id = mysqli_connect("127.0.0.1","root","","ticketyohan");
    $req = "UPDATE sav SET
                etat = 'Termine'
            WHERE idc = $idc";
    mysqli_query($id, $req);
    header("location:ticket.php");

?>