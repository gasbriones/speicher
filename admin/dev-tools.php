<?php 
function developer_tool(){

	$settings = get_option( 'blogs_leono_custom' );
	
	if (  (isset($_POST)) && (count($_POST) > 0) ) {
		
		if (isset($_POST['reset'])){
			$settings = blogs_leono_custom();
		}
		
		if (isset($_POST['submit'])){
			$settings = unserialize(stripslashes($_POST['settings']));
		}
		
		update_option( 'blogs_leono_custom', $settings );

		make_custom_file($settings);
		
	}
	
?>

	<div class="wrap custom-colors">
		<h2>Developer Tools</h2>

		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

			<table class="form-table">
				<tr valign="top"><th scope="row">Current settings:</th>
					<td>
						<legend class="screen-reader-text"><span>Settings:</span></legend>
							<div><?php echo serialize($settings) ?></div>
						</td>
				</tr>
				
				<tr valign="top"><th scope="row">Use this settings:</th>
					<td>
						<legend class="screen-reader-text"><span>Use this settings:</span></legend>
							<textarea name="settings"><?php echo stripslashes(serialize($settings)); ?></textarea>
						
					</td>
				</tr>			
			</table>

			<p class="submit">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
				<input class="preview button" type="submit" name="reset" value="Reset settings">
			</p>
		</form>
		

	</div>


<?php 
}