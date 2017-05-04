(function($) { "use strict";



//Scrolling	
		
	$(document).ready(
	function() {  
		$("html").niceScroll();
		}
	);	


//fullscreen menu

		
			(function() {	
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();
				
				var el = document.querySelector( '.morph-button' );
				
				new UIMorphingButton( el, {
					closeEl : '.icon-close',
					onBeforeOpen : function() {
						// don't allow to scroll
						noScroll();
					},
					onAfterOpen : function() {
						// can scroll again
						canScroll();
						// add class "noscroll" to body
						classie.addClass( document.body, 'noscroll' );
						// add scroll class to main el
						classie.addClass( el, 'scroll' );
					},
					onBeforeClose : function() {
						// remove class "noscroll" to body
						classie.removeClass( document.body, 'noscroll' );
						// remove scroll class from main el
						classie.removeClass( el, 'scroll' );
						// don't allow to scroll
						noScroll();
					},
					onAfterClose : function() {
						// can scroll again
						canScroll();
					}
				} );
			})();		
		

		
		
		
		
 
 // Portfolio Ajax

 
        $(window).load(function() {
       	'use strict';		  
		  var loader = $('.expander-wrap');
		if(typeof loader.html() == 'undefined'){
			$('<div class="expander-wrap"><div id="expander-wrap" class="container clearfix relative"><p class="cls-btn"><a class="close">X</a></p><div/></div></div>').css({opacity:0}).hide().insertAfter('.portfolio');
			loader = $('.expander-wrap');
		}
		$('.expander').on('click', function(e){
			e.preventDefault();
			e.stopPropagation();
			var url = $(this).attr('href');



			loader.slideUp(function(){
				$.get(url, function(data){
					var portfolioContainer = $('.portfolio');
					var topPosition = portfolioContainer.offset().top;
					var bottomPosition = topPosition + portfolioContainer.height();
					$('html,body').delay(600).animate({ scrollTop: bottomPosition - -10}, 800);
					var container = $('#expander-wrap>div', loader);
					
					container.html(data);
					$(".video").fitVids();
					$('.project').flexslider({
				        animation: "fade",
						selector: ".project-slides .slide",
						controlNav: false,
						directionNav: true ,
						slideshowSpeed: 5000,  
				      });

				
					loader.slideDown(function(){
						if(typeof keepVideoRatio == 'function'){
							keepVideoRatio('.video > iframe');
						}
					}).delay(1000).animate({opacity:1}, 200);
				});
			});
		});
		
		$('.close', loader).on('click', function(){
			loader.delay(300).slideUp(function(){
				var container = $('#expander-wrap>div', loader);
				container.html('');
				$(this).css({opacity:0});
				
			});
			var portfolioContainer = $('.portfolio');
				var topPosition = portfolioContainer.offset().top;
				$('html,body').delay(0).animate({ scrollTop: topPosition - 70}, 500);
		});

});		
		
		
		
		
		
		
		
		
		
		
		

//Parallax effects 
	
$(document).ready(function(){
		$('.parallax-work').parallax("50%", 0.3);
});


//text rotating


            $(document).ready(function () {

                $('.flippy').flippy({
                    interval: 4,
                    speed: 500,
                    stop: false,
                    distance: "100px"
                });

            });	
			

 //Counter 
	
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 2000
        });
    });				
			
			
			
//Scroll on click
			
/*global $:false */
$(document).ready(function(){"use strict";
	$(".scroll").click(function(event){

		event.preventDefault();

		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;

		$('html, body').animate({scrollTop:target_top}, 1200);
	});
});
			
			
//Tooltip

$(document).ready(function() {
	$(".tipped").tipper();
});			
			

})(jQuery);