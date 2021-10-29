<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="video">
  <form class="addImage" action="<?php echo URLROOT;?>/PostController/updateVideo" method="post" enctype="multipart/form-data">
    
    <div class="title my-3">
      <label for="titre">Title: </label>
      <input type="text" name="Titre" placeholder="titre" value="<?= $data->titre; ?>">
    </div>

    <div class="mb-3 d-flex flex-column">
      <label for="img">Img: </label>
      <input type="file" name="new_video">
      <input type="hidden" name="old_video" value="<?= $data->url_video; ?>">
    </div>

    <input type="hidden" name="id" value="<?= $data->id; ?>">
    
    <input type="submit" name="update" value="update">

  </form>

</div>