
    
<?php 
error_reporting(-1);

    $location ="images/"; 
    $file = "C:\Users\Dell\Pictures\Capture.PNG"; 
    $file_name = pathinfo($file,PATHINFO_BASENAME);
   

    echo copy($file, $location.$file_name); 




    //echo $w.'<br>';
    
?>

<img src="<?php echo "/mini-project-2017/area_51/".$location.$file_name;?>"></img>