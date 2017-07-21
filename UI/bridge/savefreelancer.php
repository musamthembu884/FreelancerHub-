<?php

    if(isset($_GET['CustID']))
    {
        $CustID = $_GET['CustID'];
        $FreeID = $_GET['FreeID'];

        ini_set("allow_url_fopen", 1);
        $json = file_get_contents('http://localhost/freelancer_hub2.0/freelancerhub/public/index.php/api/customerhome/BookMarkFreelancer/'.$CustID.'/'.$FreeID);
        $JSONSaved = json_decode($json,true);

        if(array_key_exists("notice",$JSONSaved[0]))
        {
            // echo $JSONArray[0]['notice'];
             header('Location: ../viewprofile.php?id='.$FreeID.'&SavedSuccess');
        }
        else
        {
             header('Location: ../viewprofile.php?id='.$FreeID.'&UnsavedSuccess');
        }
    }
?>