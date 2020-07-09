<?php foreach ($channels as $ch){ ?>

    <div class="movie-item-style-2 movie-item-style-1" onclick="playVideo('<?php echo $ch["url"]?>', '<?php echo $ch["download_url"]?>', '<?php echo $ch["description"]?>');">
        <img src="<?php echo base_url()?>/uploads/images/<?php echo $ch['image']?>" alt="">
        <div class="hvr-inner">
            <span onclick="playVideo('<?php echo $ch["url"]?>', '<?php echo $ch["download_url"]?>', '<?php echo $ch["description"]?>');"> WATCH NOW <i class="ion-android-arrow-dropright"></i> </span>
        </div>
    </div>

<?php } ?>