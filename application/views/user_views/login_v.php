
<div class="container">
<div id="id01" class="modal">
  
  <?php  
  $included_input=APPPATH.'/views/include_views/include_input.php';
  include($included_input);   
  echo validation_errors();
  $attr= array('class' =>  'modal-content animate');
  echo form_open('user_c/login',$attr);
  ?>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="<?php echo base_url();?>assets/images/users/img_avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="book-container container">
      <?php echo form_label('Email*');?>         
      <?php make_input('','email','u_email','Your Email');?>
      <?php echo form_label('Password*');?>
      <?php make_input('','password','u_password','Your Password');?>        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="forgget-psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>




