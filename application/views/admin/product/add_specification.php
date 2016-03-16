<div class="page-content">
  <div class="content">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
      <h2>Add Product Specification</h2>
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PlACE PAGE CONTENT HERE -->
    <?php
          $attributes = array('name' => 'formAddSpecification', 'id' => 'formAddSpecification');
          echo form_open('', $attributes);
        ?>
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product->id; ?>">
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
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputDate" id="inputDate" type="text"  class="form-control" placeholder="Create Date" readonly>
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputProcessorType" id="inputProcessorType" type="text"  class="form-control" placeholder="Processor Type">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputProcessorSpeed" id="inputProcessorSpeed" type="text"  class="form-control" placeholder="Processor Speed">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputHarddriveSize" id="inputHarddriveSize" type="text"  class="form-control" placeholder="Harddrive Size">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputInstalledRam" id="inputInstalledRam" type="text"  class="form-control" placeholder="Installed Ram">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputScreenSize" id="inputScreenSize" type="text"  class="form-control" placeholder="Screen Size">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputCamera" id="inputCamera" type="text"  class="form-control" placeholder="Camera">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4>Basic Information</h4>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputAvailableColor" id="inputAvailableColor" type="text"  class="form-control" placeholder="Available Color">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputOSPrimary" id="inputOSPrimary" type="text"  class="form-control" placeholder="OS Primary">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputBluetooth" id="inputBluetooth" type="text"  class="form-control" placeholder="Bluetooth">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputWifi" id="inputWifi" type="text"  class="form-control" placeholder="Wifi">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputLan" id="inputLan" type="text"  class="form-control" placeholder="Lan">
                        </div>
                      </div>
                      <div class="row form-row">
                        <div class="col-md-12">
                          <input name="inputModem" id="inputModem" type="text"  class="form-control" placeholder="Modem">
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
    <?php form_close(); ?>
    <!-- END PLACE PAGE CONTENT HERE -->
  </div>
</div>