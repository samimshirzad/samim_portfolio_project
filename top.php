<?php require_once("connection.php"); ?>
<html>

<head>

	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<title>Afghan Technology MIS</title>
	
</head>

<body>

<div class="container">

	<div id="banner">
		<div id="logo">
			<img src="images/logo.png" width="200">
		</div>
	</div>
	
	<div id="menu">
		
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
			<?php if(isset($_SESSION["login"])) { ?>
            	<ul class="nav navbar-nav" id="nav-top">
                	<li><a href="#">Home</a></li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Employee<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Add New Employee</a></li>
                        	<li><a href="#">Add New Contract</a></li>
                            <li><a href="#">Employee List</a></li>
                            <li><a href="#">Staff Attendance</a></li>
                            <li><a href="#">Staff Overtime</a></li>
                            <li><a href="#">Leave Request</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Customer<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Add New Customer</a></li>
                            <li><a href="#">Customer Information</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Project<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Add New Project</a></li>
                            <li><a href="#">Project List</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Finance<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Salary Payment</a></li>
                            <li><a href="#">Expense</a></li>
                            <li><a href="#">Income</a></li>
                        </ul>                    
                    </li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Report<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">HR Report</a></li>
                            <li><a href="#">Salary Report </a></li>
                            <li><a href="#">Expense Report</a></li>
                            <li><a href="#">Income Report</a></li>
                        </ul>                    
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown">Settings<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Deprtments</a></li>
                            <li><a href="#">Chart of Account</a></li>
                            <li><a href="#">User Management</a></li>
                            <li><a href="#">Province</a></li>
                            <li><a href="#">Project Types</a></li>
                        </ul>                    
                    </li>
                    <li><a href="logout.php">Logout</a></li>  
                </ul>
				<?php } ?>
			</span>
            </div>  
        </nav>
		
		
	</div>

	<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	</div>
	
	<div id="content" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">