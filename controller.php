<?php
    
    // user_id is to be generated dynamically! user this formate --> these_HOES_ain't_loyal_[number]

 //   require_once ('clogs/db_connect.php');
    $delimeter = "/";
    require_once('pageGenerator.php');
    $page_url = explode('/', $_SERVER['REQUEST_URI']);
    $script_url = explode('/', $_SERVER['SCRIPT_NAME']);


    // all the urls(files that are not present on the server) will redirect to the 
    // index.php (as of now) [done in .htaccessfile]

    for ($x = 0 ; $x < sizeof($page_url) ; $x++)
        if (isset($script_url[$x])) 
         if ($page_url[$x] == $script_url[$x])
               unset($page_url[$x]);

    $values = array_values($page_url);
    $caller = -1;


    // $values will contain the url parameters, for example.. if the url is : 
    // localhost/real-happiness/profile-code/name
    // then $value[0] = 'real-happiness', $value[1] = 'profile-code', $value[2] = 'name'
     switch($values[0]) {
       
        case 'login':
            //header('Location: /mini-project-2017/views/login_register.html');
           $caller = 1;
            
        break;

        case 'register':
            $caller = 1;
            
            // show to register page. 
        break;  

        case 'verify':
             
            $caller = 2;
        break;

        case 'item':
            // call to email-varification function.
            if (isset($values[1])) 
                $caller = 3;
        break;

        default:
            echo $values[0];
        break;
    }
    ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?=ucwords($values[0]). " | Auction Bay";?></title>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/mini-project-2017/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/mini-project-2017/css/form-elements.css">
        <link rel="stylesheet" href="/mini-project-2017/css/style.css">
        <link rel="stylesheet" type="text/css" href="/mini-project-2017/css/rangeslider.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!--jQuery hai bc-->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="/mini-project-2017/scripts/scripts.js"></script>
        <script type="text/javascript" src="/mini-project-2017/scripts/rangeslider.min.js"></script>

</head>
<body>

    <?php

        include('site_header.php');

        if ($caller == 1)
            show_login();
        else if ($caller == 2)
            show_verify();
        else if ($caller == 3)
            show_item($values[1]);
        else
            echo 'Not Found';


        include('site_footer.php');
    ?>

</body>
</html>
