
<div class="container ">
	<div class="sackett-caption pull-right ">View from roof top terrace at 138 Sackett.</div>
</div>
<div class="container navbar-fixed-bottom">
	
	<div class="sackett-white-sheet clearfix ">
		<h1>COLUMBIA WATERFRONT DISTRICT</h1>
		<p>
			blahblahblah
		</p>
	</div>
</div>

<div id="flechaIzq">
    <a href="#" onClick="$.backstretch('prev'); return false;">
        <img src="img/arrow_left.png" >
    </a>    
</div>
<div id="flechaDer">
    <a href="#" onClick="$.backstretch('next'); return false;">
        <img src="img/arrow_right.png" >
    </a>    
</div>



<?php echo $this->Html->script('box-control'); ?>
<?php echo $this->Html->script('text-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
	boxControl.init({start_up:true});
	textControl.init();

$.backstretch([
    "/img/images/1.jpg",
    "/img/images/2.jpg",
    "/img/images/3.jpg",
    "/img/images/4.jpg",
    "/img/images/5.jpg",
    "/img/images/6.jpg",
    "/img/images/7.jpg",
    "/img/images/8.jpg",
    "/img/images/9.jpg",   
    "/img/images/10.jpg",   
    "/img/images/11.jpg", 
    "/img/images/12.jpg"   
  ], {duration: 5000, fade:500});

	var instance = $('body').data('backstretch');
	$(window).on("backstretch.before", function (e, instance, index) {
		var evt = new CustomEvent('image_swapped', { 
			detail: { image_index: index }
		});
		document.dispatchEvent(evt);
	});
</script>