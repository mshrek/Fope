<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="./fb.js"></script>	
    <style>

        .LoginForm{
            border:1px solid grey;
            border-radius:10px;
            margin-top:20px;
        }
        textarea{
            height:120px;
        }

        form{
            padding-bottom:20px;
        }
    </style>
</head>


<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 LoginForm">
            <!--<h1>Welcome </h1>-->
            <form method="post">
                <div class="pull-left col-md-offset-5" id="sidebar">
                    <?php if(isset($_SESSION['name'])){ header('location: ../php/Landingpage.php');exit;} else { ?><div class="fb-login-button"  data-scope="public_profile,email" onlogin="checkLoginState();"></div>
                </div><?php } ?>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html
