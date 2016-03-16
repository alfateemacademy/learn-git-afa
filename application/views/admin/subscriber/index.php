<div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Manage Subscriber</h2>
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
                            <a href="/admin/subscriber/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox10" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th style="width:50%">Fullname</th>
                                <th style="width:50%">Email</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <?php foreach ($subscribers as $subscriber) : ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox<?php echo $subscriber->id; ?>" name="subscriber_ids[]" type="checkbox" value="<?php echo $subscriber->id; ?>">
                                        <label for="checkbox<?php echo $subscriber->id; ?>"></label>
                                    </div>
                                </td>
                                <td>
                                <a href="#" name="fullname" data-name="fullname" class="xeditable" data-type="text" data-pk="<?php echo $subscriber->id; ?>" data-url="/admin/subscriber/edit" data-title="Enter fullname" > 
                                    
                                    <?php echo $subscriber->fullname; ?>

                                </a>


                                    </td>
                                <td><a href="#" name="fullname" data-name="email" class="xeditable" data-type="text" data-pk="<?php echo $subscriber->id; ?>" data-url="/admin/subscriber/edit" data-title="Enter Email" > 
                                    
                                    <?php echo $subscriber->email; ?>

                                </a></td>
                                <td>
                                    <?php if ($subscriber->status == 'Deactive') : ?>
                                        <a href="/admin/subscriber/status/<?php echo $subscriber->id; ?>"><span class="label label-important">Deactive</span></a>
                                        
                                    <?php else : ?>
                                        <a href="/admin/subscriber/status/<?php echo $subscriber->id; ?>"><span class="label label-info">Active</span></a>
                                    
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="/admin/subscriber/edit/<?php echo $subscriber->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/subscriber/remove/<?php echo $subscriber->id; ?>" class="label label-important"> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                    <div>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="alert alert-info">
                        <strong>Info!</strong> No Record Found!
                    </div>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>