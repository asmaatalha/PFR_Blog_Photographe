<?php require APPROOT . '/views/inc/navbar-admin.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="">
    <div class="add_img">
        <a class="link" href="<?php echo URLROOT;?>/PostController/addImage">Add Image</a>
    </div>

    <div class="showImag">

        <div class="card-columns">

            <?php $count = 0; ?>

            <?php if ($data['images']) :?>
            <?php foreach ($data['images'] as $row ) : ?>
                
                <div class="card" id="<?php echo $row->id;?>">
                    <div class="card-body d-flex flex-column align-items-cente img">
                        <h4><?php echo $row->titre; ?></h4>

                        <img src="<?= URLROOT."/img/".$row->url_imge; ?>" alt="image" class="card-img">
                        <div class="buttone">
                            <button type="button" class="btn btn-danger">
                                <a class="link" href="<?php echo URLROOT;?>/PostController/delete/<?php echo $row->id; ?>">delete</a>
                            </button>
                                
                            <button type="button" class="btn btn-success">
                                <a class="link" href="<?php echo URLROOT;?>/PostController/edit/<?php echo $row->id; ?>">update</a>
                            </button>
                        </div>
                    
                        
                    </div>
                </div>

            <?php $count ++ ; ?>
            <?php endforeach ; ?>
            <?php endif ; ?>

        </div>
        
    </div>

    <div class="showImag">
        <form action="<?php echo URLROOT; ?>/ClientController/addClient" method="POST" enctype="multipart/form-data" class="form">

            <div class="title my-3">
                <label for="title">Email: </label>
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="title my-3">
                <label for="">Phone: </label>
                <input type="text" name="phone" placeholder="Phone">
            </div>

            <div class="title my-3">
                <label for="">Description: </label>
                <!-- <input type="text" name="description" placeholder="description"> -->
                <textarea data-target="description" type="text" name="description" placeholder="description"></textarea>
            </div>

            <div class="title my-3">
                <label for="">Date: </label>
                <input type="text" name="date" placeholder="date">
            </div>

            <div>
                <input type="submit" name="submit" value="Add">
            </div>

        </form>
    </div>
</div>