<div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2><?php echo $title; ?></h2>    
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <?php
        $attributes = array('name' => 'updateBrand', 'id' => 'updateBrand', 'class' => 'form-no-horizontal-spacing');
        echo form_open_multipart('/admin/brand/edit/' . $brand->id, $attributes);
      ?>
        <input type="hidden" name="img_url" id="img_url"  value="<?php echo $brand->brand_img; ?>">  
        <div class="col-md-14">
              <div class="grid simple">
                <div class="grid-body no-border">
       <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
            <?php if (isset($error)) : ?>
              <div class="alert alert-warning">
                <?php echo $error; ?>
              </div>
            <?php endif; ?>
              
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>
                    <div class="input-append success no-padding">
                    <input type="text" name="inputDate" id="inputDate" class="form-control" placeholder="MM-DD-YYYY" readonly>
                    <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> 
                    </div>

                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputTitle" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $brand->title; ?>">
                        <?php if (isset($msg)) : ?>
                            <div class="alert alert-danger">
                               <?php echo $msg; ?>
                            </div>
                          <?php endif; ?>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputSlug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" value="<?php echo $brand->slug; ?>">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
        
                  <h4>Postal Information</h4>
                  <div class="row form-row">
                      <div class="col-md-12">
                        <input name="userFile" id="userFile" type="file"  class="form-control">
                        <div class="alert alert-waring">Max Filesize: <?php echo ini_get('upload_max_filesize'); ?></div> 
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <textarea name="inputMetaDescriptions" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $brand->meta_description; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input type="text" name="inputMetaKeywords" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $brand->meta_keyword; ?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-clipboard"></i> Update </button>
          <a href="/admin/brand" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
        </div>
        </div>
      </div>
                </div>
              </div>
        </div>

        <?php echo form_close(); ?>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>