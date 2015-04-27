<?php 
function custom_color(){

	$settings = get_option( 'blogs_leono_custom' );
	
	if (  (isset($_POST)) && (count($_POST) > 0) ) {

		switch ($_POST['form']){
			case 'colors':
				unset($_POST['form']);
			  
				$colors = array();
				foreach($_POST['colors'] as $color ) {
					$colors[] = $color;
				}
					
				$settings['colors'] = $colors;	
				break;
				
			case 'uses':
				unset($_POST['form']);
					
				$uses = array();
				
				foreach($_POST['uses']  as $use => $color ) {
					$uses[$use] = $color;
					//echo $color;
				}
				
				$settings['uses'] = $uses;
				break;
		}

		update_option( 'blogs_leono_custom', $settings );

		make_custom_file($settings);
		
	}
	

?>

	<div class="wrap custom-colors">
		<h2>Custom Colors</h2>

		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
			<input type="hidden" value="colors" name="form" />
			<table class="form-table">
				<?php $i = 0; ?>
				<?php foreach($settings['colors'] as $color): $i++;?>
				<tr valign="top"><th scope="row">Color <?php echo $i ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span>Color <?php echo $i ?></span></legend>
							<input type="text" name="colors[<?php echo $i ?>]" value="<?php echo $color?>" />
							<div class="color-demo" style="background: <?php echo $color?>"></div>
						</fieldset>
					</td>
				</tr>
				<?php endforeach; ?>
						
			</table>

			<?php submit_button(); ?>
		</form>
		
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
      <input type="hidden" value="uses" name="form" />
			<table class="form-table">

				<?php foreach($settings['uses'] as $use => $color ): ?>
				<tr valign="top"><th scope="row"><?php echo str_replace('-', ' ', $use); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php echo str_replace('-', ' ', $use); ?></span></legend>
							<select name="uses[<?php echo $use ?>]">
								<?php $i = 0;?>
							  <?php foreach($settings['colors'] as $color_index => $value ): ?>
							  <option value="<?php echo $i; ?>" <?php if ($color_index == $color): ?>selected="selected"<?php endif; ?>>Color <?php echo $i+ 1; ?> <?php echo $settings['colors'][$i]; ?></option>
							  <?php $i++ ?>
							  <?php endforeach; ?>
							</select>
							<div class="color-demo" style="background: <?php echo $settings['colors'][$color]?>"></div>
						</fieldset>
					</td>
				</tr>
				<?php endforeach ?>			
					
			</table>

			<?php submit_button(); ?>
		</form>		
	</div>


<?php 
}