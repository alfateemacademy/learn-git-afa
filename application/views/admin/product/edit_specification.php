<div class="page-content">
  <div class="content">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
      <h2>Add Product Specification</h2>
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->

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
                  <?php
                  $attributes = array('name' => 'editSpecification', 'id' => 'editSpecification', 'class' => 'form-no-horizontal-spacing' );
                  echo form_open('/admin/specification/edit/' . $specification->id, $attributes);
                  ?>
                  <div class="row column-seperation">
                    <div class="col-md-6">
                      <h4>Basic Information</h4>
                      
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputDate" id="inputDate" type="text"  class="form-control" placeholder="Create Date" readonly value="<?php echo $specification->create_date; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputProcessorType" id="inputProcessorType" type="text"  class="form-control" placeholder="Processor Type" value="<?php echo $specification->processor_type; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputProcessorSpeed" id="inputProcessorSpeed" type="text"  class="form-control" placeholder="Processor Speed" value="<?php echo $specification->processor_speed; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputHarddriveSize" id="inputHarddriveSize" type="text"  class="form-control" placeholder="Harddrive Size" value="<?php echo $specification->processor_type; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputInstalledRam" id="inputInstalledRam" type="text"  class="form-control" placeholder="Installed Ram" value="<?php echo $specification->hard_drive_size; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputScreenSize" id="inputScreenSize" type="text"  class="form-control" placeholder="Screen Size" value="<?php echo $specification->installed_ram; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputCamera" id="inputCamera" type="text"  class="form-control" placeholder="Camera" value="<?php echo $specification->camera; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4>Basic Information</h4>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputAvailableColor" id="inputAvailableColor" type="text"  class="form-control" placeholder="Available Color" value="<?php echo $specification->color; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputOSPrimary" id="inputOSPrimary" type="text"  class="form-control" placeholder="OS Primary" value="<?php echo $specification->operating_system; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputBluetooth" id="inputBluetooth" type="text"  class="form-control" placeholder="Bluetooth" value="<?php echo $specification->bluetooth; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputWifi" id="inputWifi" type="text"  class="form-control" placeholder="Wifi" value="<?php echo $specification->wifi; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputLan" id="inputLan" type="text"  class="form-control" placeholder="Lan" value="<?php echo $specification->lan; ?>">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputModem" id="inputModem" type="text"  class="form-control" placeholder="Modem" value="<?php echo $specification->modem; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                <a href="/admin/product" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
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