<div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2>Edit Product</h2>   
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php
          $attributes = array('name' => 'formAdd', 'id' => 'formAdd', 'class' => 'dropzone');
          echo form_open_multipart('', $attributes);
        ?>
        <div class="fallback">
        <input name="file" id="file" type="file" multiple />
                  </div>  
                 
        <?php echo form_close(); ?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>