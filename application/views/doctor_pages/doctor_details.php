<div class="container">
<?php echo heading($page_name,2,'class="text-center"');?>
<?php echo br(2);?>
<div class="row">    
    <div class='col-lg-3 col-sm-12'>
    <div>
    <?php 
            $img_attributes=array(
                'src'=>site_url().'assets/images/doctors/dr.png',                
                'class'=>'thumb rounded doctor-img',
                'alt'=>'Doctor profile image'
                );
            
            echo img($img_attributes);
    ?>
    </div>
     <ul class="doctor-contact contact-list">
         <li>
            <i class="fa fa-phone"></i><span style='padding-left:10px'>+971-4-4579111</span>
        </li>
        <li>
            <i class="fa fa-envelope"></i><span style='padding-left:10px'>info@doctorsclinicdubai.ae</span>
        </li>
    </ul>
    </div>
    <div class='col-md-1'>
    </div>
    <div class='col-lg-8 col-sm-12'>
        <?php echo heading('Dr. Rashida Juzar Ali',2);?>
         <?php echo heading('General Dentist',4);?>
            <ul>
                <li>Neuromuscular Dentistry</li>
            </ul>
            <p style="text-align: justify;">
                <span style="color: #262626;">Dr. Rashida has 10 years of rich clinical experience. She has performed over 1000 cases of smile makeover till date. She have headed over 2 biggest dental chains of India providing her entrepreneur skills and taking care of not only the clinical aspect but also other arenas like administration, marketing, expansion and as a Clinical Director. Apart from cosmetic, Botox &amp; Implants, most important area of focus remain Dental Occlusion, Neuromuscular Dentistry and Cranio Sacral Dentistry.</span>
            </p>
    </div>
    
    
</div>
