<!DOCTYPE html>
<html lang="en">
<head>
<title>Neha Home Tuition</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?= base_url().'assets/' ?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/elements_responsive.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/' ?>styles/contact_responsive.css">
<style type="text/css">
	.modal {
  text-align: center;
  padding: 0!important;
}
.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}
.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
</style>
<script type="text/javascript">
  function addImage(pk) {
    alert("addImage: " + pk);
}

$('#myModal .save').click(function (e) {
    e.preventDefault();
    addImage(5);
    $('#myModal').modal('hide');
    //$(this).tab('show')
    return false;
})
</script>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="<?= base_url().'assets/' ?>images/logo2.png" alt="" class="logo-img">
					
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?= base_url() ?>">home</a></li>
						<li class="main_nav_item"><a href="<?= base_url().'about' ?>">about us</a></li>
						<li class="main_nav_item"><a href="<?= base_url().'subject' ?>">subjects</a></li>
						<!-- <li class="main_nav_item"><a href="courses.php">gallry</a></li> -->
						<li class="main_nav_item"><a href="<?= base_url().'counselling' ?>">free career counselling</a></li>
						<li class="main_nav_item"><a data-toggle="modal" data-target="#myModal" href="<?= base_url().'register'?>">Login/register</a></li>
						<li class="main_nav_item"><a href="<?= base_url().'contact' ?>">contact</a></li>


						<!--<li class="main_nav_item"><a href="elements.php">elements</a></li> 
						<li class="main_nav_item"><a href="news.html">news</a></li>
						<li class="main_nav_item"><a href="contact.html">contact</a></li> -->
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?= base_url().'assets/' ?>images/phone-call.svg" alt="">
			<span>+91 88176-45219</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
		<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="<?= base_url()?>">home</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url().'about' ?>">about us</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url().'subject' ?>">subjects</a></li>
					<!-- <li class="menu_item menu_mm"><a href="courses.php">gallry</a></li> -->
					<li class="menu_item menu_mm"><a href="<?= base_url().'counselling' ?>">free career counselling</a></li>
					<li class="menu_item menu_mm"><a data-toggle="modal" data-target="#myModal"  href="<?= base_url().'register'?>">Login/register now</a></li>
					<li class="menu_item menu_mm"><a href="<?= base_url().'contact' ?>">contect</a></li>
					
				</ul>



				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

			</div>

		</div>

	</div>
	
	<!-- select student or tutor modal-->
<!-- Button trigger modal -->
<!---<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:1250px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Upload</a>

                        </li>
                        <li role="presentation"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Browse</a>

                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">upload Tab</div>
                        <div role="tabpanel" class="tab-pane" id="browseTab">browseTab</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Login Modal -->

<div class="modal" id="mystudentModal">
  <div class="modal-dialog modal-dialog-centered " style="width:1250px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <a href="" data-toggle="modal" data-target="#mystudentModal"><button type="button" class="btn btn-info">Student</button></a>
            <a href="" data-toggle="modal" data-target="#mystudentModal"><button type="button" class="btn btn-info">Student</button></a>
          </div>
        </div>
      	<div>
      		<h2 align="center">Sign in</h2>
      	</div>
          <?php echo form_error('myfield', '<div class="error">', '</div>');?>
        <div>
        <?php  echo  form_open('Enduser/check_login')?>
        	<form action="" method="post" id="Login">

        	<!--<input type="text" placeholder="Username" name="username" id="name" class="form-control" maxlength="30">-->
        	<?php echo form_input(['name'=>'name','placeholder'=>'Username','class'=>'form-control']);?>
         </div>
            <br>
          <div>
          	<!--
        	<input type="password" placeholder="password" name="userpassword" id="pwd" class="form-control" >-->
        	<?php echo form_password(['name'=>'pwd','placeholder'=>'password','class'=>'form-control']);?>

        </div>
          <br>
         <div>

         	<!--
        	<input type="submit" value="Login" id="submitlogin" class="btn btn-primary btn-lg btn-block">-->
        	<?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary btn-lg btn-block']);?>
        </div>

      </div>
       </form>
       <div align="center">
       	<a  href="">Forgot password?<a/>
       		or
       		<a href="" data-toggle="modal" data-target="#signupModal"  >Register Now</a>
       </div>

      <!-- Modal footer -->
      <div class="modal-footer">
     
      </div>

    </div>
  </div>
</div>


<!---Signup_model--->

<div class="modal" id="signupModal">
  <div class="modal-dialog modal-dialog-centered " style="width:1250px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<div>
      		<h2 align="center">Sign in</h2>
      	</div>
        <div>
        	<?php echo form_open()?>
        	<form action="" method="">
        	<?php echo form_input(['name'=>'fname','placeholder'=>'First Name','class'=>'form-control']);?>	
        	<!--<input type="text" placeholder="First Name" name="firstname" class="form-control" maxlength="30">-->
         </div>
            <br>
             <div>
        	<!--<input type="text" placeholder="Last Name" name="lastname" class="form-control" maxlength="30">-->
        	<?php echo form_input(['name'=>'lname','placeholder'=>'Last Name','class'=>'form-control']);?>	
         </div>
         <br>
           <div>
        	<!--<input type="text" placeholder="Mobile Number" name="number" class="form-control">-->
        	<?php echo form_input(['name'=>'number','placeholder'=>'Mobile Number','class'=>'form-control']);?>	
         </div>
         <br>
           <div>
        	<!--<input type="text" placeholder="Email" name="email" class="form-control">-->
        	<?php echo form_input(['name'=>'email','placeholder'=>'Email','class'=>'form-control']);?>
         </div>
         <br>
          <div>

        	<!--<input type="password" placeholder="password" name="username" class="form-control" >-->
        	<?php echo form_password(['name'=>'pwd','placeholder'=>'password','class'=>'form-control']);?>
        </div>
          <br>
         <div>
        	<input type="submit" value="submit"class="btn btn-success btn-lg btn-block">
        </div>

      </div>
       </form>
      <!-- Modal footer -->
      <div class="modal-footer">
     
      </div>

    </div>
  </div>
</div>

 