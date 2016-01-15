<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Profile</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/default.css" rel="stylesheet" type="text/css">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <!--    added for bootstrap styling-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs/dt-1.10.10,se-1.1.0/datatables.min.css"/>
    <!-- Shared assets -->
    <!--    <link rel="stylesheet" type="text/css" href="../css/style.css">-->

    <!-- Example assets -->
    <link rel="stylesheet" type="text/css" href="../css/jcarousel.ajax.css">






    <!--    added for bootstrap styling-->
    <script type="text/javascript" src="https://cdn.datatables.net/s/bs/dt-1.10.10,se-1.1.0/datatables.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="../js/carousaljquery.js"></script>
    <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="../js/jcarousel.ajax.js"></script>



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/default.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/jquery.tablesorter.min.js"></script>
    <script src="../js/loadYoutubeData.js"></script>
    <script src="../js/mainPageJS.js"></script>




</head>
<body>
<div class="container-fluid display-table">
    <div class="row display-table-row ">
        <!--side menu-->
        <div class="col-md-2 col-sm-1 display-table-cell hidden-xs valign-top" id="side-menu">
            <h1 class="hidden-xs hidden-md">navigation</h1>
            <ul>
                <li class="link active">
                    <a href="index.html">
                        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                        <span class="hidden-xs hidden-md">Dashboard</span>
                    </a>
                </li>
                <li class="link">
                    <a href="#collapse-ProgLanguages" data-toggle="collapse" aria-controls="collapse-ProgLanguages">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        <span class="hidden-xs hidden-md">Programming languages</span>
                    </a>
                    <ul class="collapse collapseable" id="collapse-ProgLanguages">
                        <li>
                            <a href="approved.html">Java
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">C/C++
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Python
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">VB .NET
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">PHP
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Ruby
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">R
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Matlab
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="link">
                    <a href="#collapse-Scripts" data-toggle="collapse" aria-controls="collapse-Scripts">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        <span class="hidden-xs hidden-md">Scripting languages</span>
                    </a>
                    <ul class="collapse collapseable" id="collapse-Scripts">
                        <li>
                            <a href="approved.html">Javascript
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Angular JS
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Node JS
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Perl
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">VB script
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--List for top database management systems-->
                <li class="link">
                    <a href="#collapse-DB" data-toggle="collapse" aria-controls="collapse-DB">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        <span class="hidden-xs hidden-md">DBMS</span>
                    </a>
                    <ul class="collapse collapseable" id="collapse-DB">
                        <li>
                            <a href="approved.html">Oracle
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">MySQL
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">MS SQL Server
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">MongoDB
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">DB2
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">MS Access
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Cassandra
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="unapproved.html">Redis
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-facetime-video pull-right" aria-hidden="true"></span>
                                <span class="label  pull-right hidden-xs hidden-md"> 10</span>
                                <span class="glyphicon glyphicon-user pull-right" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!--main menu -->
        <div class="col-md-10 col-sm-11  display-table-cell valign-top">
            <div class="row">

                <!--                top header section-->
                <header id="nav-header" class="clearfix">
                    <div class="col-md-5">
                        <nav class="navbar-default pull-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="offCanvas" data-target="#side-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </nav>
                        <input type="text" id="header-search-field" class="hidden-xs hidden-md" placeholder="Search for something..">
                    </div>
                    <div class="col-md-7">
                        <ul class=pull-right>
                            <?php
                            if(isset($_SESSION['fb_token'])){
                                echo '<li>works</li>';
                                $sess = new FacebookSession($_SESSION['fb_token']);
                            }

                            if(isset($_REQUEST['logout'])){
                                unset($_SESSION['fb_token']);
                                //setcookie( "PHPSESSID", "", (time()-3600) );
                            }
                            $logout = 'http://localhost:63342/Fope/Contact.html';

                            echo '<li id="welcome">Welcome '.$_SESSION['username'].'</li>';
                              ?>
<!--                            <li id="welcome">Welcome to yout profile!</li>-->
                            <li class="fixed-width">
                                <a href="#">
                                    <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                                    <span class="label label-warning">4</span>
                                </a>
                            </li>

                            <li class="fixed-width">
                                <a href="#">
                                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    <span class="label label-message">4</span>
                                </a>
                            </li>

                            <li>
                                <?php
                                echo "<a class='logout' href='".$logout."'>";
                                 ?>
                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
            </div>

            <div id="dashboard-con">
                <!--                Starting here can be auto generated by the php file-->
                <?php include("mainpageAutogen.php"); ?>
                <!--                Till here can be auto generated by the php file-->


                <!-- footer starts here-->
                <div class="row">
                    <footer id="admin-footer" class="clearfix">
                        <div class="pull-left"><b>Copyright</b>&copy; Fope 2015</div>
                        <div class="pull-right">All rights reserved</div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>