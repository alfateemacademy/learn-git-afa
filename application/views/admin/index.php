<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="/_assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/_assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="/_assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="/_assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy"  data-original="/_assets/img/work.jpg"  style="background-image: url('/_assets/img/work.jpg')"> 
<div class="container">
  <div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
         <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Sign in to Mera Laptop</h2>
        </div>
        <div class="tiles grey p-t-20 p-b-20 text-black">
              <?php
               $attributes = array('name' => 'login', 'id' => 'login', 'class' => 'animated fadeIn');
                echo form_open('/admin/home/validate', $attributes);
              ?>
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6 ">
                        <input name="inputEmail" id="inputEmail" type="text"  class="form-control" placeholder="Email">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="inputPassword" id="inputPassword" type="password"  class="form-control" placeholder="Password">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-primary btn-cons" id="login_toggle">Login</button>
                      </div>
                      
                    </div>
                <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                  <div class="control-group  col-md-10">
                    <div class="checkbox checkbox check-success"> <a href="#">Trouble login in?</a>&nbsp;&nbsp;
                      <input type="checkbox" id="checkbox1" value="1">
                      <label for="checkbox1">Keep me reminded </label>
                    </div>
                  </div>
                  </div>
              <?php echo form_close(); ?>
        </div>   
      </div>   
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="/_assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/_assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/_assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="/_assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/_assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="/_assets/js/login_v2.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>



</html>