<?php
//session_start();
//include "php/mobile_check.php";
/*
include "php/facebookLogin.php";

function displayFeeds() {
    GLOBAL $fbFeeds;
    GLOBAL $me;
    GLOBAL $me2;
    $i = 1;
    echo "Me1: <br/>";
    var_dump($me);
    echo "<br/><br/>Me2: <br/>";
    var_dump($me2);
    echo count($fbFeeds);
    foreach ($fbFeeds[posts][data] as $feed) {
        echo "<p><span style='font-size: 1.5em; font-weight: bold; color: brown;'>" . $i . ": " . $feed['from']['name'] . " wrote:</span><br />" . $feed['message'] . "</p>";
        $i++;
        }
}
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Tiny Tiger's portfolio</title>

        <meta name="description" content="*** Web Developer / Multimedia Designer ***">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Social Media meta tags. Open Graph -> other SM platforms will use them as well -->
        <meta property="og:title" content="*** !OMG! *** A banana! O_o...">
        <meta property="og:type" content="website">
        <meta property="og:image" content="http://kamilmichalak.com/img/logo/logoGreen1380.jpg">
        <meta property="og:url" content="http://kamilmichalak.com">
        <meta property="og:description" content="Well... not really... but it IS kind of a catchy slogan now isn't it? Ohhh Come on, check my portfolio. It's worth a sandwich :)">
        <meta property="fb:admins" content="1442457610">

        <!-- SEO google search author display -->
        <link rel="author" href="https://plus.google.com/108150434258363002328">

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="plugins/jPlayer/blue.monday/jplayer.blue.monday.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">


        <!-- Scripts that require to be places in te <head> (all work best from here) -->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <!-- Makes media queries work in ie 6-8 and other browsers without native support-->
        <script src="js/vendor/respond.min.js"></script>
    </head>
    <body>

<!--# Main navigation bar -->
        <nav id="navbarTop" class="navbar navbar-fixed-top navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbarContent">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><div id="brandImg"></div></a>
            </div>

<!--# Main navbar's body -->
            <div class="collapse navbar-collapse navbarContent" id="mainNavBtns">
                <ul class="nav nav-pills nav-justified">
                    <li data-location="what" class="navbar-btn active"><a class="navbar-btn" href="#"><i class="icon-comments"></i> What's up?</a></li>
                    <li data-location="tame"><a class="navbar-btn" href="#"><i class="icon-tags"></i> Tame a tiger</a></li>
                    <li data-location="nerd"><a class="navbar-btn" href="#"><i class="icon-cogs"></i> Nerd Zone</a></li>
                    <li data-location="world"><a class="navbar-btn" href="#"><i class="icon-globe"></i> Tiger World</a></li>
                </ul>
            </div>
<!--// Main navigation body -->

        </nav>
<!--// Mainnavigation bar -->



<!--# Side Container -->
        <aside class="row" id="asideContent">

<!--# Video -->
            <article id="videoRoot">
                <div id="videoContainer" class="jp-video">
                    <div class="jp-type-single">
                        <div id="jquery_jplayer_1" class="jp-player"></div>
                        <div class="jp-gui">
                            <div class="jp-interface">
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
<!--// Video -->

<!--# Aside Canvas -->
            <figure id="asideCanvas" class="panel panel-warning">

                <nav class="panel-heading">
                        <a href="#" id="togglePlay"><span class="glyphicon glyphicon-play"></span></a>
                        <a href="#" id="toggleSound"><span class="glyphicon glyphicon-volume-off"></span></a>
                        <a href="#" id="toggleVideo"><span class="glyphicon glyphicon-minus-sign"></span></a>
                        <a href="#" id="toggleOptions"><span class="glyphicon glyphicon-cog"></span></a>
                </nav>

                <article id="asideCanvasBody" class="panel-body">
                    <section id="asideOptions">
                        <ul class="list-group">
                            <li class="list-group-item">item1</li>
                            <li class="list-group-item">item2</li>
                            <li class="list-group-item">item3</li>
                            <li class="list-group-item">item4</li>
                            <li class="list-group-item">item5</li>
                        </ul>
                    </section>
                </article>

            </figure>
<!--// Aside Canvas -->

        </aside>
<!--// Side Container -->



<!--# Main container -->
        <div class="row" id="mainContainer">

<!--# Main content -->
            <article id="mainContent">

 <!--# Tame a tiger -->
                <section id="tameContent">
                    <header class="jumbotron">
                        <hgroup>
                        <blockquote>
                            <!-- Stacked icons are not so customizable :(...
                            <span id="tameLogo" class="icon-stack">
                                <i class="icon-sun icon-stack-base"></i>
                                <i class="icon-screenshot"></i>
                            </span>
                            -->
                            <h1>
                                Free Tiger!
                            </h1>
                            <small>Limited amount*</small>
                        </blockquote>
                        </hgroup>
                        <small>
                            <span class="text-muted">*Availabity in stock:</span>
                            <span class="text-success"> 1 <i class="icon-ok icon-2x"></i>
                            </span>
                        </small>
                    </header>
                    <div class="tameBlock">
                        <ul>
                            <li><i class="icon-windows icon-2x"></i> Windows user</li>
                            <li><i class="icon-android icon-2x"></i> Android user</li>
                            <li><i class="icon-apple icon-2x"></i> Apple friendly :)</li>
                        </ul>
                    </div>
                    <div class="tameBlock">
                        <!--?php displayFeeds(); ?-->
                    </div>
                </section>
 <!--// Tame a tiger -->

            </article>
<!--// Main Content -->

        </div>
<!--// Main container -->


<!--# Footer -->
        <footer id="footer">
                <?php if(!$isLoggedIn) { ?>
                <section id="login">
                    <h1>Login</h1>
                </section>
                <div class="footerDivider"></div>
                <?php } ?>
                <section id="info">
                    <h1>Info</h1>
                </section>
        </footer>
<!--// Footer -->


 <!--# Login modal -->
        <article id="loginModal" tabindex="-1" role="dialog" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close hidden-md" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h1>Why to login?</h1>
                    </div>
                    <section class="modal-body">
                        <ul>
                            <li>Friends and family can access some extra content</li>
                            <li>Shortcut for me to access my <abbr title="Content Management System">CMS</abbr></li>
                            <li>You can easily leave me a <span class="text-primary">private message</span> if you type <span class="text-warning">visitor</span> into the <span class="text-warning">name</span> field and press OK</li>
                        </ul>
                    </section>
                    <footer class="modal-footer">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="loginName" class="col-md-4 control-label">Name: </label>
                                <div class="col-md-6">
                                    <input type="text" name="loginName" class="form-control"  placeholder="Name...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="loginSurname" class="col-md-4 control-label">Surname: </label>
                                <div class="col-md-6">
                                    <input type="text" name="loginSurname" class="form-control"  placeholder="Surname....">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-1">
                                    <button type="button" class="btn btn-warning btn-lg">OK</button>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
 <!--// Login modal -->



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="js/vendor/holder.js"></script>
        <script src="plugins/Popcorn/popcorn-complete.min.js"></script>
        <script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
        <script src="plugins/jPlayer/popcorn/popcorn.jplayer.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
