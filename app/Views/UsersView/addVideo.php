<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="video">
    <div class="add">
        <h1 class="text-center">Add video</h1>
    </div>

    <div>

        <form action="<?php echo URLROOT; ?>/PostController/addVideo " method="POST" enctype="multipart/form-data">

            <div class="title my-3">
                <label for="title">Title: </label>
                <input type="text" name="titre">
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="formFileMultiple" class="">video</label>
                <input class="" type="file" id="formFileMultiple" multiple name="new_video">
            </div>

            <div>
                <input type="submit" name="submit" value="Add">
            </div>
            
        </form>
    </div>
</div>