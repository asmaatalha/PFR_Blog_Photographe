<?php require APPROOT . '/views/inc/navbar-client.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="showVideo">

    <div class="card-columns">

        <?php $count = 0; ?>

        <?php if ($data['videos']) :?>
        <?php foreach ($data['videos'] as $row ) : ?>
            
            <div class="card" id="<?php echo $row->id;?>">
                <div class="card-body d-flex flex-column align-items-cente vid">
                    <h4><?php echo $row->titre; ?></h4>

                    <video src="<?= URLROOT ?>/uploads/<?php echo $row->url_video ?>" controls type="videos/mp4" class="card-video"></video>
                   
                </div>
            </div>

        <?php $count ++ ; ?>
        <?php endforeach ; ?>
        <?php endif ; ?>

    </div>
    
</div>