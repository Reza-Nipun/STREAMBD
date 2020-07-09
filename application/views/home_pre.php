<div class="slider movie-items">
    <div class="container">
        <div class="row">

            <div  class="slick-multiItemSlider">
                <div class="movie-item">
                    <div class="mv-img">
                        <a href="#"><img src="<?php echo base_url();?>assets/images/uploads/live_tv.jpg" alt="" width="285" height="437"></a>
                    </div>
<!--                    <div class="title-in">-->
<!--                        <div class="cate">-->
<!--                            <span class="blue"><a href="#">Sci-fi</a></span>-->
<!--                        </div>-->
<!--                        <h6><a href="#">Interstellar</a></h6>-->
<!--                        <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
<!--                    </div>-->
                </div>

                <div class="movie-item">
                    <div class="mv-img">
                        <img src="<?php echo base_url();?>assets/images/uploads/movies.jpg" alt="" width="285" height="437">
                    </div>
                    <!--                    <div class="title-in">-->
                    <!--                        <div class="cate">-->
                    <!--                            <span class="green"><a href="#">comedy</a></span>-->
                    <!--                        </div>-->
                    <!--                        <h6><a href="#">Die hard</a></h6>-->
                    <!--                        <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
                    <!--                    </div>-->
                </div>

                <div class="movie-item">
                    <div class="mv-img">
                        <img src="<?php echo base_url();?>assets/images/uploads/radio.jpg" alt="" width="285" height="437">
                    </div>
                    <!--                    <div class="title-in">-->
                    <!--                        <div class="cate">-->
                    <!--                            <span class="green"><a href="#">comedy</a></span>-->
                    <!--                        </div>-->
                    <!--                        <h6><a href="#">Die hard</a></h6>-->
                    <!--                        <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
                    <!--                    </div>-->
                </div>

                <div class="movie-item">
                    <div class="mv-img">
                        <img src="<?php echo base_url();?>assets/images/uploads/sports.jpg" alt="" width="285" height="437">
                    </div>
                    <!--                    <div class="title-in">-->
                    <!--                        <div class="cate">-->
                    <!--                            <span class="green"><a href="#">comedy</a></span>-->
                    <!--                        </div>-->
                    <!--                        <h6><a href="#">Die hard</a></h6>-->
                    <!--                        <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
                    <!--                    </div>-->
                </div>

            </div>

        </div>
    </div>
</div>
<div class="movie-items">
    <div class="container">
        <div class="row ipad-width">
            <div class="col-md-8">
                <div class="title-hd">
                    <h2>Channels</h2>
                    <a href="<?php echo base_url()?>welcome/categoryWisePage/2/IPTV" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links-2">
                        <li class="active"><a href="#tab22"> #Feature</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab22" class="tab active">
                            <div class="row">
                                <div class="slick-multiItemSlider">

                                    <?php foreach($channels as $c){ ?>

                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="<?php echo base_url()?>/uploads/images/<?php echo $c['image'];?>" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="<?php echo base_url();?>welcome/playVideoNewById/<?php echo $c['id'];?>/<?php echo $c['cat_id'];?>/<?php echo $c['sub_cat_id'];?>"> WATCH <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="<?php echo base_url();?>welcome/playVideoNewById/<?php echo $c['id'];?>/<?php echo $c['cat_id'];?>/<?php echo $c['sub_cat_id'];?>"><?php echo $c['title'];?></a></h6>
                                                    <!--                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-hd">
                    <h2>Radios</h2>
                    <a href="<?php echo base_url()?>welcome/categoryWisePage/2/Radios" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links-2">
                        <li class="active"><a href="#tab22"> #Feature</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab22" class="tab active">
                            <div class="row">
                                <div class="slick-multiItemSlider">

                                    <?php foreach($radios as $r){ ?>

                                        <div class="slide-it">
                                            <div class="movie-item">
                                                <div class="mv-img">
                                                    <img src="<?php echo base_url()?>/uploads/images/<?php echo $r['image'];?>" alt="" width="185" height="284">
                                                </div>
                                                <div class="hvr-inner">
                                                    <a href="<?php echo base_url();?>welcome/playVideoNewById/<?php echo $r['id'];?>/<?php echo $r['cat_id'];?>/<?php echo $r['sub_cat_id'];?>"> PLAY NOW <i class="ion-android-arrow-dropright"></i> </a>
                                                </div>
                                                <div class="title-in">
                                                    <h6><a href="<?php echo base_url();?>welcome/playVideoNewById/<?php echo $r['id'];?>/<?php echo $r['cat_id'];?>/<?php echo $r['sub_cat_id'];?>"><?php echo $r['title'];?></a></h6>
                                                    <!--                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="title-hd">-->
<!--                    <h2>MOVIES</h2>-->
<!--                    <a href="--><?php //echo base_url()?><!--welcome/categoryWisePage/1/MOVIES" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>-->
<!--                </div>-->
<!--                <div class="tabs">-->
<!--                    <ul class="tab-links">-->
<!--                        <li class="active"><a href="#tab1"> #Feature</a></li>-->
<!--                    </ul>-->
<!--                    <div class="tab-content">-->
<!--                        <div id="tab1" class="tab active">-->
<!--                            <div class="row">-->
<!--                                <div class="slick-multiItemSlider">-->
<!--                                    --><?php //foreach($movies as $m){ ?>
<!---->
<!--                                    <div class="slide-it">-->
<!--                                        <div class="movie-item">-->
<!--                                            <div class="mv-img">-->
<!--                                                <img src="--><?php //echo base_url()?><!--/uploads/images/--><?php //echo $m['image'];?><!--" alt="" width="185" height="284">-->
<!--                                            </div>-->
<!--                                            <div class="hvr-inner">-->
<!--                                                <a  href="--><?php //echo base_url();?><!--welcome/playSingleChannel/--><?php //echo $m['id'];?><!--/--><?php //echo $m['cat_id'];?><!--/MOVIES"> WATCH <i class="ion-android-arrow-dropright"></i> </a>-->
<!--                                            </div>-->
<!--                                            <div class="title-in">-->
<!--                                                <h6><a href="--><?php //echo base_url();?><!--welcome/playSingleChannel/--><?php //echo $m['id'];?><!--/--><?php //echo $m['cat_id'];?><!--/MOVIES">--><?php //echo $m['title'];?><!--</a></h6>-->
<!--<!--                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    --><?php //} ?>
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->

                <div class="title-hd">
                    <h2>SPORTS</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links-2">
                        <li class="active"><a href="#tab23"> #Feature</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab23" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem">

<!--                                    <div class="slide-it">-->
<!--                                        <div class="movie-item">-->
<!--                                            <div class="mv-img">-->
<!--                                                <img src="--><?php //echo base_url();?><!--assets/images/uploads/mv-item5.jpg" alt="" width="185" height="284">-->
<!--                                            </div>-->
<!--                                            <div class="hvr-inner">-->
<!--                                                <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>-->
<!--                                            </div>-->
<!--                                            <div class="title-in">-->
<!--                                                <h6><a href="#">Interstellar</a></h6>-->
<!--                                                <p><i class="ion-android-star"></i><span>7.4</span> /10</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-hd">
                    <h2>NEWSPAPER</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                <div class="tabs">
                    <ul class="tab-links-2">
                        <li class="active"><a href="#tab24"> #Feature</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab24" class="tab active">
                            <div class="row">
                                <div class="slick-multiItemSlider">

<!--                                    <div class="slide-it">-->
<!--                                        <div class="movie-item">-->
<!--                                            <div class="mv-img">-->
<!--                                                <iframe style="width: 182px; height: 300px; border: 1px solid #ddd;" scrolling="no" src="https://www.islamicfinder.org/prayer-widget/"> </iframe>-->
<!--                                            </div>-->
<!--                                            <div class="" style="text-align: center">-->
<!--                                                <h6><a href="#">PRAYER TIME</a></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="celebrities">
                        <h4 class="sb-title">Advertisement </h4>
                        <div class="celeb-item">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end of latest new v1 section-->
<!-- latest new v1 section-->
<!--<div class="latestnew">-->
<!--    <div class="container">-->
<!--        <div class="row ipad-width">-->
<!--            <div class="col-md-9">-->
<!--                <div class="ads">-->
<!--                    <img src="--><?php //echo base_url();?><!--assets/images/uploads/ads2.png" alt="" width="728" height="106">-->
<!--                </div>-->
<!--                <div class="title-hd">-->
<!--                    <h2>Latest news</h2>-->
<!--                </div>-->
<!--                <div class="tabs">-->
<!--                    <ul class="tab-links-3">-->
<!--                        <li class="active"><a href="#tab31">#Movies </a></li>-->
<!--                        <li><a href="#tab32"> #TV Shows </a></li>-->
<!--                        <li><a href="#tab33">  # Celebs</a></li>-->
<!--                    </ul>-->
<!--                    <div class="tab-content">-->
<!--                        <div id="tab31" class="tab active">-->
<!--                            <div class="row">-->
<!--                                <div class="blog-item-style-1">-->
<!--                                    <img src="--><?php //echo base_url();?><!--assets/images/uploads/blog-it1.jpg" alt="" width="170" height="250">-->
<!--                                    <div class="blog-it-infor">-->
<!--                                        <h3><a href="#">Brie Larson to play first female white house candidate Victoria Woodull in Amazon film</a></h3>-->
<!--                                        <span class="time">13 hours ago</span>-->
<!--                                        <p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div id="tab32" class="tab">-->
<!--                            <div class="row">-->
<!--                                <div class="blog-item-style-1">-->
<!--                                    <img src="--><?php //echo base_url();?><!--assets/images/uploads/blog-it2.jpg" alt="" width="170" height="250">-->
<!--                                    <div class="blog-it-infor">-->
<!--                                        <h3><a href="#">Tab 2</a></h3>-->
<!--                                        <span class="time">13 hours ago</span>-->
<!--                                        <p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div id="tab33" class="tab">-->
<!--                            <div class="row">-->
<!--                                <div class="blog-item-style-1">-->
<!--                                    <img src="--><?php //echo base_url();?><!--assets/images/uploads/blog-it1.jpg" alt="" width="170" height="250">-->
<!--                                    <div class="blog-it-infor">-->
<!--                                        <h3><a href="#">Tab 3</a></h3>-->
<!--                                        <span class="time">13 hours ago</span>-->
<!--                                        <p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="morenew">-->
<!--                    <div class="title-hd">-->
<!--                        <h3>More news on Blockbuster</h3>-->
<!--                        <a href="#" class="viewall">See all Movies news<i class="ion-ios-arrow-right"></i></a>-->
<!--                    </div>-->
<!--                    <div class="more-items">-->
<!--                        <div class="left">-->
<!--                            <div class="more-it">-->
<!--                                <h6><a href="#">Michael Shannon Frontrunner to play Cable in “Deadpool 2”</a></h6>-->
<!--                                <span class="time">13 hours ago</span>-->
<!--                            </div>-->
<!--                            <div class="more-it">-->
<!--                                <h6><a href="#">French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</a></h6>-->
<!---->
<!--                                <span class="time">13 hours ago</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="right">-->
<!--                            <div class="more-it">-->
<!--                                <h6><a href="#">Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</a></h6>-->
<!--                                <span class="time">13 hours ago</span>-->
<!--                            </div>-->
<!--                            <div class="more-it">-->
<!--                                <h6><a href="#">China punishes more than 300 cinemas for box office cheating</a></h6>-->
<!--                                <span class="time">13 hours ago</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->