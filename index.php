<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <!--    added for bootstrap styling-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs/dt-1.10.10,se-1.1.0/datatables.min.css"/>






    <!--    added for bootstrap styling-->
    <script type="text/javascript" src="https://cdn.datatables.net/s/bs/dt-1.10.10,se-1.1.0/datatables.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">


    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>
    <script src="js/loadYoutubeData.js"></script>
    <script src="js/mainPageJS.js"></script>




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

        <!--main menu-->
        <div class="col-md-10 col-sm-11  display-table-cell valign-top">
            <div class="row">
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
                            <li id="welcome">Welcome to your profile area</li>
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
                                <a href="#" class="logout">
                                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                    log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>
            </div>

            <div id="dashboard-con">

                <div class="row">
                    <div class="col-md-8 dashboard-left-cell">
                        <div class="admin-content-con">
                            <!--<header >-->
<!--                            <h5>-->
<!--                                <div class="pull-left">-->
<!--                                    <img class="img-circle hidden-xs" src="https://api.fnkr.net/testimg/70x70/00CED1/FFF/?text=70x70"/>-->
<!--                                </div>-->
<!--                                <div class="pull-right alert-dismissible">-->
<!--                                    <span style="font-size: 1.2em;"><b>Hiro Nakamura</b></span>-->
<!--                                </div>-->
<!--                            </h5>-->
                            <?php include("leftDashboardHeader.php"); ?>
                            <table class="table table-condensed display tablesorter" id="playList" cellspacing="0" width="100%" id="leftdashboardtable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Ratings</th>
                                    <th>
                                        <div class="pull-left">
                                            <span style="padding-left:80px;">Quality</span>
                                        </div>
                                    </th>
                                    <!--<th>Issue?</th>-->
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <!--<a class="label label-success " href="#" role="button">Dislike</a>-->
                                        <!--<a class="label label-success" href="#" role="button">Like</a>-->
                                        <span class="glyphicon glyphicon-thumbs-up pull-left" aria-hidden="true"></span>
                                        <span class="glyphicon glyphicon-thumbs-down pull-right" aria-hidden="true"></span>
                                    </th>
                                    <th>
                                        <div class="pull-right">
                                            <span class="label label-success" role="button" style='padding-right:10px;'>audio</span>
                                            <span class="label label-success " role="button">video</span>
                                            <span class="label label-success " role="button">content</span>
                                            <span class="label label-warning"  role="button">Report broken</span>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="playlistItems">
                                <?php include("createTableOutput.php"); ?>
                                </tbody>
                            </table>

                        </div>
                    </div>

<!--                    Below portion can be put in rightDashboardStats.php-->
                    <div class="col-md-4 dashboard-right-cell">
                        <div class="admin-content-con clearfix">
                            <header>
                                <h5>
                                    Video
                                    <span class="glyphicon glyphicon-heart-empty pull-right"></span>
                                </h5>
                            </header>
                            <div class="comment-head-dash clearfix">
                                <div class="commenter-name-dash pull-left">Viewer hits</div>
                                <div class="days-dash pull-right" id="viewcount">
                                    <?php include("rightDashboardStats.php"); ?>
                                </div>
                            </div>
                            <div id="videoPreview">
<!--                            <iframe-->
<!--                                src="http://www.youtube.com/embed/nIsCs9_-LP8" width=100% height=289px"-->
<!--                                frameborder="0" allowfullscreen>-->
<!--                            </iframe>-->
                            </div>
                            <div class="clearfix">
                                <br/>
                                <div class="clearfix"></div>
                                <div id="feedback">
                                    <span class="col-xs-4">Audio</span>
                                    <span class="col-xs-4">Video</span>
                                    <span class="col-xs-4">Content</span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="star-ratingA  col-xs-4" id="audioRating">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever" class="rating-value" value="3">
                                </div>
                                <div class="star-ratingV col-xs-4" id="videoRating">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever" class="rating-value" value="3">
                                </div>
                                <div class="star-ratingC col-xs-4" id="contentRating">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever" class="rating-value" value="3">
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    Till above portion can be put in rightDashboardStats.php-->

                </div>

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