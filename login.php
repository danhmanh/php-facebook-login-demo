<?php
    require_once 'config.php' ; 
    $redirectURL = 'http://localhost/demo-facebook-login/fb-callback.php' ; 
    $permissions = ['email'] ; 
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions)  ; 
    // echo $loginURL;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
</head>

<body>
    
    <div class="container">
        
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
            </div>

            <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" placeholder="Input field">
                </div>
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" onclick = "window.location = '<?php echo $loginURL ?>'"  class="btn btn-danger">Login with Google</button>
            
        </form>
        
    </div>
    
    
</body>
</html>