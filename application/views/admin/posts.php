<div class="static-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline8-list">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <h1>Posts</h1>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <a href="<?php echo base_url()?>access/newPost" class="btn btn-primary"><i class="fa fa-plus"></i> New POST</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="static-table-list">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Sub Cat.</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Upload Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sl=1;

                                foreach ($posts as $p){ ?>
                                <tr>
                                    <td><?php echo $sl;?></td>
                                    <td><?php echo $p['cat_name'];?></td>
                                    <td><?php echo $p['sub_cat_name'];?></td>
                                    <td><?php echo $p['title'];?></td>
                                    <td><?php echo $p['image'];?></td>
                                    <td><?php echo $p['upload_date'];?></td>
                                    <td></td>
                                </tr>
                                <?php
                                $sl++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>