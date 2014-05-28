<?php
    try{
    
        $site_configs = parse_ini_file("./configs/main.ini");
    }
    catch(Exception $e)
    {
        echo "Error reading config file";
        die();        
    }
    
?>
