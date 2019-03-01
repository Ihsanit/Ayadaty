<?php if($this->session->userdata('logged_in')):?>
	<select name="city" class="form-control" title="ألمدينة" title="اختر المدينة"autofocus required>
	<?php switch ($doctor['d_city_address']):
	case 1:?>	
		<option value="<?php echo $doctor['d_city_address'];?>" selected>صنعاء             </option>
		<option value="2">عدن              </option>
        <option value="3">تعز           </option>
        <option value="4">عمران             </option>
        </select>
		<?php break;?>
	<?php case 2:?>	
		<option value="1">صنعاء                </option>
		<option value="<?php echo $doctor['d_city_address'];?>" selected>عدن             </option>
        <option value="3">تعز           </option>
        <option value="4">عمران             </option>
        </select> 
		<?php break;?>
	<?php case 3:?>	
		<option value="1">صنعاء                </option>
		<option value="2">عدن             </option>
        <option value="<?php echo $doctor['d_city_address'];?>" selected>تعز           </option>
        <option value="4">عمران             </option> 
        </select>
		<?php break;?>
	<?php case 4:?>	
		<option value="1">صنعاء                </option>
		<option value="2">عدن             </option>
        <option value="3">تعز           </option>
        <option value="<?php echo $doctor['d_city_address'];?>" selected>عمران             </option>
        </select> 
		<?php break;?>                  

<?php endswitch; ?>

<?php else:?>
<select name="city" class="form-control" title="ألمدينة" title="اختر المدينة"autofocus required>
	<option value="" selected disabled>اختر المدينة..</option>
                                <option value="1">صنعاء                </option>
                                <option value="2">عدن              </option>
                                <option value="3">تعز           </option>
                                <option value="4">عمران             </option>                   
</select>
<?php endif;?>


<?php
function show_city($city_num)
{
switch ($city_num) {
	case 1:
		echo "صنعاء";
		break;
	
	case 2:
		echo "عدن";
		break;
	case 3:
		echo "تعز";
		break;
	case 4:
		echo "عمران";
		break;
}//end switch
}//end show_city function
?>