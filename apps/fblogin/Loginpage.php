<?php
/**
 * Created by IntelliJ IDEA.
 * User: srikanthmannepalle
 * Date: 1/12/16
 * Time: 11:59 PM
 */


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
                echo '<div class="pull-left">';
                    echo '<input type="submit" class="btn btn-success btn-lg" value="Facebook"/>';
                echo '</div>';
                echo '<div class="pull-right">';
                    echo '<input type="submit" class="btn btn-success btn-lg" value="Google"/>';
                echo '</div>';
            echo '</form>';
        echo '</div>';
    echo '</div>';
echo '</div>';

echo '<script src="http://code.jquery.com/jquery.js"></script>';
echo '<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
echo '</body>';
echo '</html>';