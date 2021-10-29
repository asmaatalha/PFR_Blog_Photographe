<?php require APPROOT . '/views/inc/navbar-admin.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="add_video">
    <a class="link" href="<?php echo URLROOT;?>/PostController/addVideo">Add Video</a>
</div>

<div class="showVideo">

    <div class="card-columns">

        <?php $count = 0; ?>

        <?php if ($data['videos']) :?>
        <?php foreach ($data['videos'] as $row ) : ?>
            
            <div class="card" id="<?php echo $row->id;?>">
                <div class="card-body d-flex flex-column align-items-cente vid">
                    <h4><?php echo $row->titre; ?></h4>

                    <video src="<?= URLROOT ?>/uploads/<?php echo $row->url_video ?>" controls type="videos/mp4" class="card-video"></video>
                    
                    <div class="buttone">
                        <button type="button" class="btn btn-danger">
                            <a class="link" href="<?php echo URLROOT;?>/PostController/deleteVideo/<?php echo $row->id; ?>">
                                delete
                            </a>
                        </button>
                        <!-- <button type="button" class="btn btn-success">
                            <a class="link" href="<?php echo URLROOT;?>/PostController/editVideo/<?php echo $row->id; ?>">
                                update
                            </a>
                        </button> -->
                    </div>
                   
                </div>
            </div>

        <?php $count ++ ; ?>
        <?php endforeach ; ?>
        <?php endif ; ?>

    </div>
    
</div>

