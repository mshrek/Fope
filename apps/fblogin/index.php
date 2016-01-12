<?php
/*	FACEBOOK LOGIN + LOGOUT - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/
require_once( 'lib/Facebook/FacebookSession.php');
require_once( 'lib/Facebook/FacebookRequest.php' );
require_once( 'lib/Facebook/FacebookResponse.php' );
require_once( 'lib/Facebook/FacebookSDKException.php' );
require_once( 'lib/Facebook/FacebookRequestException.php' );
require_once( 'lib/Facebook/FacebookRedirectLoginHelper.php');
require_once( 'lib/Facebook/FacebookAuthorizationException.php' );
require_once( 'lib/Facebook/GraphObject.php' );
require_once( 'lib/Facebook/GraphUser.php' );
require_once( 'lib/Facebook/GraphSessionInfo.php' );
require_once( 'lib/Facebook/Entities/AccessToken.php');
require_once( 'lib/Facebook/HttpClients/FacebookCurl.php' );
require_once( 'lib/Facebook/HttpClients/FacebookHttpable.php');
require_once( 'lib/Facebook/HttpClients/FacebookCurlHttpClient.php');

/* USE NAMESPACES */

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookCurl;

/*PROCESS*/

//1.Start Session
session_start();

//check if users wants to logout
if(isset($_REQUEST['logout'])){
    unset($_SESSION['fb_token']);
}

//2.Use app id,secret and redirect url
$app_id = '1080349038652621';
$app_secret = '0e71c3997bd893dbcca5dd68596cd02e';
$redirect_url='http://localhost:63342/Fope/php/Landingpage.php';

//3.Initialize application, create helper object and get fb session
FacebookSession::setDefaultApplication($app_id,$app_secret);
$helper = new FacebookRedirectLoginHelper($redirect_url);
$sess = $helper->getSessionFromRedirect();

//check if facebook session exists
if(isset($_SESSION['fb_token'])){
    $sess = new FacebookSession($_SESSION['fb_token']);
}

//logout
$logout = 'http://localhost:63342/Fope/Contact.html';

//4. if fb sess exists echo name
if(isset($sess)){
    //store the token in the php session
    $_SESSION['fb_token']=$sess->getToken();
    //create request object,execute and capture response
    $request = new FacebookRequest($sess,'GET','/me');
    // from response get graph object
    $response = $request->execute();
    $graph = $response->getGraphObject(GraphUser::classname());
    // use graph object methods to get user details
    $name = $graph->getName();
    $id = $graph->getId();
    $image = 'https://graph.facebook.com/'.$id.'/picture?width=300';
    $email = $graph->getProperty('email');
    echo "hi $name <br>";
    echo "your email is $email <br><Br>";
    echo "<img src='$image' /><br><br>";
    echo "<a href='".$logout."'><button>Logout</button></a>";
}else{
    //else echo login
    //include("/Library/WebServer/Documents/php/Loginpage.html");
    
    //echo '<a href="'.$helper->getLoginUrl(array('email')).'" >Login with facebook</a>';
    echo '<!DOCTYPE html>';
echo '<html lang="">';
echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<title>Title Page</title>';

    echo '<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">';


    echo '<style>';

        echo '.LoginForm{';
            echo 'border:1px solid grey;';
            echo 'border-radius:10px;';
            echo 'margin-top:20px;';
        echo '}';
        echo 'textarea{';
        echo 'height:120px;';
        echo '}';

        echo 'form{';
            echo 'padding-bottom:20px;';
        echo '}';
    echo '</style>';
echo '</head>';


echo '<body>';
echo '<div class="container">';
    echo '<div class="row">';
        echo '<div class="col-md-6 col-md-offset-3 LoginForm">';
            echo '<h1>Login page</h1>';
            echo '<form method="post">';
                echo '<div class="col-md-offset-5">';
                    echo '<input type="button" class="btn btn-success btn-lg" value="Facebook" onclick="location.href=\''.$helper->getLoginUrl(array('email')).'\';"/>';
                echo '</div>';
                //echo '<div class="pull-right">';
                //    echo '<input type="button" class="btn btn-success btn-lg" value="Google"/>';
                //echo '</div>';
            echo '</form>';
        echo '</div>';
    echo '</div>';
echo '</div>';

echo '<script src="http://code.jquery.com/jquery.js"></script>';
echo '<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
echo '</body>';
echo '</html>';	
}












