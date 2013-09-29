<div class="container" id="contact-page">
	

		<?php if (!$hide_form){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="contactForms form ">
						<h1 class="in-contacts">Contact</h1>
						<p class="contact-smaller">For more information and viewing appointments, contact:</p>
						<p class="contact-bigger">646-519-1261<br/>info@138sackett.com</p>
						<br/>
						<p class="contact-smaller">Register for information and updates:</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<?php echo $this->Form->create('ContactForm'); ?>
				<div class="col-md-5 col-sm-5 ">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<?php echo $this->Form->input('first_name', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder'=>'First Name*')); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<?php echo $this->Form->input('last_name', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder'=>'Last Name*')); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<?php echo $this->Form->input('phone', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder'=>'Phone')); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<?php echo $this->Form->input('email', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder'=>'Email*')); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 ">
					<div class="form-group">
						<?php echo $this->Form->input('message', array('div'=>false, 'label'=>false, 'class'=>'form-control', 'placeholder'=>'Comments*')); ?>
					</div>
					<span class="pull-left">*Required fields</span>
					<?php echo $this->Form->submit('Submit', array('div'=>false, 'label'=>false, 'class'=>'btn pull-right')); ?>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
			
		</div>
		<?php } else{ ?>
			<div class="row">
				<div class="col-md-12">
					<h1 class="in-contacts">THANK YOU<br/>Your Information has been added to our database.</h1>
				</div>
			</div>
		<?php } ?>



<script src="js/jquery.backstretch.min.js"></script>
<script> $.backstretch("/img/contact-image.jpg"); </script>


<div>