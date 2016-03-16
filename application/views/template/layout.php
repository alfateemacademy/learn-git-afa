<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="<?php echo (isset($meta_content)) ? $meta_content : 'Find laptop prices in Pakistan for Dell, HP, Lenovo, Toshiba, Acer, Apple and Sony.  We offer best price for laptops in Pakistan all major cities like Islamabad, Lahore, Karachi, Rawalpindi, Faisalabad etc' ?> ">
<meta name="keywords" content="<?php echo (isset($meta_content)) ? $meta_keyword : 'Mobiles in Pakistan, Laptops in Pakistan, Tablets in Pakistan, Mobile Prices in Pakistan, Laptop Prices in Pakistan, Laptop Price in PakistanLaptop Rates in Pakistan, Apple Laptop Prices in Pakistan, Acer Laptops, HP laptops, Dell Laptop Prices in Pakistan,  Fujitsu Laptop Prices in Pakistan, HP Laptop Prices in Pakistan, Lenovo Laptop Prices in Pakistan, Sony Laptop Prices in Pakistan, Notebook Prices in Pakistan, Laptop Prices, Apple Laptops in Pakistan, Laptop Pakistan Prices, HP Pakistan and HP Laptops, Lenovo Laptops, Sony Laptops, Sony Vaio laptops,' ?>">
<meta name="Author" content="Al-Fateem Academy" />
<meta name="rating" content="General" />
<title>Home - Laptop</title>
<link href="/_assets/img/favicon.ico" type="image/png" rel="icon">

<!-- STYLESHEET FILES -->
<link href="/_assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/_assets/css/default.css" rel="stylesheet" type="text/css">

<!-- JAVASCRIPT FILES -->
<script src="/_assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="/_assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/_assets/plugins/Bootstrap-3-Typeahead-master/bootstrap3-typeahead.min.js" type="text/javascript"></script>



<script>
$(document).ready(function() {
  $('.carousel').carousel({
    interval: 4000
  });

  var input = $("input[name=s]");
  $.get('/home/json_search', function(data) {
  	input.typeahead({
	        source: data,
	        minLength: 1
	    });
  }, 'json');

	input.change(function(){
		var current = input.typeahead("getActive");
		window.location.href = '/product/' + current.id; 
	});



















});
</script>
</head>
<body>
<a name="top"></a>
<!-- HEADER AREA -->
  <?php 
    //echo $_SERVER['SCRIPT_NAME'];
    $segment = $this->uri->segment(1);
  ?>


<header class="navbar navbar-static-top">
	<div class="container">
    	<div class="logo pull-left"><h3>Website Logo</h3></div>
        <div class="top-nav pull-right ">
        	<ul class="nav nav-pills navbar-right">
            	<li <?php if($segment == '') echo 'class="active"' ?>><a href="http://mera_laptop.dev/">Home</a></li>
            	<li <?php if($segment == 'about') echo 'class="active"' ?>><a href="/about">About Us</a></li>
            	<li <?php if($segment == 'vision') echo 'class="active"' ?>><a href="/vision">Our Vision</a></li>
            	<li <?php if($segment == 'contact') echo 'class="active"' ?>><a href="/contact">Contact Us</a></li>
            	<li <?php if($segment == 'webmaster') echo 'class="active"' ?>><a href="/webmaster">Webmaster</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- SEARCH AREA -->
<div class="search-area MB-20">
	<div class="container">
    
    <form action="/home" method="get">  
      <div class="row">
  <div class="col-lg-12">
    <div class="input-group">
      <input type="text" name="s" id="s" value="" class="form-control" placeholder="Search Brand and Product">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">Go!</button>
      </span>
    </div>
  </div>
</div>
</form>

    </div>
</div>

<!-- SLIDESHOW AREA -->
<div class="slideshow-area">
	<div class="container">
    <div class="slider MB-20">
    
    <div id="mySlider" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <?php $slideshows = $this->media->get_all('slideshow'); ?>
   <?php if ($slideshows) : ?>
   <?php foreach ($slideshows as $key => $slideshow) :?>
    <div class="item <?php if($key == 0) echo 'active' ?>">
      <img src="/uploads/<?php echo $slideshow->media_img; ?>" alt="">
    </div>
    <?php endforeach; ?>

    </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mySlider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mySlider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
<?php else : ?>
  <h2 align="center" class="no-record">No Slideshow Found!</h2>
<?php endif; ?>
</div>
</div>

    </div>
</div>

<section id="main-content">
	<div class="container">
    	<div class="left-col pull-left">
        	<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4><i class="glyphicon glyphicon-tags pull-left"></i>&nbsp; Brands</h4>
  </a>
    <?php $brands = $this->brand->view_all(); ?>
    <?php if ($brands) : ?>
      <?php foreach ($brands as $brand) : ?>
        <a href="<?php echo '/brand/' . $brand->slug; ?>" class="list-group-item"><img src="/uploads/<?php echo $brand->brand_img; ?>" width="50" class="img-thumbnail" alt="<?php echo $brand->title; ?>" title="<?php echo $brand->title; ?>"> <?php echo $brand->title; ?>
        <?php 
            $countProduct = $this->product->count_product_by_brand($brand->id);
         ?>
         <span class="badge"><?php echo $countProduct; ?></span></a>
      <?php endforeach; ?>
    <?php else : ?>
      <h4>Sorry Behan! No Brand Found!</h4>
    <?php endif; ?>
  </div>
    
    
    <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4><i class="glyphicon glyphicon-usd pull-left"></i>&nbsp;Price</h4>
  </a>
  <?php
   $priceRange = array(
      '30000-40000' => '30000 To 40000', 
      '40000-50000' => '40000 To 50000', 
      '50000-60000' => '50000 To 60000', 
      '60000-70000' => '60000 To 70000', 
      '70000-80000' => '70000 To 80000', 
      '80000-90000' => '80000 To 90000', 
      '90000-100000' => '90000 To 100000'
   );
  ?>
  <?php foreach ($priceRange as $key => $price) : ?>
    <a href="/product?price=<?php echo $key; ?>" class="list-group-item"><?php echo $price; ?></a>
  <?php endforeach ;?>
</div>
    <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4><i class="glyphicon glyphicon-tower pull-left"></i>&nbsp; New Arrivals</h4>
  </a>
  <?php 
    $newArrivals = array(
      'ci3' => 'All Ci3', 
      'ci5' => 'All Ci5', 
      'ci7' => 'All Ci7', 
      'gaming-laptop' => 'All Gaming Laptop', 
      'touchscreen-laptop' => 'All Touch Screen Laptop' 
    );
  ?>
  <?php foreach ($newArrivals as $key => $newArrival) : ?>
    <a href="/product?type=<?php echo $key; ?>" class="list-group-item"><?php echo $newArrival; ?></a>
  <?php endforeach; ?>
</div>

<div class="list-group">
  <a href="#" class="list-group-item active MB-20">
    <h4><i class="glyphicon glyphicon-send pull-left"></i>&nbsp; Subscribe Us!</h4>
  </a>
<?php 
    $attributes = array('name' => 'subscriberForm', 'id' => 'subscriberForm', 'class' => 'form-horizontal');
    echo form_open('/home/add_subscriber', $attributes);
 ?>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group">
    <div class=" col-sm-10">
      <button type="submit" id="btnSubscriber" class="btn btn-danger">Subscriber Now!</button>
    </div>
  </div>
  <div class="alert alert-success" id="subscriber-msg">&nbsp;</div>

<?php echo form_close(); ?>
</div>
    
    
        
        
        </div>
        <!-- RIGHT CONTENT START-->
        <?php $this->load->view($mainContent); ?>
        <!-- RIGHT CONTENT END -->

    
    </div>

</section>

<footer>
	<div class="container">
    	<div class="footer-col-1 pull-left">
        	<h2>About Us!</h2>
            <p>Our obsession to build beautiful &amp; meaningful project drives us forward every single day.</p>
            <p>Our goal is very simple; to create excellent website that make our career shine and our egos soar. we're small enough to take real pride in each and every job we do in our future. In this web site we display laptops information with manufactures and thier reviews.</p> <p>your suggestions and feedback is very useful for this website and we hope our work will be appreciable by you. </p>
        </div>
        <div class="footer-col-2 pull-left">
        <h2>Brands</h2>
        <?php $brands = $this->brand->view_all(); ?>
    <?php if ($brands) : ?>
      <?php foreach ($brands as $brand) : ?>
        <a href="<?php echo '/brand/' . $brand->slug; ?>"><img src="/uploads/<?php echo $brand->brand_img; ?>" width="50" class="img-thumbnail" alt="<?php echo $brand->title; ?>" title="<?php echo $brand->title; ?>"></a>
      <?php endforeach; ?>
    <?php else : ?>
      <h4>Sorry Behan! No Brand Found!</h4>
    <?php endif; ?>
    
        </div>
        <div class="footer-col-3 pull-right">
                	<h2>Important Note:</h2>
          <div class="alert alert-danger note"> <strong>Note: This website is not related any Retailer or whole sellers shop.</strong> </div>

        </div>
    </div>
</footer>

<script>
  $(function(){
    $("#subscriber-msg").hide();
    $("#btnSubscriber").click(function(e) {
      e.preventDefault();
      if ($("#inputEmail").val() === "" ) 
      {
        alert("Email Shouldn't be Empty!");
        return false;
      }
      else
      {
        var href = $("#subscriberForm").attr('action');
        $("#subscriber-msg").show('fast');
        
        var form_data =
            {
              inputEmail: $("#inputEmail").val()   
            }

        $.ajax({
          url: href,
          type: 'POST',
          dataType: 'json',
          data: form_data,
        })
        .done(function(response) {
          if(response.success)
            $("#subscriber-msg").addClass('alert-success').removeClass('alert-danger');
          else
            $("#subscriber-msg").addClass('alert-danger').removeClass('alert-success');
        });
      }
    });

  });


</script>

</body>
</html>
