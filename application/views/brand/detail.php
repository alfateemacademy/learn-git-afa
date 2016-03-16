<div class="right-col pull-right">
        
  <?php if ($products) : ?>
    <?php foreach ($products as $product) : ?>

    <div class="col-sm-6 col-md-4 product-box">
      <div class="thumbnail">
        <img src="/uploads/<?php echo $product->product_img; ?>" alt="<?php echo $product->title; ?>" title="<?php echo $product->title; ?>">
        <div class="caption">
          <h4><a href="<?php echo '/product/' . $product->slug; ?>"><?php echo $product->title; ?></a></h4>
          <p><?php echo substr($product->description, 0, 100); ?>...</p>
          <p><?php echo number_format($product->price); ?></p>
          <p><a href="<?php echo '/product/' . $product->slug; ?>" class="btn btn-primary" role="button">Read more</a> </p>
        </div>
      </div>
    </div>
<?php endforeach; ?>
  <?php else : ?>
    <span class="btn btn-danger">Sorry! No Product Found!</span>
  <?php endif; ?>


     


</div>