<div class="slider movie-items">
    <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">


                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <div class="sidebar">
                                <div class="searh-form">
                                    <div style="padding:10px;">
                                        <h6 style="color:red; background-color: white;">
                                            <?php
                                            $exc = $this->session->userdata('exception');
                                            if (isset($exc)) {
                                                echo $exc;
                                                $this->session->unset_userdata('exception');
                                            }
                                            ?>
                                        </h6>

                                        <h6 style="color:green; background-color: white;">
                                            <?php
                                            $msg = $this->session->userdata('message');
                                            if (isset($msg)) {
                                                echo $msg;
                                                $this->session->unset_userdata('message');
                                            }
                                            ?>
                                        </h6>
                                    </div>
                                    <h4 class="sb-title">Contact Us</h4>
                                    <form method="post" action="<?php echo base_url();?>welcome/sendContactUsMessage">
                                        <div class="form-style-1">
                                            <div class="row">
                                                <div class="col-md-12 form-it">
                                                    <label>Email Address</label>
                                                    <input type="email" placeholder="Email Address" name="email" id="email" required="required" autocomplete="off">
                                                </div>
                                                <div class="col-md-12 form-it">
                                                    <label>Subject</label>
                                                    <div class="group-ip">
                                                        <input type="text" placeholder="Subject" name="title" id="title" required="required" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-it">
                                                    <label>Message</label>
                                                    <div class="group-ip">
                                                        <textarea name="description" id="description" placeholder="Your Message Here..." id="channel_keyword" required="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <input class="submit" type="submit" value="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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

<script type="text/javascript">

    function getChannels() {
        var channel_keyword = $("#channel_keyword").val();
        var sub_categories = $("#sub_categories").val();

        $(".flex-wrap-movielist").empty();

        $.ajax({
            url: "<?php echo base_url();?>welcome/getChannels/",
            type: "POST",
            data: {channel_keyword: channel_keyword, sub_categories: sub_categories, cat_id: 2},
            dataType: "html",
            success: function (data) {

                $(".flex-wrap-movielist").append(data);

            }
        });
    }

    function playVideo(url, download_url, description) {

        if(url != ''){
            $("#player_container").empty();

            $("#player_container").append('<div class="video-responsive"><iframe width="853" height="480" src="'+url+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');

            document.getElementById("player_container").scrollIntoView();
        }

        if(description != ''){
            $("#description_container").empty();

            $("#description_container").append('<div style="background-color: white;">'+description+'</div>');

        }

    }

</script>