<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="imag">
    <div class="add">
        <h1 class="text-center">Add Image</h1>
    </div>

    <div>

        <form action="<?php echo URLROOT; ?>/PostController/addImage " method="POST" enctype="multipart/form-data">

            <div class="title my-3">
                <label for="title">Title: </label>
                <input type="text" name="titre">
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="img">image: </label>
                <input type="file" name="Img">
            </div>

            <div>
                <input type="submit" name="submit" value="Add">
            </div>
            
        </form>
    </div>

</div>