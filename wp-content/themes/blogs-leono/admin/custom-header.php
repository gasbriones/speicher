<?php 
function custom_header(){

	$settings = get_option( 'blogs_leono_custom' );
	$valid_file_types = array(
			"image/jpeg" => true,
			"image/png" => true,
	);	
	
	if (  (isset($_POST)) && (count($_POST) > 0) ) {
		
		$settings['header-pattern'] = $_POST['header-pattern'] != 4 ? $_POST['header-pattern'] : null;
		$settings['use-pattern-avatar'] = isset($_POST['use-pattern-avatar']) ? true : false;
		$settings['header-gradient'] = $_POST['header-gradient'];		

		if(isset($_FILES['header-image']) && @$_FILES['header-image']['name']){
			if($_FILES['header-image']['error'] == FALSE){
				if(@$valid_file_types[$_FILES['header-image']['type']]){
					$wp_upload_dir = wp_upload_dir();
					$filename = sanitize_file_name($_FILES['header-image']['name']);	
					
					//delete old
					if ($settings['header-image'] != null){
						$old = explode("/", $settings['header-image']);
						$old = $old[count($old)-1];
					  unlink($wp_upload_dir['basedir'] . '/' . $old);					
					}
					
					move_uploaded_file($_FILES['header-image']['tmp_name'], $wp_upload_dir['basedir'] . '/' . $filename);
					$settings['header-image'] = $wp_upload_dir['baseurl'] . '/' . $filename;
					
				}
			} 
		}
		
		update_option( 'blogs_leono_custom', $settings );
		
		make_custom_file($settings);
		
	}
	

?>

	<div class="wrap custom-header">
		<h2>Custom Header</h2>

		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data">
			<table class="form-table">

				<tr valign="top" class="image-radio-option header-pattern"><th scope="row">Header Pattern</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Header Pattern</span></legend>
						<?php for ($i = 1; $i <= 4; $i++): ?>
								<div class="layout">
								<label class="description">
									<input type="radio" name="header-pattern" value="<?php echo $i ?>" <?php if ( ($settings['header-pattern'] == null) || ($settings['header-pattern'] == $i) ):?>checked="checked"<?php endif;?> />
									<span>
										<img src="<?php bloginfo('template_url'); ?>/admin/images/pattern-sample-<?php echo $i; ?>.png" width="136" height="122" alt="Sample Pattern <?php echo $i; ?>" />
										Sample Pattern <?php echo $i; ?>
									</span>
								</label>
								</div>
					  <?php endfor; 	?>
						</fieldset>
					</td>
				</tr>
				
				<tr valign="top" class="image-radio-option header-pattern header-gradient">
					<th scope="row">Header Gradient</th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Header Gradient</span></legend>
						<?php for ($i = 0; $i <= 1; $i++): ?>
								<div class="layout">
								<label class="description">
									<input type="radio" name="header-gradient" value="<?php echo $i ?>" <?php checked($settings['header-gradient'], $i)?> />
									<span>
										<div class="gradient gradient-<?php echo $i ?>"></div>
										Gradient <?php echo $i == 0 ? 'Vertical' : 'Horizontal'; ?>
									</span>
								</label>
								</div>
					  <?php endfor; 	?>
					  <?php $i++; ?>
								<div class="layout">
								<label class="description">
									<input type="radio" name="header-gradient" value="<?php echo $i ?>" <?php checked($settings['header-gradient'], $i)?> />
									<span>
										<img src="<?php bloginfo('template_url'); ?>/admin/images/pattern-sample-4.png" width="136" height="122" alt="No Gradient" style="display:block"/>
										No Gradient
									</span>
								</label>
								</div>					  
						</fieldset>
					</td>
				</tr>					
				
				<tr valign="top">
					<th scope="row">Avatar Pattern</th>
					<td>
						<label><input type="checkbox" name="use-pattern-avatar" <?php checked( true, $settings['use-pattern-avatar'] ); ?>>Use pattern in avatar BG.</label>
					</td>
				</tr>				
								
				<tr valign="top">
					<th scope="row">Header Image</th>
					<td>
					  <?php if ($settings['header-image'] != null): ?>
					  	<img src="<?php echo $settings['header-image']?>" width="338" />
					  <?php endif; ?>
						<p>You can select an image to be shown at the top of your site by uploading from your computer.<br>
						Images of exactly <strong>338 × ??? pixels</strong> will be used as-is.</p>
						
						<label for="upload">Choose an image from your computer:</label><br>
						<input type="file" id="upload" name="header-image">
						
					</td>
				</tr>											
						
			</table>

			<?php submit_button(); ?>
		</form>
		

	</div>


<?php 
}