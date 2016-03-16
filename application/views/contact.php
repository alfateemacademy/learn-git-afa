<div class="right-col pull-right"> 
  <div class="row">
    <h1>Contact Us Page</h1>
    <h4>It would be great o hear from you!</h4>
    <?php
      $attributes = array('name' => 'contactForm', 'id' => 'contactForm' ); 
      echo form_open('/home/contact/', $attributes);
    ?>
    <ul class="list-unstyled contact-form">
      <li><input type="email" class="form-control" name="inputFullname" id="inputFullname" placeholder="Fullname"></li>
      <li><input type="email" class="form-control" name="inputUrl" id="inputUrl" placeholder="URL"></li>
      <li><input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email"> </li>
      <li><textarea name="inputMessag" id="inputMessag" cols="30" rows="10" class="form-control" placeholder="Message"></textarea></li>
      <li><input type="submit" value="SEND US" class="btn btn-danger"></li>
    </ul>
  <?php 
    echo form_close();
  ?>
  </div>
</div>