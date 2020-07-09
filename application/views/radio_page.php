<div class="hero common-hero" style="height: 100px"></div>
<div class="buster-light">
    <!-- blog detail section-->
    <div class="page-single">
        <div class="container">

<!--        <div class="container">-->
        <div class="row">
            <div class="col-md-12" id="player_container">
                <!--                        <span style="color: #ffffff; font-size: 40px;">WATCH HERE!</span>-->

                <?php

                if(sizeof($res_info) > 0){

                    if($res_info[0]['player_type'] == 1){ ?>

                        <div class="video-responsive"><iframe width="640" height="264" src="<?php echo $res_info[0]['url'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                    <?php }

                    if($res_info[0]['player_type'] == 2){

                        if($res_info[0]['file_type'] == 1){ ?>

                            <video id="my-video" class="video-js" controls preload="auto" width="400" poster="MY_VIDEO_POSTER.jpg" data-setup="{}" ><source src="<?php echo $res_info[0]['url'];?>" type="application/x-mpegURL" /><p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that</p></video>

                        <?php }

                        if($res_info[0]['file_type'] == 2){ ?>

                            <video id="my-video" class="video-js" controls preload="auto" width="400" poster="MY_VIDEO_POSTER.jpg" data-setup="{}" ><source src="<?php echo $res_info[0]['url'];?>" type="video/mp4" /><p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that</p></video>

                        <?php    }
                    }

                }

                ?>

            </div>
        </div>
        <br />
        <?php if(sizeof($res_info) > 0){ ?>
            <div class="row">
                <div class="col-md-12" id="description_container">
                    <div style="background-color: white; font-size: 18px;">
                        <h3><b><?php echo $res_info[0]['title']; ?></b></h3>
                    </div>
                    <div style="background-color: white;"><?php echo $res_info[0]['description']?></div>
                </div>
            </div>
        <?php } ?>
<!--        </div>-->
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="description_container">
                        <div style="background-color: white;">
                            <h3><b>Related Posts</b></h3>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row ipad-width">
                    <div class="col-md-8 col-sm-8 col-xs-8">

                        <div class="flex-wrap-movielist">

                            <?php foreach ($radios as $r){ ?>

                            <div class="movie-item-style-2 movie-item-style-1" onclick="playVideoNew(<?php echo $r['id']?>, <?php echo $r['cat_id']?>, <?php echo $r['sub_cat_id']?>)">
                                <img src="<?php echo base_url()?>/uploads/images/<?php echo $r['image']?>" alt="">
                                <div class="hvr-inner">
                                    <span onclick="playVideoNew(<?php echo $r['id']?>, <?php echo $r['cat_id']?>, <?php echo $r['sub_cat_id']?>)"> PLAY NOW <i class="ion-android-arrow-dropright"></i> </span>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4">
                        <div class="sidebar">
                            <div class="searh-form">
                                <h4 class="sb-title">Search for Radio</h4>
                                <div class="form-style-1" action="#">
                                    <div class="row">
                                        <div class="col-md-12 form-it">
                                            <label>Radio Name</label>
                                            <input type="text" placeholder="Enter keywords" id="channel_keyword">
                                        </div>
                                        <div class="col-md-12 form-it">
                                            <label>TYPE</label>
                                            <div class="group-ip">
                                                <select
                                                    name="sub_categories" id="sub_categories" multiple="" class="ui fluid dropdown">
                                                    <option value="">Select Type</option>
                                                    <?php foreach ($sub_category as $sc){ ?>
                                                    <option value="<?php echo $sc['id']?>"><?php echo $sc['name']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <input class="submit" type="submit" value="submit" onclick="getRadios()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ads">
                                <img src="images/uploads/ads1.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

    function getRadios() {
        var channel_keyword = $("#channel_keyword").val();
        var sub_categories = $("#sub_categories").val();

        $(".flex-wrap-movielist").empty();

        $.ajax({
            url: "<?php echo base_url();?>welcome/getRadios/",
            type: "POST",
            data: {channel_keyword: channel_keyword, sub_categories: sub_categories, cat_id: 3},
            dataType: "html",
            success: function (data) {

                $(".flex-wrap-movielist").append(data);

            }
        });
    }
    
    function playVideo(url, download_url, description) {

        if(url != ''){
            $("#player_container").empty();

            $("#player_container").append('<div class="video-responsive"><iframe width="auto" height="200" src="'+url+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

            document.getElementById("player_container").scrollIntoView();
        }

        if(description != ''){
            $("#description_container").empty();

            $("#description_container").append('<div style="background-color: white;">'+description+'</div>');

        }

    }

    function playVideoNew(id, cat_id, sub_cat_id) {
        window.location = '<?php echo base_url()?>welcome/playVideoNewById/'+id+'/'+cat_id+'/'+sub_cat_id;
    }
</script>