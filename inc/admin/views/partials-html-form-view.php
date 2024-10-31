<?php








/**



 * The form to be loaded on the plugin's admin page



 */



	if( current_user_can( 'edit_users' ) ) {		



		



		// Populate the dropdown list with exising users.



        $dropdown_html = '<select required id="prwirepro_user_select" name="prwirepro[user_select]">



                            <option value="">'.__( 'Select a WP User', $this->plugin_text_domain ).'</option>';



        $wp_users = get_users( array( 'fields' => array( 'user_login', 'display_name' ) ) );		



		



		foreach ( $wp_users as $user ) {



			$user_login = esc_html( $user->user_login );



			$user_display_name = esc_html( $user->display_name );



			



			$dropdown_html .= '<option value="' . $user_login . '">' . $user_login . ' (' . $user_display_name  . ') ' . '</option>' . "\n";



		}



        $dropdown_html .= '</select>';



		



		// Generate a custom nonce value.



		$prwirepro_add_meta_nonce = wp_create_nonce( 'prwirepro_add_user_meta_form_nonce' ); 



		



		// Build the Form



?>			


	



			

	<br>
<h1>Free Stock Press Release Graphics and Editorial Services</h1>
	  <br>
<div style="padding: 70px;">
	
	<img width ="50%" height="50%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/template001.png'; ?>">
	 <br><h2>Download - <a href="https://prwirepro.com/wp-content/uploads/2019/05/Press-Template-001.pptx">Powerpoint PPTX Format</a> - <a href="https://docs.google.com/presentation/d/1_ms_SX9YnmcIq88H2PqYNJfS-mK_ss7j96rYmeEu3js/edit?usp=sharing">Open and Edit live in Google Slide Format</a></h2>
	</div>
	
<div style="padding: 70px;">
	
	<img width ="50%" height="50%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/template002.png'; ?>">
	 <br><h2>Download - <a href="https://prwirepro.com/wp-content/uploads/2019/05/Press-Template-002.pptx">Powerpoint PPTX Format</a> - <a href="https://docs.google.com/presentation/d/1qsREZhV0hmPQrkLQc9G2r2oDAwKaPeiTaQ0ddKug8tE/edit?usp=sharing">Open and Edit live in Google Slide Format</a></h2>
	</div>
		
<div style="padding: 70px;">
	
	<img width ="50%" height="50%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/template003.png'; ?>">
	 <br><h2>Download - <a href="https://prwirepro.com/wp-content/uploads/2019/05/Press-Template-003.pptx">Powerpoint PPTX Format</a> - <a href="https://docs.google.com/presentation/d/1ZwClY8aY1oUECPhyAX-030y2jru9nRc8BH_zqLAAPs4/edit?usp=sharing">Open and Edit live in Google Slide Format</a></h2>
	</div>

<div style="padding: 70px;">
	
	<img width ="50%" height="50%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/template004.png'; ?>">
	 <br><h2>Download - <a href="https://prwirepro.com/wp-content/uploads/2019/05/Press-Template-004.pptx">Powerpoint PPTX Format</a> - <a href="https://docs.google.com/presentation/d/1o66O9rUPFCDMJ5lWmhYoLJOmD0lIp1hQMxCtsV-QESs/edit?usp=sharing">Open and Edit live in Google Slide Format</a></h2>
	</div>
		
<div style="padding: 70px;">
	
	<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/footer.png'; ?>">
	 
	</div>


	<?php    



	}



	else {  



	?>



		<p> <?php __("You are not authorized to perform this operation.", $this->plugin_name) ?> </p>



	<?php   



	}



