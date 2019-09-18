<?php
include("../includes/connect.php");
include("../includes/functions.php");


if(loggedin()){
$ad_username = $_SESSION['user_id'];

$get_ad = mysqli_query($con,"select * from generalusers where username = '$ad_username'");
$get_d = mysqli_fetch_array($get_ad);


if($ad_username != "Company"){
  header("Location: ../user/home.php");
}

$num_users = 0;
$g = mysqli_query($con,"select * from generalusers");
while(mysqli_fetch_array($g)){
  $num_users++;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Off</title>

    <!-- Bootstrap -->
       <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;"></br>
             <!-- <a href="home.php" class="site_title"><img class=" img-responsive" src="../img/logo2.png" />
</a> -->
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <div class="profile_info">
                <span>Welcome <?php echo "$ad_username"; ?></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="https://cp34-jhb.za-dns.com:2096/" > <i class="fa fa-share-square-o"></i> Send Emails</a></li>
                <li><a href="mydownliners.php" > <i class="fa fa-users"></i> Admin Downliners</a></li>
                 <li><a href="alerts.php" > <i class="fa fa-bell"></i> Publish Alerts</a></li>
                   <li><a href="gh.php"> <i class="fa fa-cog"></i> MoneyComingIn</a></li>
                   <li><a href="ghwait.php"> <i class="fa fa-cog"></i> MoneyComingIn(User Hasnt Confirmed)</a></li>
                   <li class="active"><a href="ph.php"> <i class="fa fa-cog"></i> MoneyComingOut</a></li>
                   <li><a href="phwait.php"> <i class="fa fa-cog"></i> MoneyComingOut(Admin has confirmed)</a></li>
                   <li><a href="../logout.php"><i class="fa fa-clone"></i>Logout </a>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

                 
                      

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin <small>Side</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                 
                  <div class="col-lg-6">
                      <!--notification start-->
                      <section class="panel">
                          <header class="panel-heading">
                            Alerts
                          </header>
                          <div class="panel-body">
                            <div class="alert alert-success fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong><?php echo $num_users; ?></strong> Registered users.
                              </div>      
                              <div class="alert alert-success fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  Do not unblock a users until they have provided a comprehensive reason.
                              </div>                              
                              
                            </div>
                            </section>
                          </div>
                          <div class="col-lg-6">
                            <section class="panel">
                          <header class="panel-heading">
                            Alerts
                          </header>
                          <div class="panel-body">
                                                         
                              <div class="alert alert-info fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong>Be Alert!</strong> for error logs.
                              </div>
                              <div class="alert alert-warning fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong>Warning!</strong> It is not wise to delete a user, rather block..
                              </div>
                            </div>
                            </section>
                          </div>
                          </div>
                            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All <small>Users Who Have To Be Paid</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      DataTable Below contains information of the users Who Have To Be Paid, please do not alter unless subjected to.: <code>$().DataTable() TriangleSuccessTree 404;</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                           <th>
                            Username
                          </th>
                         <th>
                           Amount
                          </th>
                          <th>
                           Level
                          </th>
                          <th>
                           Actions
                          </th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                         $checknumberrs = mysqli_query($con,"SELECT * FROM ghrequests WHERE phusername = 'Company' and phconfirm = ''");
                           while($run = mysqli_fetch_array($checknumberrs)){
                           $ghusername = $run['username'];
                          $ghhamount = $run['amount'];
                          $date = $run['date'];
                          $phpair = $run['ghpair'];
                          $ghconfirm = $run['phconfirm'];
                         
                         
                          $getghdetails = mysqli_query($con,"SELECT * FROM generalusers WHERE username = '$ghusername'");
                          $details = mysqli_fetch_array($getghdetails);
                          $ghname = $details['name'];
                          $ghsurname = $details['surname'];
                          $ghphone = $details['cell'];
 $level = $details['Level'];
                            if($level == "")
                              $level = "1";

                              ?>
                        <tr>
                         
                          
                          
                          <td>
                            <?php echo "$ghusername"; ?>
                          </td>
                          
                          <td>
                           <?php echo "$ghhamount"; ?>
                          </td>
                         
                          <td>
                            <?php echo "$level"; ?>
                          </td>
                            <?php
                             if($ghconfirm == ""){
                              ?>
                                   
                                   <td>
                                  <a href="../user/upgrade.php?bio=<?php echo $phpair; ?>&type=adminpay" class="btn btn-info btn-rounded btn-fw">Confirm Payment</a> 
                                 <?php echo " <a href='viewprofile.php?username=$ghusername' class='btn btn-success'>View Profile</a>";?>
                                  <?php echo " <a href='../includes/timer.php?username=$ghusername&Level=$level' class='btn btn-success'>CheckIf</a>";?>
                                  </td>
                              <?php
                             } else{
                              ?>
                             <td>
                                  <button disabled="disabled" class="btn btn-danger btn-rounded btn-fw">Waiting for user To Confirm Pay</button>
                                  </td>
                                 
                               <?php
                             }
                          ?>
                         
                        </tr>
                        <?php
                           }
                      
                        ?>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

             
              </div>
              </div>
              </div>
          


              

              
        <!-- /page content -->
   <!-- compose -->
   <form method="post">
    <div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
          <span>×</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>
        <div class="btn-group">
        <input id="email" class="form-control" placeholder="Receiver Email">
        </div>
        <div class="btn-group">
        <input name="Subject" class="form-control" placeholder="Subject">
        </div><br><br>
        <div name="message" id="editor" class="editor-wrapper"><p id="edito"></p></div>
      </div>

      <div class="compose-footer">
        <input name="submit" class="btn btn-sm btn-success" type="submit" value="Send"/>
        <button type="button" id="recover"  class="btn btn-success btn-block btn-flat">Send me my password</button>
      </div>
    </div>
    </form>
    <!-- /compose -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript">
      $(function(){
        $("#recover").click(function(){   
         
         var ed =  $("#edito").val();
          alert(ed);
          
         
          
     
        
           
                      
 });
          
});
    </script>
       <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <?php
   if(isset($_POST['submit'])){
    
    $subject = mysqli_real_escape_string($con,trim($_POST['subject']));
    $email = mysqli_real_escape_string($con,trim($_POST['email']));
    $message = mysqli_real_escape_string($con,trim($_POST['message']));
        $to = "support@triple7even.co.za";
        $from = $email;
        $subject = $subjct;
        $message = $message;
        $headers = "From: $email \n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        
        if(mail($to,$subject,$message,$headers)){
           echo "<script>alert('Successfully sent mail');</script>";
        }
    
   }

    ?>

  </body>
</html>

<?php

} else {
   header("Location: ../index.php");
}
?>