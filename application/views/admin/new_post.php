<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Post Information</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="<?php echo base_url()?>access/saveNewPost" class="" id="demo1-upload" method="post">
                                                <div class="row">
                                                    <div style="padding-top:10px">
                                                        <h6 style="color:red">
                                                            <?php
                                                            $exc = $this->session->userdata('exception');
                                                            if (isset($exc)) {
                                                                echo $exc;
                                                                $this->session->unset_userdata('exception');
                                                            }
                                                            ?>
                                                        </h6>

                                                        <h6 style="color:green">
                                                            <?php
                                                            $msg = $this->session->userdata('message');
                                                            if (isset($msg)) {
                                                                echo $msg;
                                                                $this->session->unset_userdata('message');
                                                            }
                                                            ?>
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <select name="category" id="category" class="form-control" onchange="getSubCategory();" required="required">
                                                                <option value="">Select Category</option>

                                                                <?php foreach ($category as $c){ ?>
                                                                    <option value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option>
                                                                <?php } ?>

                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="sub_category" id="sub_category" class="form-control">
                                                                <option value="">Select Sub-Category</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="image" id="image" type="text" class="form-control" required="required" placeholder="Image URL">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="meta" type="text" class="form-control" placeholder="Meta Tags">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="url" type="text" class="form-control" placeholder="URL" >
                                                            <span style="background-color: yellow">For Youtube URL include at last of URL:</span>
                                                            <br />
                                                            <span style="background-color: yellow">modestbranding=1&autoplay=1&rel=0&showinfo=0</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="player_type" id="player_type" class="form-control">
                                                                <option value="">Select Player Type</option>
                                                                <option value="1">IFRAME</option>
                                                                <option value="2">Video Player	</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="file_type" id="file_type" class="form-control">
                                                                <option value="">Select File Type</option>
                                                                <option value="1">m3u8</option>
                                                                <option value="2">Video Files(mp4, mkv)	</option>
                                                            </select>
                                                            <span style="background-color: yellow">Keep Blank for Player Type: IFRAME</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="title" type="text" class="form-control" placeholder="Title">
                                                        </div>
                                                        <div class="form-group res-mg-t-15">
                                                            <textarea name="description" placeholder="Description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="source_name" type="text" class="form-control" placeholder="Source / Author Name" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="detail_url" type="text" class="form-control" placeholder="Detail URL" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="download_url" type="text" class="form-control" placeholder="Download URL" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

    function getSubCategory(){
        var category_id = $("#category").val();

        if(category_id != ''){
            $("#sub_category").empty();

            $.ajax({
                url: "<?php echo base_url();?>access/getSubCategory/",
                type: "POST",
                data: {category_id: category_id},
                dataType: "html",
                success: function (data) {

                    $("#sub_category").append(data);

                }
            });
        }else{

            alert("Please Select Category");
            location.reload();

        }

    }

</script>