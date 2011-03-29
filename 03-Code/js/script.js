/* Author: NH + VM

*/

window.onload = load;

function load()
{
// alert("load event detected!");
 FnImageFix.init();
 FnGrid.init();
}

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






















