<div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Manage Products</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/product/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <br>
                    <?php if ($products) : ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:40%">Title</th>
                                <th style="width:15%">Brand</th>
                                <th style="width:17%">Product Image</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox11" type="checkbox" value="1">
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td><?php echo $product->title; ?><br>
                                <?php if ($spec = $this->specification_model->spec_all($product->id)) : ?>
                                    <a href="/admin/specification/edit/<?php echo $spec->id;  ?>" class="btn btn-mini btn-warning tip" data-toggle="tooltip" title="Edit Specification"><i class="fa fa-edit"></i></a>
                                <?php else:?>
                                    <a href="/admin/specification/add/<?php echo $product->id; ?>" class="btn btn-mini btn-warning tip" data-toggle="tooltip" title="Add Specification"><i class="fa fa-plus-square"></i></a>
                                <?php endif;?>
                                    <a href="/admin/gallery/add/<?php echo $product->id; ?>" class="tip" data-toggle="tooltip" title="Add Gallery"> <span class="label label-success"><i class="fa fa-picture-o"></i></span></a>
                                </td>
                                <td><?php echo $product->brand_id; ?></td>
                                <td><img src="/uploads/<?php echo $product->product_img; ?>" width="50" height="50"></td>
                                <td>                          
                                    <?php if ($product->status == 'Active') : ?>
                                        <a href="/admin/product/status/<?php echo $product->id; ?>" style="color:white"><span class="label label-info">Active!</span></a>        
                                    <?php else :?>
                                        <a href="/admin/product/status/<?php echo $product->id; ?>" style="color:white"><span class="label label-important">Deactive!</span></a>        
                                    <?php endif; ?>                                
                                 </td>
                                <td>
                                    <a href="/admin/product/edit/<?php echo $product->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/product/delete/<?php echo $product->id; ?>" class="label label-important"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php echo $this->pagination->create_links(); ?>
                <?php else : ?>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
