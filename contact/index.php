<!--CONTACT PAGE -->

<?php
require '../includes/application.php';
require '../includes/header.php';
?>
<!-- Custom styles for this template -->
    <link href="<?php echo constant("SITE_URL");?>dist/css/contact.css" rel="stylesheet">
<div id="contact">
	<div class="row">
		<div class="col-md-12">
			<div class="contact-girl">
				<img style="width: 400px;" src="<?php echo constant("SITE_URL");?>img/contact/contact_girl.png"/>
			</div>
		</div>
	</div>
	<div class="contact-heading col-md-8 col-md-offset-2">
		<div class="row">
			<h4 class="blue"><span class="gradient"></span>CONTACT</h4>
		</div>

		<?php

        // check for a successful form post
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

        // check for a form error
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

?>
		<div class="row">
			<form method="POST" action="contact-form-submission.php">
				<div class="col-md-6">
					<input type="text" name="contact_name" id="input1" class="col-md-12 col-sm-12 col-xs-12" placeholder="Name">
					<!--<input type="text" name="contact_phone" class="col-md-12 col-sm-12 col-xs-12" placeholder="Phone">-->
					<input type="text" name="contact_email" id="input2" class="col-md-12 col-sm-12 col-xs-12" placeholder="Email">
					<div class="label-box">
						<label>We'd love to hear from you!
						<div class="select-wrapper">
							<select id="el1" name="subject" class="col-md-12">
								<option value="Contact: General" selected="">Send us a Message:</option>
								<option value="Contact: Booking Request">Booking Request</option>
								<option value="Contact: Press Inquiry">Press Inquiry</option>
							</select>
						</div>
						</label>
					</div>
					<div class="contact-buttons">
						<div class="row col-md-8">
							<div class="reset-form">
								<button type="reset" class="btn btn-primary pull-left"><span class="gradient"></span>Reset Form</button>
							</div>
							<div class="submit">
								<input type="hidden" name="save" value="contact">
								<button type="submit" class="btn btn-primary pull-right">Send</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<textarea name="contact_message" id="input3" class="col-md-12 col-sm-12 col-xs-12" rows="6" placeholder="Message"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require '../includes/footer.php';
?>
