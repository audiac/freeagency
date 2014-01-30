$(document).ready(function() {  
        $('#carousel_ul li:first').before($('#carousel_ul li:last'));  
  
        $('#right_scroll').click(function(){  
		
			var left_indent = parseInt($('#carousel_ul').css('left')) - 900;
			
         	$('#carousel_ul').animate({'left' : left_indent},'slow', function() {
				
				$('#carousel_ul li:last').after($('#carousel_ul li:first'));
				
				$('#carousel_ul').css({'left' : '-900px'});	
			});
        });  
		
  
        $('#left_scroll').click(function(){  
		
			var left_indent = parseInt($('#carousel_ul').css('left')) + 900;
			
			$('#carousel_ul').animate({'left' : left_indent},'slow', function() {
				
				$('#carousel_ul li:first').before($('#carousel_ul li:last'));
				
				$('#carousel_ul').css({'left' : '-900px'});
			});
        });   
});  