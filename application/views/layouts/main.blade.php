<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php echo HTML::style('css/bootstrap.css'); ?>
    <?php echo HTML::style('css/bootstrap-responsive.css'); ?>
    <?php echo HTML::style('css/datepicker.css'); ?>

    <?php echo HTML::script('js/jquery-1.10.0.min.js'); ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <style>
    body {
    	padding: 5px;
    }
    </style>
  </head>
  
  <body>
    <div class="navbar navbar-inverse" style="position: static;">
      	<div class="navbar-inner">
        	<div class="container">
          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            	    <span class="icon-bar"></span>
        	        <span class="icon-bar"></span>
                	<span class="icon-bar"></span>
	        	</a>
              	<a class="brand" href="/home">Dashboard</a>
              	<div class="nav-collapse collapse navbar-inverse-collapse">

              		<!-- Human Resources -->
                    <ul class="nav">
                      	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Human Resources<b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                        		<!-- <li class="divider"></li> -->
                        		<li class="nav-header">Request Forms</li>
                          		<li><a href="/human-resources/leave-request">Leave Request</a></li>
                          		<li><a href="/human-resources/official-business-and-overtime-request">Official Business &amp; Overtime Request</a></li>
                          		<li><a href="/human-resources/work-from-home-request">Work from Home Request</a></li>
                          		<!-- <li class="nav-header">Admministration</li> -->
                          		<li><a href="/human-resources/personnel-requisition-request">Personnel Requisition Request</a></li>
                          		<li><a href="/human-resources/company-loan-request">Company Loan Request</a></li>
                          		<li><a href="/human-resources/colleages-diary">Colleague's Diary</a></li>
                              <li class="divider"></li>
                              <li class="nav-header">Configuration</li>
                              <li><a href="/human-resources/employee-list">Employee List</a></li>
                        	</ul>
                  		</li>
                    </ul>

                    <!-- Administration -->
                    <ul class="nav">
                      	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                          		<li><a href="#">Vehicle Requisition Request (VR)</a></li>
                          		<li><a href="#">Personal Mobile Usage Declaration Request (PMUD)</a></li>
                          		<li><a href="#">Purchase Requisition Request</a></li>
                          		<li><a href="#">Repair Requisition Request</a></li>
                          		<li><a href="#">Work Permit Request</a></li>
                        	</ul>
                  		</li>
                    </ul>

                    <!-- Finance -->
                    <ul class="nav">
                      	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Finance <b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                          		<li><a href="#">Petty Cash Request (PCR)</a></li>
                          		<li><a href="#">Petty Cash Liquidation/Reimbursement (PCLR)</a></li>
                          		<li><a href="#">Request for Payment (RFP)</a></li>
                          		<li><a href="#">Liquidation/Reimbursement (LR)</a></li>
                        	</ul>
                  		</li>
                    </ul>
                    
                    <!-- Profile Preferences -->
                    <ul class="nav pull-right">
                      	<!-- <li class="divider-vertical"></li> -->
                      	<!-- <form class="navbar-search pull-left" action="">
	                       <input type="text" class="search-query span2" placeholder="Search">
	                     </form> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge badge-important">10</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="badge badge-warning">1</span> Pending Leave Request</a></li>
                                <li><a href="#"><span class="badge badge-success">2</span> Approved Leave Request</a></li>
                                <li><a href="#"><span class="badge badge-important">2</span> Denied OT/OB Request</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                      	<li class="dropdown">
                        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ridvan Baluyos <b class="caret"></b></a>
                        	<ul class="dropdown-menu">
                          		<li><a href="#">Preferences</a></li>
                          		<li class="divider"></li>
                          		<li><a href="#">Log Out</a></li>
                        	</ul>
                      	</li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>

    <!-- container -->
    <div class="container-fluid">
	    <ul class="breadcrumb">
		  	<li><a href="#">Home</a> <span class="divider">/</span></li>
		  	<li class="active">Dashboard</li>

		</ul>
   		@yield('content')
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
    <?php echo HTML::script('js/helpers.js'); ?>
    <?php echo HTML::script('js/bootstrap-datepicker.js'); ?>
    
    
  </body>
</html>
