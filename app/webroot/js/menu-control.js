var menuControl=(function(){
	var next_click_should_shrink = false;
	var close_x = null;
	var box = null;
	var h1 = null;
	return {
		init:function(options){
			// $('.menued').on('mouseover', menuControl.handler);
			// $('.menued').on('mouseout', menuControl.out_handler);
		},
		handler:function(e){
			var the_a = $(e.target);
			var width = $(e.target).width()+20;
			var bar = $(e.target).parent().find('.green-baro');
			the_a.css('color','#8cc63e');
			bar.css('width',width);
			bar.css('bottom',-10);
			bar.css('display',"block");
			bar.css('opacity',0);
			bar.animate({
				bottom: 0,
				opacity: 1
			}, 300)
		},
		out_handler:function(e){
			var the_a = $(e.target);
			var bar = $(e.target).parent().find('.green-baro');
			the_a.css('color','#45545f');
			bar.css('display', 'none');
		}


	}
}());
menuControl.init();
