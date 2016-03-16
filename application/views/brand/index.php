<div class="right-col pull-right">
  <h2>All Brands</h2>      
  <table class="table table-hover">
  <?php foreach ($brands as $brand) : ?>
    <tr>
      <td><a href="<?php echo '/brand/' . $brand->slug; ?>"><img src="/uploads/<?php echo $brand->brand_img; ?>" width="50" class="img-thumbnail"> <strong><?php echo $brand->title; ?></strong></a></td>
    </tr>
  <?php endforeach; ?>

  </table>
  

     


</div>