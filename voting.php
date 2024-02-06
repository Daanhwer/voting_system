<?php
    include "index.html";
    $voting = $_POST["vote"];
    $candidate1 = "D. JAMES";
    $candidate2 = "U. JUDE";


    if ($voting == "james"){
        echo "<b>YOU VOTED FOR: </b>", "<em>",$candidate1,"</em>";}

    elseif($voting == "jude"){
        echo "<b>YOU VOTED FOR: </b>", "<em>",$candidate2,"</em>";}

    else{
        echo "<b>PLEASE ENTER A VOTE!</b>";
    };
    

    include "footer.php";
?>