<div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2><?php echo $title; ?></h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" id="activeAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAllStatus" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="/admin/brand/add" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                        
                    <br>
                    <?php 
                         $attributes = ['name' => 'formView', 'id' => 'formView'];
                         echo form_open('', $attributes);
                    ?>
                    <?php if ($brands) : ?>

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
                                <th style="width:10%">Brand Image</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($brands as $brand) : ?>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input class="checkboxesParamId" id="chkParamId<?php echo $brand->id; ?>" name="chkParamId[]" type="checkbox" value="<?php echo $brand->id; ?>">
                                        <label for="chkParamId<?php echo $brand->id; ?>"></label>
                                    </div>
                                </td>
                                <td><?php echo $brand->title; ?></td>
                                <td align="center">
                                <img src="/uploads/<?php echo $brand->brand_img; ?>" width="50" class='img-thumbnail'>
                                
                                </td>
                                <td>
                                    
                                        <?php if ($brand->status == 'Deactive') : ?>
                                            <span class="label label-important">
                                                <a class="linkStatus" href="/admin/brand/status/<?php echo $brand->id; ?>" style="color:white;">Deactive</a>    
                                            </span>
                                        <?php else : ?>
                                            <span class="label label-info">
                                                <a class="linkStatus" href="/admin/brand/status/<?php echo $brand->id; ?>" style="color:white;">Active</a>    
                                            </span>
                                        <?php endif; ?>



                                        
                                    </span>
                                    <!-- <span class="label label-info">Active!</span> -->
                                </td>
                                <td>
                                    <a href="/admin/brand/edit/<?php echo $brand->id; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="/admin/brand/new_delete/<?php echo $brand->id; ?>" class="label label-important singleDelete"> <i class="fa fa-trash-o"></i></a>    
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
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
<script>
    $(document).ready(function() {
       
        //SINGLE STATUS WITH AJAX.
        $(".linkStatus").click(function(e) {
            e.preventDefault(); // link function disable.
            var href = $(this).attr('href');
            var self = $(this);
            self.html("<img src='/_assets/img/ajax-loader-blue.gif'>");
            $.get(href, function(response) {
                if (response == 'Active') 
                    self.html('<span class="label label-info">Active</span>');
                else
                    self.html('<span class="label label-important">Deactive</span>');
            });    
        });

        //SINGLE DELETE VIA AJAX.

        $(".singleDelete").click(function(e) {
            e.preventDefault();
            var href = $(this).attr('href');
            var self = $(this); //$(".singleDelete");
            
            if (confirm("Are you sure you want to Delete ?")) 
            {
                self.html("<img src='/_assets/img/ajax-loader-red.gif'>");
                $.get(href, function(response) {
                    if(response.status)
                    {
                        self.closest('tr').css('background-color', 'red').fadeOut('slow'); 
                       $(this).remove();
                    }
                    else
                    {
                        alert(response.message);
                        self.html('<i class="fa fa-trash-o"></i>');

                    }
                    //console.log(response.message);
                    /*if (response == 1)
                    {
                       self.closest('tr').css('background-color', 'red').fadeOut('slow'); 
                       $(this).remove();    
                    }*/
                }, 'json');
            }
            else
                return false;            
        });

        //ALL STATUS ACTIVE
        $("#activeAllStatus").click(function(e) {
            e.preventDefault();
            if ($(".checkboxesParamId:checked").length > 0)
            {
                var serialize = $("#formView").serialize();
                $.post('/admin/brand/active_status', serialize, function(response) {
                    if(response > 0)
                        window.location.href = '/admin/brand';
                });
            }
            else
                alert("click atleast one!");
        });
            //DEACTIVE ALL STATUS

            $("#deactiveAllStatus").click(function(e) {
                e.preventDefault();
                if ($(".checkboxesParamId:checked").length > 0) 
                {
                    var serialize = $("#formView").serialize();
                    $.post('/admin/brand/deactive_status', serialize, function(response) {
                    if (response > 0) 
                        window.location.href = '/admin/brand';
                    });    
                }
                else
                    alert("check atleast one!");
            });



            //DELETE ALL

            $("#deleteAll").click(function(e) {
                e.preventDefault();
                if ($(".checkboxesParamId:checked").length > 0) 
                {
                    var serialize = $("#formView").serialize();
                    $.post('/admin/brand/delete_all', serialize, function(response) {
                    if (response > 0) 
                        window.location.href = '/admin/brand';
                    });    
                }
                else
                    alert("check atleast one!");
            });
    });
</script>
