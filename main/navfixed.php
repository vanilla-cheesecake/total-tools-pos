 <div class="navbar navbar-inverse navbar-fixed-top" style=" height:50px;">
     <div class="navbar-inner" style="background-color: rgb(0,113,122); border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;">
         <div class="container-fluid" style="background-color: rgb(0,113,122); border: 0;
    -webkit-box-shadow: none;
    box-shadow: none; height:45px;">
             <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </a>

             <p class="brand" href="#"><b>TOTAL TOOLS ONE-STOP TOOL SHOP</b></p>

             <div class="nav-collapse collapse">
                 <ul class="nav pull-right">
                     <li><a><i class="icon-user icon-large"></i> Welcome:<strong>
                                 <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
                     <li><a> <i class="icon-calendar icon-large"></i>
                             <?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

                         </a></li>
                     <li><a href="../index.php">
                             <font color="red"><i class="icon-off icon-large"></i></font> Log Out
                         </a></li>
                 </ul>
             </div>
             <!--/.nav-collapse -->
         </div>
     </div>
 </div>