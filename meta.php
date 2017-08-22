<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="icon" href="images/icon.png" sizes="32x32"> 
<link href="css/smac.css" type="text/css" rel="stylesheet" />
<link href="css/smac-add.css" type="text/css" rel="stylesheet" />
<link href="css/tree.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
<!--[if IE ]>
  <link href="css/fix-ie.css" rel="stylesheet" type="text/css">
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<!-- JQUERY UI -->
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/ui/ui.core.js"></script>
	<script type="text/javascript" src="js/ui/ui.progressbar.js"></script>
	<script type="text/javascript" src="js/ui/ui.resizable.js"></script>
	<style type="text/css">
		.ui-progressbar-value { background-image: url(images/bar.gif); }
	</style>
	<script type="text/javascript">
	$(function() {
		$("#progressbar").progressbar({
			value: 59
		});
	});
	</script>
<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
<!-- PNG FIX -->
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script> 
<script type="text/javascript" src="js/jquery.pngFix.js"></script> 
<!-- TAB -->
<script type="text/javascript">
$(document).ready(function() {
	$('div').pngFix( );
	//TAB...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
	//TAB...
	$(".tab_content2").hide(); //Hide all content
	$("ul.tabs2 li:first").addClass("active").show(); //Activate first tab
	$(".tab_content2:first").show(); //Show first tab content
	//On Click Event
	$("ul.tabs2 li").click(function() {
		$("ul.tabs2 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content2").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
	//TAB 3...
	$(".tab_content3").hide(); //Hide all content
	$("ul.tabs3 li:first").addClass("active").show(); //Activate first tab
	$(".tab_content3:first").show(); //Show first tab content
	//On Click Event
	$("ul.tabs3 li").focus(function() {
		$("ul.tabs3 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content3").hide(); //Hide all tab content

		var activeTab = $(this).find("input").attr("onfocus"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
	//topltip
	
    $(".tip_trigger").hover(function(){
        tip = $(this).find('.tip');
        tip.show(); //Show tooltip
    }, function() {
        tip.hide(); //Hide tooltip
    }).mousemove(function(e) {
        var mousex = e.pageX - 50; //Get X coodrinates
        var mousey = e.pageY + 20; //Get Y coordinates
        var tipWidth = tip.width(); //Find width of tooltip
        var tipHeight = tip.height(); //Find height of tooltip

        //Distance of element from the right edge of viewport
        var tipVisX = $(window).width() - (mousex + tipWidth);
        //Distance of element from the bottom of viewport
        var tipVisY = $(window).height() - (mousey + tipHeight);

        if ( tipVisX < 20 ) { //If tooltip exceeds the X coordinate of viewport
            mousex = e.pageX - tipWidth - 20;
        } if ( tipVisY < 20 ) { //If tooltip exceeds the Y coordinate of viewport
            mousey = e.pageY - tipHeight - 20;
        }
        //Absolute position the tooltip according to mouse position
        tip.css({  top: mousey, left: mousex });
    });
	
	// POP UP
	$('a.poplight[href^=#]').click(function() {
    var popID = $(this).attr('rel'); //Get Popup Name
    var popURL = $(this).attr('href'); //Get Popup href to define size

    //Pull Query & Variables from href URL
    var query= popURL.split('?');
    var dim= query[1].split('&');
    var popWidth = dim[0].split('=')[1]; //Gets the first query string value

    //Fade in the Popup and add close button
    $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="images/close.png" class="btn_close" title="Close Window" alt="Close" /></a>');

    //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
    var popMargTop = ($('#' + popID).height() + 80) / 2;
    var popMargLeft = ($('#' + popID).width() + 80) / 2;

    //Apply Margin to Popup
    $('#' + popID).css({
        'margin-top' : -popMargTop,
        'margin-left' : -popMargLeft
    });

    //Fade in Background
    $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies 

    return false;
});

//Close Popups and Fade Layer
$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
    $('#fade , .popup_block').fadeOut(function() {
        $('#fade, a.close').remove();  //fade them both out
    });
    return false;
});
// table zebra
	$("table.zebra tr:odd").addClass("ganjil");
	$("table.zebra tr:even").addClass("genap");
	$("table.zebra th").parent().addClass("tbheading");
	
	
});
</script>
<!-- TREE MENU -->
<script type="text/javascript" src="js/enhance.js"></script>		
<script type="text/javascript">
	// Run capabilities test
	enhance({
		loadScripts: [
			'js/jQuery.tree.js',
			'js/tree.js'
		]	
	});   
</script>
<title>SMAC - SOCIAL MEDIA ACTION CENTER</title>