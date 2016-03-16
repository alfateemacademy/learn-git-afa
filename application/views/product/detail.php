<div class="right-col pull-right">
        <h3><?php echo $singleProduct->title; ?></h3>
        <p><?php echo $singleProduct->description; ?></p>
<div>


<?php echo form_open('cart/add', ['method' => 'post']); ?>
<input type="hidden" name="product_id" value="<?php echo $singleProduct->id; ?>">
<button class="btn btn-primary" type="submit">Add To Cart</button>
<?php echo form_close(); ?>


  <div class="bs-docs-section">
 
  
  <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
    <ul id="myTabs" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#specification" id="specification-tab" role="tab" data-toggle="tab" aria-controls="specification" aria-expanded="true">specification</a></li>
      <li role="presentation"><a href="#gallery" role="tab" id="gallery-tab" data-toggle="tab" aria-controls="gallery">Gallery</a></li>
      <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews</a></li>
            <li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Video</a></li>

      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="specification" aria-labelledBy="specification-tab">
        <h4>Specification</h4>  
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
        
        <table class="table table-hover">
      <tr>
          <td width="300">Processor Type</td>
            <td><?php echo $singleProduct->processor_type; ?></td>
        </tr>
        <tr>
          <td width="300">Processor Speed</td>
            <td><?php echo $singleProduct->processor_speed; ?></td>
        </tr>
        <tr>
          <td width="300">Hard Drive Size</td>
            <td><?php echo $singleProduct->hard_drive_size; ?></td>
        </tr>
        <tr>
          <td width="300">Installed Ram</td>
            <td><?php echo $singleProduct->installed_ram; ?></td>
        </tr>
        <tr>
          <td width="300">Screensize</td>
            <td><?php echo $singleProduct->screen_size; ?></td>
        </tr>
        <tr>
          <td width="300">Operating System</td>
            <td><?php echo $singleProduct->operating_system; ?></td>
        </tr>
        <tr>
          <td width="300">Color</td>
            <td><?php echo $singleProduct->color; ?></td>
        </tr>
        <tr>
          <td width="300">Lan</td>
            <td><?php echo $singleProduct->lan; ?></td>
        </tr>
        <tr>
          <td width="300">Bluetooth</td>
            <td><?php echo $singleProduct->bluetooth; ?></td>
        </tr>
        <tr>
          <td width="300">Modem</td>
            <td><?php echo $singleProduct->modem; ?></td>
        </tr>
        <tr>
          <td width="300">Camera</td>
            <td><?php echo $singleProduct->camera; ?></td>
        </tr>
        <tr>
          <td width="300">Wifi</td>
            <td><?php echo $singleProduct->wifi; ?></td>
        </tr>

</table>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="gallery" aria-labelledBy="profile-tab">
      <h4>Gallery</h4>
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        <?php 
            $getGallery = $this->gallery->gallery_by_product($singleProduct->pid);
        ?>
        <ul class="list-unstyled list-inline">
        <?php foreach ($getGallery as $gallery) : ?>
            <li><img src="/uploads/gallery/<?php echo $gallery->gallery_img; ?>" width="150" height="150" alt="<?php echo $singleProduct->title; ?>" title="<?php echo $singleProduct->title; ?>" class="img-thumbnail"></li>
        <?php endforeach; ?>
        </ul>
        
        
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledBy="profile-tab">
      <h4>Reviews</h4>
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        
        <form class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Fullname">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="URL">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <textarea cols="8" rows="10" class="form-control"></textarea>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Review it!</button>
    </div>
  </div>
</form>
        
        
        
        
        
        
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="video" aria-labelledBy="profile-tab">
      <h4>Video</h4>
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. </p>
        <video width="600" height="300" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
      </div>
      
      
    </div>
  </div><!-- /example -->

</div>
        
        
        </div>
    
    </div>