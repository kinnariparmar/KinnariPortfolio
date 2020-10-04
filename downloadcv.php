<?php
$file = "resume/Kinnari's Resume.pdf"; 

if(file_exists($file)){
      header("content-disposition:attechment; filename=".basename($file));
      readfile($file);
      exit;
    }
    else{
        echo "nnene";
    }
?>