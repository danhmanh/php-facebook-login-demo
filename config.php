<?php
    session_start() ; 
    require_once 'Facebook/autoload.php' ; 

    $FB = new \Facebook\Facebook([
        'app_id' => '134588663925092' ,
        'app_secret' => 'c01a09b148b6c35b16d4f6b4e78d8f6f',
        'default_graph_version' => 'v2.10'
    ]) ; 

    $helper = $FB->getRedirectLoginHelper() ; 




?>