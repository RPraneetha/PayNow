<?php
	require_once('../login/auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="PayNow - Admin Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PayNow - Admin</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/jquery.steps.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">
	<!-- start: Header -->
	<nav class="navbar navbar-default header navbar-fixed-top">
			<div class="col-md-12 nav-wrapper">
				<div class="navbar-header" style="width:100%;">
					<div class="opener-left-menu is-open">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>

						<a href="admin_home.php" class="navbar-brand">
						 <b>Pay Now</b>
						</a>

						<div class="container">
					<ul class="nav navbar-nav navbar-right user-nav">
						<li class="user-name"><span>Akihiko Avaron</span></li>
							<li class="dropdown avatar-dropdown">
							 <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	<!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
					<div id="left-menu">
						<div class="sub-left-menu scroll">
							<ul class="nav nav-list">
									<li><div class="left-bg"></div></li>
									<li class="time">
										<h1 class="animated fadeInLeft">21:00</h1>
										<p class="animated fadeInRight">Sat,October 1st 2029</p>
									</li>
									<li class="active ripple">
										<a class="tree-toggle nav-header" href="admin_home.php"><span class="fa-home fa"></span> Dashboard
											<span class="fa-angle-right fa right-arrow text-right"></span>
										</a>
									</li>
									<li class="ripple">
										<a class="tree-toggle nav-header">
											<span class="fa-diamond fa"></span> Vendor
											<span class="fa-angle-right fa right-arrow text-right"></span>
										</a>
										<ul class="nav nav-list tree">
											<li><a href="wizard.php">Account creation</a></li>
											<li><a href="itemadd.php">Item addition</a></li>
											<li><a href="vendor_table.php">Deactivate</a></li>
										</ul>
									</li>
									<li class="ripple">
										<a class="tree-toggle nav-header">
											<span class="fa-area-chart fa"></span> Customer
											<span class="fa-angle-right fa right-arrow text-right"></span>
										</a>
										<ul class="nav nav-list tree">
											<li><a href="addmoney.php">Add Money</a></li>
											<li><a href="cust_table.php">Deactivate Account</a></li>
										</ul>
									</li>
								</ul>
							</div>
					</div>

        <!-- start: Content -->
          <div id="content">
             <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Account Creation</h3>
                        <p class="animated fadeInDown">
                          Vendor <span class="fa-angle-right fa"></span> Account Creation Wizard
                        </p>
                    </div>
                  </div>
              </div>
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <form id="example1" action="#">
                            <h3>Account</h3>
                            <fieldset>
                                <legend>Account Information</legend>

                                <label for="unm">User name *</label>
                                <input id="unm" name="unm" type="text" class="required">
                                <label for="pwd">Password *</label>
                                <input id="pwd" name="pwd" type="password" class="required">
                                <label for="confirm-2">Confirm Password *</label>
                                <input id="confirm-2" name="confirm" type="password" class="required">
                                <p>(*) Mandatory</p>
                            </fieldset>

                            <h3>Profile</h3>
                            <fieldset>
                                <legend>Profile Information</legend>

                                <label for="name-2">First name *</label>
                                <input id="name-2" name="name" type="text" class="required">
                                <label for="surname-2">Last name *</label>
                                <input id="surname-2" name="surname" type="text" class="required">
                                <label for="email-2">Email *</label>
                                <input id="email-2" name="email" type="text" class="required email">
                                <p>(*) Mandatory</p>
                            </fieldset>
                            <h3>Finish</h3>
                            <fieldset>
                                <legend>Terms and Conditions</legend>

                                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        <!-- end: content -->

      </div>


<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/jquery.steps.min.js"></script>
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){



    var form = $("#example1").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18)
            {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {
            alert("Account Created!");
						window.location.href = "datatables.php";
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#pwd"
            }
        }
    });




  });
</script>
<!-- end: Javascript -->
</body>
</html>
