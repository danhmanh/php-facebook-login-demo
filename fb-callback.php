<?php
    require_once 'config.php' ;
//    $accessToken = null ;
    try {
        $accessToken = $helper->getAccessToken() ; 
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        echo "Exception" . $e->getMessage() ; 
    }catch(\Facebook\Exceptions\FacebookSDKException $e) {
        echo "Exception" . $e->getMessage() ; 
        
    }

    if(!$accessToken) {
        header('Location: login.php') ; 
        exit() ; 
    }

    $oAuth2Client = $FB->getOAuth2Client() ; 
    if (!$accessToken->isLongLived()){
        $accessToken = $oAuth2Client->getLongLivedAccessToken() ;
    }
    $response  = $FB->get("/me?fields=id ,name, email, picture.type(large)" , $accessToken) ;
    $userData = $response->getGraphNode()->asArray() ;
    echo "<pre>" ;
    var_dump($userData) ;
    $_SESSION['userData'] = $userData ;
    $_SESSION['accessToken'] = (string) $accessToken ;
    header('Location: index.php') ;
    exit();

?>