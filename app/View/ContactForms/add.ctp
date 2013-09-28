<div class="container" id="contact-page">

<?php if (!$hide_form){ ?>
	<div class="contactForms form ">
		<h1 class="in-contacts">Contact</h1>
		<p class="contact-smaller">For more information and viewing appointments, contact:</p>
		<p class="contact-bigger">646-519-1261<br/>info@138sackett.com</p>
		<br/>
		<p class="contact-smaller">Register for information and updates:</p>
	<?php echo $this->Form->create('ContactForm'); ?>
		<?php
			echo $this->Form->input('first_name');
			echo $this->Form->input('last_name');
			echo $this->Form->input('phone');
			echo $this->Form->input('email');
			echo $this->Form->input('message');
		?>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
<?php } else{ ?>
	<h1 class="in-contacts">Thank you</h1>
	<p class="contact-bigger">Your Information has been added to our database.</p>
<?php } ?>



<script src="js/jquery.backstretch.min.js"></script>
<script> $.backstretch("/img/contact-image.jpg"); </script>


<div>