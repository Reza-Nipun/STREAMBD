<div class="hero common-hero" style="height: 100px"></div>
<div class="buster-light">

    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <!--                    <div class="topbar-filter">-->
                    <!--                        <p>Found <span>1,608 movies</span> in total</p>-->
                    <!--                        <label>Sort by:</label>-->
                    <!--                        <select>-->
                    <!--                            <option value="popularity">Popularity Descending</option>-->
                    <!--                            <option value="popularity">Popularity Ascending</option>-->
                    <!--                            <option value="rating">Rating Descending</option>-->
                    <!--                            <option value="rating">Rating Ascending</option>-->
                    <!--                            <option value="date">Release date Descending</option>-->
                    <!--                            <option value="date">Release date Ascending</option>-->
                    <!--                        </select>-->
                    <!--                        <a href="movielist_light.html" class="list"><i class="ion-ios-list-outline active"></i></a>-->
                    <!--                        <a  href="moviegrid_light.html" class="grid"><i class="ion-grid"></i></a>-->
                    <!--                    </div>-->

                    <?php if (isset($results)) { ?>
                        <?php foreach ($results as $data){ ?>

                            <div class="movie-item-style-2">
                                <a href="<?php echo base_url();?>welcome/newspaperPageById/<?php echo $data->id;?>">
                                    <img src="<?php echo $data->image; ?>" alt="" style="width: 220px; height: 220px;">
                                </a>
                                <div class="mv-item-infor">
                                    <h6><a href="<?php echo base_url();?>welcome/newspaperPageById/<?php echo $data->id;?>"><?php echo $data->title; ?></a></h6>

                                    <?php if($data->source_name != ''){ ?>
                                        <span><a target="_blank" href="<?php echo $data->detail_url;?>">Source: <?php echo $data->source_name; ?></a></span>
                                        <br />
                                    <?php } ?>

                                    <p class="describe" style="font-size: 18px;">
                                        <?php
                                        // truncate string
                                        $stringCut = substr($data->description, 0, 100);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        echo $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);

                                        ?>
                                        <a href="<?php echo base_url();?>welcome/newspaperPageById/<?php echo $data->id;?>">Read More...</a>
                                    </p>

                                </div>
                            </div>

                            <?php
                        }

                    }else{ ?>
                        <div class="movie-item-style-2">

                            <div class="mv-item-infor">
                                <h6>No Data Found.</h6>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="topbar-filter">
                        <div class="pagination2">
                            <!--                            <span>Page 1 of 2:</span>-->
                            <!--                            <a class="active" href="#">1</a>-->
                            <!--                            <a href="#">2</a>-->
                            <!--                            <a href="#"><i class="ion-arrow-right-b"></i></a>-->
                            <?php if (isset($links)) { ?>
                                <?php echo $links ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="celebrities">
                            <h4 class="sb-title">Advertisement </h4>
                            <div class="celeb-item">

                                <script type="text/javascript">
                                	atOptions = {
                                		'key' : 'd1b8951acb87e7b80e5f3f24f3bca896',
                                		'format' : 'iframe',
                                		'height' : 250,
                                		'width' : 300,
                                		'params' : {}
                                	};
                                	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.hiprofitnetworks.com/d1b8951acb87e7b80e5f3f24f3bca896/invoke.js"></scr' + 'ipt>');
                                </script>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>