<?php require APPROOT . '/views/inc/navbar-client.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="showImag">

    <div class="cardC">

        <?php $count = 0; ?>

        <?php if ($data['images']) :?>
        <?php foreach ($data['images'] as $row ) : ?>
            
            <div class="" id="<?php echo $row->id;?>">
                <div class="card-body d-flex flex-column align-items-cente imgC">
                    <h4><?php echo $row->titre; ?></h4>

                    <img src="<?= URLROOT."/img/".$row->url_imge; ?>" alt="image" class="card-imgC">
                    
                </div>
            </div>

        <?php $count ++ ; ?>
        <?php endforeach ; ?>
        <?php endif ; ?>
    </div>
</div>