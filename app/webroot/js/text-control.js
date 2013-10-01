var textControl=(function(){
	var current_text = null;
	var update_in_future_to = null;
	return {
		init:function(){
			$(document).on("image_swapped", function(e){
				textControl.swap(e.detail.image_index);
			});
			// document.addEventListener('image_swapped', function(e){
			// 	textControl.swap(e.detail.image_index);
			// })
		},
		swap:function(index){
			switch (index){
				case 0:
				textControl.swtich_to(0);
				break;

				case 1:
				textControl.swtich_to(1);
				break;

				case 2:
				case 3:
				case 4:
				textControl.swtich_to(2);
				break;

				case 5:
				case 6:
				case 7:
				case 8:
				case 9:
				textControl.swtich_to(3);
				break;
				
				case 10:
				case 11:
				textControl.swtich_to(4);
				break;
			
				default:
				textControl.swtich_to(0);
			}
		},
		swtich_to:function(i){
			if(current_text != i){
				if(boxControl.is_open()){
					textControl.hide_all(i);
					$('#t-'+i).show('slow');
					current_text = i;
				}else{
					update_in_future_to = i;
				}
			}
		},
		hide_all:function(index){
			$('.manageable-t').each(function(){
				var t_number =   $(this).attr('id').slice(2) ;
				if(t_number!=index){
					$(this).hide('fast');
				}
			})
				
		},
		update_futures:function(){
			if(update_in_future_to){
				textControl.hide_all(update_in_future_to);
				$('#t-'+update_in_future_to).show('slow');
				current_text = update_in_future_to;
				update_in_future_to = null;
			}
			
		}
		
	}
}());
