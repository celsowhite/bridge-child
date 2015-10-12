var $j = jQuery.noConflict();

$j(document).ready(function() {

	// Call these functions when the html has loaded.

	"use strict"; // Ensure javascript is in strict mode and catches errors.

	/*================================= 
	SOCIAL SHARE
	=================================*/

	/*== Facebook Share ==*/

	$j('a.fb_share').click(function(e) {

		e.preventDefault();

		var loc = $j(this).attr('href');

		window.open('http://www.facebook.com/sharer.php?u=' + loc,'facebookwindow','height=450, width=550, top='+($j(window).height()/2 - 225) +', left='+$j(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');

	});

	/*== Twitter Share ==*/

	$j('a.twitter_share').click(function(e){

	    e.preventDefault();

	    var loc = $j(this).attr('href');

	    var title  = encodeURIComponent($j(this).attr('title'));

	    window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&via=charlieconard', 'twitterwindow', 'height=450, width=550, top='+($j(window).height()/2 - 225) +', left='+$j(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');

	});

	/*=== LinkedIn Share ===*/

	$j('a.linkedin_share').click(function(e){

		e.preventDefault();

		var loc = $j(this).attr('href');

		var title = encodeURIComponent($j(this).attr('title'));

		var excerpt  = encodeURIComponent($j(this).attr('excerpt'));

		window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + loc + '&title=' + title + '&summary=' + excerpt);

	});

	/*================================= 
	RESPONSIVE VIDEOS
	=================================*/

	/*=== Wrap All Iframes with 'video_embed' for responsive videos ===*/

	$j('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='video_embed'/>");

	/*=== fitVids.js ===*/

	$j(".video_embed").fitVids();

});

$j(window).load(function() {

	// Call these functions when the complete page (html and images) has loaded.

	"use strict"; // Ensure javascript is in strict mode and catches errors.

	// Example Flexslider Setup

    $j('.story_slider').flexslider({
    	animation: "fade",
    	controlNav: false
    });
  
});
