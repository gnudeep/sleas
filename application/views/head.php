<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>National Education Management Information System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.min.css"?>" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo base_url()."assets/plugins/jquery-ui/jquery-ui.css"?>" rel="stylesheet">    
    <link href="<?php echo base_url()."assets/plugins/select2/select2.css"?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/plugins/datatables/css/DT_bootstrap.css"?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/plugins/footable/css/footable.core.css"?>" type="text/css" rel="stylesheet" />



    <link href="<?php echo base_url()."assets/plugins/morris/morris.css"?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/plugins/iCheck-master/skins/all.css"?>" rel="stylesheet"> 
    <link href="<?php echo base_url()."assets/plugins/validationEngine/validationEngine.jquery.css"?>" rel="stylesheet" /> 
    
    <link href="<?php echo base_url()."assets/css/main.css"?>" rel="stylesheet" type="text/css"/>

    <!-- Core Javascript - via CDN --> 
    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.js"?>"></script>     
    <script type="text/javascript" src="<?php echo base_url()."assets/plugins/jquery-ui/jquery-ui.js"?>"></script>     
    <script type="text/javascript" src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.min.js"?>"></script>   
    <script type="text/javascript" src="<?php echo base_url()."assets/plugins/common/jquery.blockUI.js"?>"></script>  

</head>
    
<body>

    <header class="navbar navbar-fixed-top">    <!-- Start: Header -->

        <div class="pull-left"> 
            <a class="navbar-brand" href="<?php echo base_url()."index.php/login/index"?>">
                <div class="navbar-logo">
                    
                </div>
            </a> 
            
            <div class="sidebar-toggle hidden-xs"> <i class="fa fa-bars"></i> </div>
        </div>

        <div class="pull-right header-btns">

            <div class="user-menu">
                <a href="javascript:void(0);" data-toggle="dropdown"> 
                    <span> <?php echo $this->session->username ?> <i class="fa fa-angle-down"></i></span>
                </a>
                <ul class="dropdown-menu animated fadeInRight" role="menu">
                    <li>
                        <ul class="dropdown-items">
                            <li class="admin-menu">
                                <a class="item-message" href="page-calendar.html">
                                    <i class="fa fa-calendar"></i> Calender
                                </a> 
                            </li>
                            <li class="admin-menu">
                                <a class="item-message" href="page-profile.html">
                                    <i class="fa fa-user"></i> Edit Profile
                                </a> 
                            </li>
                            <li>
                                <a class="item-message" href="page-lock.html">
                                    <i class="fa fa-lock"></i> Lock Screen
                                </a> 
                            </li>
                            <li>
                                <a class="item-message" href="logout">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a> 
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>        
    </header>   <!-- End: Header --> 
<input type="hidden" name="hidden" id="hidden-user-type" value="<?php echo $this->session->user_type ?>" />
<input type="hidden" name="hidden-base-url" id="hidden-base-url" value="<?php echo base_url() ?>" />