<?php
//    session_start() ;
    require_once 'config.php' ;
//    echo $_SESSION["userData"]["picture"]["url"] ;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


</head>
<body>
<div class="container">

    <div class = "row">
        <div class="col-md-3">
<!--            <img src=""-->
        </div>

        <div class="col-md-6">
            <div class="panel panel-success">
                <div class = "panel-heading">
                    <h2>Your information on Facebook</h2>
                </div>

                <div class = "panel-body">
                    <div class="row">
                        <div class = "col-md-6">
                            <img src= "<?php echo $_SESSION["userData"]["picture"]["url"]?>" class = "img-responsive" >
<!--                            <img src="https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/23621248_1433570930095397_3571688684662918283_n.jpg?oh=9002046b68a51b930a5a99cb8c3f4c2d&oe=5AD24C1B">-->
                            Avatar here?
                        </div>
                        <div class = "col-md-6">
                            <h3>Your ID:</h3> <?php echo $_SESSION["userData"]["id"]?>
                            <h3>Your Name:</h3> <?php echo $_SESSION["userData"]["name"]?>
                            <h3>Your Email:</h3> <?php echo $_SESSION["userData"]["email"]?>
                        </div>
                    </div>
                </div>

                <div class = "panel-footer">

                </div>
            </div>
        </div>

        <div class="col-md-3">

        </div>
    </div>

</div>

</body>
</html>