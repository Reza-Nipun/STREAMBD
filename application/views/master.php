<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- index14:58-->
<head>
    
    <!-- Ad-maven Advertisemeent Start -->
    <!-- <script data-cfasync="false" src="//d3kblkhdtjv0tf.cloudfront.net/?klbkd=866451"></script> -->
    <!-- <script data-cfasync="false" src="//d3kblkhdtjv0tf.cloudfront.net/?klbkd=866835"></script> -->
    <!-- Ad-maven Advertisemeent End -->
    
    <!-- Basic need -->
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo ($page_description != '' ? $page_description : '');?>">
    <meta name="keywords" content="<?php echo ($keywords != '' ? $keywords : 'streambd, streambd.co, streambd.com, stream bd, live cricket, best movie streaming sites, free movie streaming, free movie streaming sites, free online movie streaming sites, watch hollywood movies online free streaming, watch hollywood movies free, movie streaming sites, free new movies online, best free online movie sites, best site to download bollywood movies in hd, best site to download bollywood movies, hindi movie download site, new movies 2019 bollywood download, best site to watch hollywood movies online free, cricket score, gtv live, free movies online sites, bollywood movies download, watch new bollywood movies online free, hindi movies free download sites, bollywood movies download sites, hindi movie download website, online movie streaming sites, live cricket tv, watch movies online free sites, websites to watch free movies, new hindi movie free download, best sites to watch movies online free, live gtv cricket world cup, live gtv channel bd, cricket live score gtv bangladesh, cricbuzz live cricket gtv, gtv live cricket dhaka, gtv live cricket facebook, gtv live cricket final match, live cricket in gtv, live cricket match in gtv, live cricket match gtv, bpl live cricket match gtv, live cricket match on gtv, live cricket bpl on gtv, live tv cricket match today online gtv, live cricket score gtv, gtv live cricket streaming youtube')?>">
    <meta name="author" content="streambd.co">

    <?php if(!empty($res_info[0]['image'])){ ?>
        <meta property="og:image" content="<?php echo base_url()?>/uploads/images/<?php echo $res_info[0]['image']?>">
    <?php } ?>

<!--    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />

<!--    Favicon Start-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
<!--    Favicon End-->

    <!-- Mobile specific meta -->
<!--    <meta name=viewport content="width=1024">-->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button2 {background-color: #008CBA;} /* Blue */
        .button3 {background-color: #f44336;} /* Red */
        .button4 {background-color: #e7e7e7; color: black;} /* Gray */
        .button5 {background-color: #555555;} /* Black */

        .video-responsive{
            overflow:hidden;
            padding-bottom:50.25%;
            position:relative;
            height:0;
        }
        .video-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        video {
            /* override other styles to make responsive */
            width: 100%    !important;
            height: auto   !important;
        }
    </style>

<!--    Mouse Right Button Mute Start-->
<!--    <script>-->
<!--        var isNS = (navigator.appName == "Netscape") ? 1 : 0;-->
<!--        if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);-->
<!--        function mischandler(){-->
<!--            return false;-->
<!--        }-->
<!--        function mousehandler(e){-->
<!--            var myevent = (isNS) ? e : event;-->
<!--            var eventbutton = (isNS) ? myevent.which : myevent.button;-->
<!--            if((eventbutton==2)||(eventbutton==3)) return false;-->
<!--        }-->
<!--        document.oncontextmenu = mischandler;-->
<!--        document.onmousedown = mousehandler;-->
<!--        document.onmouseup = mousehandler;-->
<!---->
<!--        document.onkeydown = function(e) {-->
<!--            if (e.ctrlKey &&-->
<!--                (e.keyCode === 67 ||-->
<!--                e.keyCode === 86 ||-->
<!--                e.keyCode === 85 ||-->
<!--                e.keyCode === 117)) {-->
<!---->
<!--                return false;-->
<!--            } else {-->
<!--                return true;-->
<!--            }-->
<!--        };-->
<!--    </script>-->
<!--    Mouse Right Button Mute End-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164534803-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-164534803-1');
    </script>

    <!-- <script type='text/javascript' src='//pl15478182.passtechusa.com/84/6d/f0/846df07a3c0c81a746cf464021dc1924.js'></script> -->
</head>
<body>
    
<!--preloading-->
<!--<div id="preloader">-->
<!--    <div id="status">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--    </div>-->
<!--    <img class="logo" src="--><?php //echo base_url();?><!--assets/images/default.png" alt="" width="450" height="300">-->
<!---->
<!--</div>-->

<!--end of preloading-->
<!--login form popup-->
<!--<div class="login-wrapper" id="login-content">-->
<!--    <div class="login-content">-->
<!--        <a href="#" class="close">x</a>-->
<!--        <h3>Any New Request?</h3>-->
<!--        <form method="post" action="--><?php //echo base_url();?><!--welcome/newUserRequest">-->
<!--            <div class="row">-->
<!--                <label for="username">-->
<!--                    Email Address-->
<!--                    <input type="email" name="email" id="email" placeholder="Your Email Address..." style="text-transform: lowercase;" autocomplete="off" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <label for="username">-->
<!--                    Title-->
<!--                    <input type="text" name="title" id="title" placeholder="Request Title..." autocomplete="off" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <label for="password">-->
<!--                    Description:-->
<!--                    <textarea name="description" id="description" placeholder="Give us a short description please...." required="required"></textarea>-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <button type="submit">SUBMIT</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--end of login form popup-->
<!--signup form popup-->
<!--<div class="login-wrapper"  id="signup-content">-->
<!--    <div class="login-content">-->
<!--        <a href="#" class="close">x</a>-->
<!--        <h3>sign up</h3>-->
<!--        <form method="post" action="#">-->
<!--            <div class="row">-->
<!--                <label for="username-2">-->
<!--                    Username:-->
<!--                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!--                <label for="email-2">-->
<!--                    your email:-->
<!--                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <label for="password-2">-->
<!--                    Password:-->
<!--                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <label for="repassword-2">-->
<!--                    re-type Password:-->
<!--                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <button type="submit">sign up</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
    <div class="container">
        <nav class="navbar navbar-default navbar-custom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header logo">
                <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="<?php echo base_url();?>"><img class="logo" src="<?php echo base_url();?>assets/images/cover.jpg" alt="" width="130" height="70"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav flex-child-menu menu-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown first">
                        <a href="<?php echo base_url();?>" class="btn btn-default">
                            Home
                        </a>
                    </li>

                    <?php foreach($category as $c){

                        $sub_cats = $this->method_call->getSubCategories($c['id']);
                    ?>
                    <li class="dropdown first">

                        <a href="
                        <?php if($c['id'] == 4){ ?>
                            <?php echo base_url();?>welcome/newspaperPage/
                        <?php }else{ ?>
                            <?php echo base_url();?>welcome/categoryWisePage/<?php echo $c['id'];?>/<?php echo $c['name'];?>
                        <?php } ?>
                        "

                           <?php if(sizeof($sub_cats) > 0){ ?> class="btn btn-default dropdown-toggle lv1" data-hover="dropdown" <?php } ?>>
                            <?php echo $c['name']; if(sizeof($sub_cats) > 0){ ?> <i class="fa fa-angle-down" aria-hidden="true"></i> <?php } ?>
                        </a>

                        <?php

                            if(sizeof($sub_cats) > 0){
                        ?>

                                <ul class="dropdown-menu level1">
                                    <?php foreach($sub_cats as $s){ ?>
                                    <li><a href="<?php echo base_url();?>welcome/subCategoryWisePage/<?php echo $c['id'];?>/<?php echo $s['id'];?>/<?php echo $s['name'];?>"><?php echo $s['name']?></a></li>
                                    <?php } ?>
                                </ul>

                        <?php } ?>
                    </li>
                    <?php } ?>

                    <li class="dropdown first">
                        <a class="btn" href="<?php echo base_url()?>welcome/newRequestPage">
                            Request?
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav flex-child-menu menu-right">
<!--                    <li class="dropdown first">-->
<!--                        <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">-->
<!--                            pages <i class="fa fa-angle-down" aria-hidden="true"></i>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu level1">-->
<!--                            <li><a href="landing.html">Landing</a></li>-->
<!--                            <li><a href="404.html">404 Page</a></li>-->
<!--                            <li class="it-last"><a href="comingsoon.html">Coming soon</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="#">Help</a></li>-->
<!--                    <li class="loginLink"><a href="#">LOG In</a></li>-->
<!--                    <li class="btn signupLink"><a href="#">sign up</a></li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!-- top search form -->
<!--        <div class="top-search">-->
<!--            <select>-->
<!--                <option value="united">TV show</option>-->
<!--                <option value="saab">Others</option>-->
<!--            </select>-->
<!--            <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">-->
<!--        </div>-->
    </div>
</header>
<!-- END | Header -->
<?php
echo $maincontent;
?>
<div class="latestnew">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-8">
                <div class="ads">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section-->
<footer class="ht-footer">
    <div class="container">
        <div class="flex-parent-ft">
            <div class="flex-child-ft item1">
                <a href="<?php echo base_url();?>"><img class="logo" src="<?php echo base_url();?>assets/images/default.jpg" alt="" width="350" height="200"></a>
            </div>
            <div class="flex-child-ft item2">
                <h4>Resources</h4>
                <ul>
                    <li><a href="<?php echo base_url()?>welcome/aboutPage">About</a></li>
                    <li><a href="<?php echo base_url()?>welcome/contactUs">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <div class="flex-child-ft item3">
                <h4>Legal</h4>
                <ul>
                    <li><a href="<?php echo base_url()?>welcome/termsConditions">Terms & Conditions</a></li>
                    <li><a href="<?php echo base_url()?>welcome/privacyPolicy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="flex-child-ft item4">
                <h4>Account</h4>
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Watchlist</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">User Guide</a></li>
                </ul>
            </div>
            <div class="flex-child-ft item5">
                <h4>Newsletter</h4>
                <p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
                <form action="#">
                    <input type="text" placeholder="Enter your email...">
                </form>
                <a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
            </div>
        </div>
    </div>
    <div class="ft-copyright">
        <div class="ft-left">
            <p><a target="_blank" href="https://www.templateshub.net"></a>Copyright © 2020 STREAMBD. All Rights Reserved</p>
        </div>
        <div class="backtotop">
            <p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
        </div>
    </div>
</footer>
<!-- end of footer section-->

<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins2.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>

<!--<script type='text/javascript' src='//pl15477032.passtechusa.com/bc/ee/4f/bcee4f4a298e568f9affe82ab133efae.js'></script>-->
</body>

<!-- index14:58-->
</html>