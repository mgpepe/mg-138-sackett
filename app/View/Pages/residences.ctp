
<div class="container ">
    <div id="tl-0" class="sackett-caption pull-right " style="display:block">
        Corner of Henry Street &amp; Sackett Street.
    </div>
    <div id="tl-1" class="sackett-caption pull-right " style="display:none">
        Corner of Henry Street &amp; Union Street.
    </div>
    <div id="tl-2" class="sackett-caption pull-right " style="display:none">
        Farmacy and Soda Fountain. Corner of Henry Street &amp; Sackett Street.
    </div>
    <div id="tl-3" class="sackett-caption pull-right " style="display:none">
        Corner of Sackett Street &amp; Columbia Street.
    </div>
    <div id="tl-4" class="sackett-caption pull-right " style="display:none">
       Corner of Hicks Street &amp; Union Street.
    </div>
    <div id="tl-5" class="sackett-caption pull-right " style="display:none">
        Corner of Tiffany Street &amp; Degraw Street.
    </div>
    <div id="tl-6" class="sackett-caption pull-right " style="display:none">
        Corner of Sackett Street &amp; Columbia Street.
    </div>
    <div id="tl-7" class="sackett-caption pull-right " style="display:none">
        Brooklyn Bridge Park.
    </div>
    <div id="tl-8" class="sackett-caption pull-right " style="display:none">
        Brooklyn Bridge Park.
    </div>
    <div id="tl-9" class="sackett-caption pull-right " style="display:none">
        Queen Mary at Brooklyn Cruise Terminal.
    </div>
    <div id="tl-10" class="sackett-caption pull-right " style="display:none">
        Brooklyn Piers.
    </div>
    <div id="tl-11" class="sackett-caption pull-right " style="display:none">
        City view from the Degraw Street.
    </div>

</div>
<div class="container navbar-fixed-bottom" style="bottom:-200px;">
	
	<div class="sackett-white-sheet clearfix ">
		<h1>COLUMBIA WATERFRONT DISTRICT</h1>
        <p id="t-0" class="manageable-t" >
            Live at the strikingly beautiful 138 Sackett and your home will be set amidst the rugged beauty of the Columbia Waterfront District. 
        </p>
        <p id="t-1" class="manageable-t" style="display:none">
            The building’s bold industrial design and fluid modern sensibility allow for efficient floor plans that maximize space and accentuate clean lines. Windows are expansive and of superior quality, designed to emphasize the interiors. All units are flooded with light, many also have breathtaking views of the Manhattan skyline. 
        </p>
        <p id="t-2" class="manageable-t" style="display:none">
            Kitchens impress with a truly smart blend of Bosch state-of-the art stainless steel appliances and Quartz counter tops beautifully framed by glass tile accents. The cutting-edge stovetop, a magnetic induction range, has sleek control panels to allow for a total of 17 different temperature settings. 
        </p>
        <p id="t-3" class="manageable-t" style="display:none">
            Baths are spa-like in nature with attractive Grohe fixtures, high-performance porcelain stoneware flooring, and stunning off white textured ceramic tiles. The clean design of the Kohler ‘soak-in’ tubs are truly impressive – made with a sloped back-rest for added support. Enjoy the lovely serene common garden on the ground floor and dramatic rooftop deck open to all residents. In addition, private roof terraces are available for purchase.  
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
<?php echo $this->Html->script('title-control'); ?>
<script src="js/jquery.backstretch.js"></script>
<script>



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
        $.event.trigger({
            type: "image_swapped",
            detail: { image_index: index }
        });
	});
    var image_para = {
        0:0,
        1:1,
        2:2,
        3:2,
        4:2,
        5:3,
        6:3,
        7:3,
        8:3,
        9:3,
        10:4,
        11:4
    };
    var title_para = {
        0:0,
        1:1,
        2:2,
        3:3,
        4:4,
        5:5,
        6:6,
        7:7,
        8:8,
        9:9,
        10:10,
        11:11
    };
    boxControl.init({start_up:false});
    $(document).on('ready',function(){
        textControl.init(image_para);
        titleControl.init(title_para);
        boxControl.expand();
    });
</script>