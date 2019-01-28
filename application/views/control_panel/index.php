<?php 
    /*session_start();
    include("../include/db.php");
     if(!isset($_SESSION['admin_email']))
     {
     echo "<script>window.open('login.php','_self')</script>";    
     }
   else{*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>dody web site</title>
       <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/awosme/font-awesome.css"/>
    <link rel="stylesheet" href="style.css"/>
    </head>
<body>
  <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
             <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }
                if(isset($_GET['login'])){
                        
                        include("login.php");
                        
                }
                  if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }
                if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }
                 if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }
                  if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }
                if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }
                 if(isset($_GET['delete_product_cat'])){
                        
                        include("delete_product_cat.php");
                        
                }
                  if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }
                   if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }
                   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }
                   if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }
                if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }
                if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }
                if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }
                if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }
                 if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }
                if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }
                ?>   
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->
<!--  the files of javascript -->
<script src="../js/jquery-1.12.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<!--   end of file of javascript-->
<!--    ------------------------------------->   
    
    
    </body>
</html>
<?php ?>