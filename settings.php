<?php
function vortex_tag_settings()
	{  
		if(isset($_POST['add_setting']) == 'Save')
		{
		        $vortex_bg         = sanitize_text_field($_POST['vortex_bg']);	
				$vortex_font_color = sanitize_text_field($_POST['vortex_font_color']);
				$vortex_speed      = $_POST['vortex_speed'];
				$safe_vortex_speed = intval( $vortex_speed );
				if ( ! $safe_vortex_speed )
				{
  					$safe_vortex_speed = '150';
				}
		        update_option('vortex_bg',$vortex_bg);
				update_option('vortex_font_color',$vortex_font_color );
				update_option('vortex_speed',$safe_vortex_speed );	
		}
	 ?>
		<div class="wrap">
        <div class="icon32" id="icon-options-general">
		</div>
          <h2>
        <?php _e('Votext tags settings'); ?>
        </h2>
        <form name="form1" id="form1" method="post" action="">
    	<table width="70%" style="border-collapse: collapse; clear: both; margin-bottom: -8px; margin-top: 0.5em;" class="form-table">
        <tbody>
        	<tr class="form-field" valign="top">
        	<td width="21%" height="20" scope="row"><label>Background</label></td>
            <td  height="20" scope="row"> <input type="text" style="border:1px solid #ccc;width:300px;" value="<?php echo get_option('vortex_bg') ?>" size="50" name="vortex_bg" id="vortex_bg" ></td>
       		</tr>
            <tr class="form-field" valign="top">
        	<td width="21%" height="20" scope="row"><label>Font Color</label></td>
            <td  height="20" scope="row"> <input type="text" style="border:1px solid #ccc;width:300px;" value="<?php echo get_option('vortex_font_color') ?>" size="50" name="vortex_font_color" id="vortex_font_color" ></td>
       		</tr>
            <tr class="form-field" valign="top">
        	<td width="21%" height="20" scope="row"><label>Speed</label></td>
            <td  height="20" scope="row"> <input type="text" style="border:1px solid #ccc;width:300px;" value="<?php echo get_option('vortex_speed') ?>" size="50" name="vortex_speed" id="vortex_speed" ></td>
       		</tr>
                     <tr>                 
       				<td colspan="2" align="left">
       				     <input type="submit" value="Save" class="button-primary" id="add_subsriber" name="add_setting" style="width:auto;">
        			</td>
       		</tr>
       </tbody>
       </table>
       </form>
        </div>
<?php if(isset($_POST['add_setting']) == 'Save' ) 
{
	?>
   	 <div id="message" class="updated fade">
	  <p>
      <strong>	    
	  Setting saved
      </strong></p>
	</div>
  <?php	
		}
    }
?>
