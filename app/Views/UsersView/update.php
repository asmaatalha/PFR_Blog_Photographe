<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="imag">
  <form class="addImageR" action="<?php echo URLROOT;?>/PostController/update" method="post" enctype="multipart/form-data">
    
    <div class="title my-3">
      <label for="titre">Title: </label>
      <input type="text" name="Titre" placeholder="titre" value="<?= $data->titre; ?>">
    </div>

    <div class="mb-3 d-flex flex-column">
      <label for="img">Img: </label>
      <input type="file" name="Img">
      <input type="hidden" name="old_image" value="<?= $data->url_imge; ?>">
    </div>

    <input type="hidden" name="id" value="<?= $data->id; ?>">
    
    <input type="submit" name="update" value="update">

  </form>

</div>