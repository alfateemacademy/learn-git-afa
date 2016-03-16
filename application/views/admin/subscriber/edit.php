<div class="page-content"> 
    <div class="content">  
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">  
        <h2>Edit Subscriber</h2>    
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <?php
        $attributes = array('name' => 'formAdd', 'id' => 'formAdd', 'class' => 'form-no-horizontal-spacing');
        echo  form_open('/admin/subscriber/edit/' . $subscriber->id, $attributes);
      ?>
        <div class="col-md-14">
              <div class="grid simple">
                <div class="grid-body no-border">
                  <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              &nbsp;
            </div>
            <div class="grid-body no-border">
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputDate" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $subscriber->create_date; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputFullname" id="inputFullname" type="text"  class="form-control" placeholder="Fullname" value="<?php echo $subscriber->fullname; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <input name="inputEmail" id="inputEmail" type="text"  class="form-control" placeholder="Email" value="<?php echo $subscriber->email; ?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
       <div class="form-actions">
          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-clipboard"></i> Update </button>
          <a href="/admin/subscriber" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
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