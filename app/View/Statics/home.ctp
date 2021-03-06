<div class="container ">
	<div class="sackett-caption pull-right ">View from roof top terrace at 138 Sackett.</div>
	<div id="open-houses" style="height: 75px; background: #80BD01; color: #FFF; font-size:28px; text-align: left;font-family: 'Futura_book';width: 395px;padding: 18px 20px ;">
		Private Showing
	</div>
	<div style="height: 160px; width: 395px;		text-align: right;
		position: absolute;
		top: 40%;
		right:0;">
		<div style="background: #cecece;margin-top: 77px; padding: 10px 20px ;font-size:28px; text-align: left;font-family: 'Futura_book';">
			<?php echo nl2br($oh['Openhouse']['when']); ?>
		</div>
		
	</div>
</div>
<div class="container navbar-fixed-bottom-sackett" style="bottom: -200px;">
	
	<div class="sackett-white-sheet clearfix ">
		<h1 style="font-size: 18px; font-weight: bold;">Where the Water Meets the Park<span class="close-x">CLOSE X</span></h1>
		<p>
			Introducing 138 Sackett, Brooklyn’s newest and most strikingly attractive property in the Columbia Waterfront District. This is a structure boldly designed, reminiscent of the industrial age, but infused with a modern sensibility. Bold floor to ceiling windows create inviting interior spaces flooded with light. Efficient floor plans maximize space and accentuate clean lines. A serene common garden on the building’s ground floor adds a bit of charm and greenery, while magnificent views of the Manhattan skyline complete the picture.
		</p>
	</div>
</div>
<?php echo $this->Html->script('box-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
boxControl.init({start_up:false});
	$(document).on('ready', function(){
		boxControl.expand();
	});
	 // $('#contentx').backstretch("/img/home-image.jpg");
	 $.backstretch("/img/home-image.jpg");
</script>

