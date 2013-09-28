var boxControl=(function(){
	var next_click_should_shrink = false;
	var close_x = null;
	var box = null;
	var h1 = null;
	return {
		init:function(options){
			$(document).on('ready', function(){
				$('.sackett-white-sheet').find('h1').on('click', boxControl.toggle);
			})
			if(typeof(options)!== 'undefined'){
				if(typeof(options.start_up)!== 'undefined'){
					next_click_should_shrink = options.start_up;
				}
			}
			h1 = $('.sackett-white-sheet').find('h1');
			box = $('.sackett-white-sheet').parent();
			close_x = $('.close-x');
		},
		toggle:function(){
			if(next_click_should_shrink){
				boxControl.shrink();
			}else{
				boxControl.expand();
			}
		},
		expand:function(){
			next_click_should_shrink = true;
			h1.animate({'font-size': '50px'});
			box.animate({'bottom':0});
			close_x.show('fast');
			textControl.update_futures();
		},
		shrink:function(){
			next_click_should_shrink = false;
			var box_height = box.height();
			var bot =  -box.height()+45;
			h1.animate({'font-size': '18px'});
			box.animate({'bottom':bot}, {step:function(now, fx){
					fx.end = -box.height()+45;
				} 
			});
			close_x.hide('fast');

		},
		is_open:function(){
			return next_click_should_shrink;
		},

	}
}());
