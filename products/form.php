<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <form action=""  method="POST" enctype="multipart/form-data">
        <?php   if($product['image']): ?>
            <img src="<?php echo $product["image"] ?>" alt="" class="edit-img">
                <?php endif; ?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Image</label>
    <br>
    <input type="file" name="img">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Title</label>
    <input type="text" value="<?php echo $title?>" name="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description</label>
    <textarea class="form-control" name="description"><?php echo $description?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="number" step=".01" value="<?php echo $price?>" class="form-control" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>