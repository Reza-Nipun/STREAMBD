<div class="hero common-hero" style="height: 100px"></div>

<div class="buster-light">
<!-- blog detail section-->
<div class="page-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog-detail-ct">
                    <h1><?php echo $res_info[0]['title'];?></h1><span class="time"><a target="_blank" href="<?php echo $res_info[0]['detail_url']?>">Source: <?php echo $res_info[0]['source_name'];?></a></span>
                    
                    <?php if($res_info[0]['url'] != ''){ ?>
                    
                    <br />
                    <div class="video-responsive"><iframe width="640" height="264" src="<?php echo $res_info[0]['url'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <?php }else{ ?>
                    
                    <br />
                    <img src="<?php echo $res_info[0]['image']?>" alt="" style="height: 200px; width: 50%">
                    
                    <?php } ?>
                    
                    <br />
                    <p style="font-size: 18px;"><?php echo $res_info[0]['description'];?></p>
                    

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end of  blog detail section-->
</div>