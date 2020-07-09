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
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sl=1;

                                foreach ($res as $v){

                                    $file = $v['url'];
                                    $file_headers = @get_headers($file);
                                    if($file_headers[0] == 'HTTP/1.1 404 Not Found') {

                                    ?>
                                <tr>
                                    <td><?php echo $sl;?></td>
                                    <td><?php echo $v['id'];?></td>
                                    <td><?php echo $v['title'];?></td>
                                    <td><?php echo $v['url'];?></td>
                                    <td>
                                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url()?>welcome/playVideoNewById/<?php echo $v['id'];?>/<?php echo $v['cat_id'];?>/<?php echo $v['sub_cat_id'];?>">Test</a>
                                    </td>
                                </tr>
                                <?php

                                $sl++;
                                    }
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