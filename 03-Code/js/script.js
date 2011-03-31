/* Author: NH + VM

*/

/* ::Enable Javascript-enabled stylesheet */
var head_css = $('<link rel="stylesheet" href="css/js-enabled.css" type="text/css" media="screen" />').appendTo($('head')[0]);

window.onload = load;

function load()
{
// alert("load event detected!");
 FnImageFix.init();
 FnGridSlider.init();
 FnSubGrid.init()
}

/* ::Grid Functions */
FnGridSlider = {
	init:function() {
	
	
	$('#container').css('background', 'rgba(255,255,255, 1)');
	
		$("#slider").slider({

			     slide: function(event, ui) {
			     	//alert(ui.value);
			     	var alphaVal = 1 - ((ui.value)/100);
			     	// set thumb img to ui/value
			     	$('#container').css('background', 'rgba(255,255,255, '+alphaVal+')');
			     	$('#secondairy-navigation span').text(ui.value + '%');
			      }
			    
			    });
			    
			      $('#slider').slider('value', 1);			    
			    
			  
	} // end init
} // end function



/* ::Grid Functions */
FnGrid = {
	init:function() {
		$('#secondairy-navigation .toggle').toggle(function() {
			// turn grid on
			$(this).attr('title', 'turn grid off');
			$(this).parent().find('span').text(' is on');
			$('#container').css('background', 'rgba(256,256,256,0)');
		}, function(){
			$(this).attr('title', 'turn grid on');
			$(this).parent().find('span').text(' is off');			
			$('#container').css('background', 'rgba(256,256,256,1)');
		});
	} // end init
} // end function

/* ::Image Functions */
FnImageFix = {
	init:function() {
	
	// only if there is a image
	var elemExists = $('img').length;
//	alert(elemExists);
	if (elemExists > 0) {
		
		var lineHeight = parseInt($('body').css('lineHeight'));
			var thisImage = $('img');
			var offset = thisImage.offset();
			var thisHeight = $('img').height();
			var thisImageBottom = offset.top + thisHeight;
			var numRows = Math.ceil(thisImageBottom / lineHeight);	
			var baseLine = numRows * lineHeight;
			var diff = baseLine - thisImageBottom;
		
				if ($('img').css('display') == 'block') {
					if (thisImageBottom == baseLine-1) {
						$('img').css('marginBottom', lineHeight+8);
					} else {
						$('img').css('marginBottom', diff+7);		
					}
				} else {
					if (thisImageBottom == baseLine-1) {
						$('img').css('marginBottom', lineHeight);
					} else {
						$('img').css('marginBottom', diff-1+lineHeight);
					}
				}
		
	} else {
		return false;
	}
	
	

	
	} // end init	
	
} // end function

/* ::Grid Functions */
FnSubGrid = {
	init:function() {
		// only if homepage
			var elemExists = $('#home').length;
			if (elemExists > 0) {
				
				// click event for column number
				$('.options-columns a').click(function(){
					//set classes
									
					// get href
					var numcol = $(this).attr('href');
					//alert(numcol);
					
					switch (numcol) {
						case '#1': 
							// remove classes
							$('#main').removeClass('subgrid');
							$('#main').removeClass('columns-2');
							$('#main').removeClass('columns-3');							

					        $('aside[role="complementary"]').fadeIn('fast');					        
					    break; //end
					    case '#2': 
					    	// set more classes
					    	$('#main').addClass('subgrid');
							$('#main').removeClass('columns-3');					    	
					    	$('#main').addClass('columns-2');
					        
					        $('aside[role="complementary"]').fadeIn('fast');
					        
					    break; //end
					    case '#3': 
					    	// set more classes
					    	
					    	//$('aside[role="complementary"]').addClass('hidden');
					    	$('aside[role="complementary"]').fadeOut('slow', function(){
					    		$('#main').addClass('subgrid');
					    		$('#main').removeClass('columns-2');					    	
					    		$('#main').addClass('columns-3');					        
					    	
					    	});
					    break; //end
					} // end switch   
					return false;
				}); // end click
								
			} else {
				return false;
			}
	} // end init
} // end function





















