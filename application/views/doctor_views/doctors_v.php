      <!-- -------------------------------------------------------- -->
      <div class="container show-doctor">    
            <div class="row" id="doctor_data"> 
                <!-- doctor sections here -->
                <?php 
                $doctor=APPPATH.'views/included_sections/doctor.php';
                include($doctor);?> 
                <div class="container" aria-label="Page navigation example" id="pagination_link">
                    <?php echo $pagination_links; ?>
                </div>  
           
            </div>
         </div>
   
