<?php

function dax_metrix(){

    $settings = stripslashes(get_dax_file());

	if (  (isset($_POST)) && (count($_POST) > 0) ) {

        if (isset($_POST['reset'])){
            $settings = "Inserte su código DAX";
        }

        if (isset($_POST['submit'])){
			$settings = stripslashes($_POST['settings']);
		}

        $settings = make_dax_file(stripslashes($settings));

	}
	
?>

	<div class="wrap custom-colors">
		<h2>Dax Metrix</h2>

		<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">

			<table class="form-table">
				<tr valign="top"><th scope="row">Use this dax script:</th>
					<td>
						<legend class="screen-reader-text"><span>Use this settings:</span></legend>
							<textarea name="settings"><?php echo stripslashes($settings); ?></textarea>

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