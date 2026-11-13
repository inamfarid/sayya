<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  <base href="http://sayya.org.pk/index.php" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="sf,sf rajanpur, sayya foundation, rajanpur ngo, ngo in rajanpur, sayya kotla naseer, sayya foundation rajanpur,promoting education, promoting health, ngo, civil society organization, development organization, make donations, human rights, sayya.org.pk." />
  <meta name="title" content="Coming Soon! 3" />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Sayya Foundation was established in 1991 registered in 2006 under the societies  act, XXI of 1860. Working in southern Punjab  on different social issues Education , Livelihood,  agriculture development and promotes the social and economic rights of women, women skills enhancement programs for the socio economic uplift of the marginalized segments of the society especially ." />
  <title>Coming Soon! 3</title>
  <link href="/templates/sayya/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <script type="text/javascript" src="/media/system/js/mootools.js"></script>
  <script type="text/javascript" src="/media/system/js/caption.js"></script>
  <!--[if lte IE 6]><script src="/plugins/system/J2top/fixed.js" type="text/javascript"></script><![endif]-->
  <script type="text/javascript">if( MooTools.version >= '1.2' ) { 
	window.addEvent('domready',function() {
	new SmoothScroll({ duration: 250 }, window); 
	var gototop = $('gototop');
	gototop.setStyle('opacity','0').setStyle('display','block');
	});
	window.addEvent('scroll',function(e) {
		var gototop = $('gototop');
		if(Browser.Engine.trident4) {
			gototop.setStyles({
				'position': 'absolute',
				'bottom': window.getPosition().y + 10,
				'width': 100
			});
		}
		gototop.fade((window.getScroll().y > 200) ? 'in' : 'out')
	});
} else {
	window.addEvent('domready',function() {
	$('gototop').setStyle('opacity','0');
	new SmoothScroll();
	var Change = new Fx.Style('gototop', 'opacity', {duration:250});
	var scroll = window.getScrollTop();
	if (scroll > 200){
		if ($('gototop').getStyle('opacity','0') == 0){Change.start(1);$('gototop').setStyle('display','');}
	}
	});
	window.addEvent('scroll',function(e) {
	var scroll = window.getScrollTop();
	var Change = new Fx.Style('gototop', 'opacity', {duration:250});
	function Show(){ $('gototop').setStyle('display','');}
	function Hide(){ setTimeout("$('gototop').setStyle('display','none')",250);}
	if (scroll > 200){
		if ($('gototop').getStyle('opacity','0') == 0){Show();Change.start(1);}
	} else {
		if ($('gototop').getStyle('opacity','1') == 1){Change.start(0);Hide();}
	}
	});
}
</script>
  <style type="text/css">
.preload {display:none;}
#gototop{

width: 95px;
height: 30px;

position: fixed;
 right: 3px;
bottom:3px;
z-index:1000000;
}
#gototop_link {
text-decoration:none;
border: 0 none;
outline-width:0;
}
#gototop_button{
cursor: pointer;

background-color: #669966;
color: #ffffff;
font-size: 14px;
height: 30px;
padding-top: 7px;
padding-right: 0px;
padding-bottom:0px;
padding-left: 7px;
text-align: center;
width: 95px;
display: block;
}
#gototop_button:hover,#gototop_button:focus,#gototop_button:active, a:hover #gototop_button{
color: #000000;

background-color: #FFCC66;
}
</style>

<link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />
<link href="/templates/sayya/css/layout.css" rel="stylesheet"  type="text/css" />
<link href="/templates/sayya/css/template.css" rel="stylesheet"  type="text/css" />
<link href="/templates/sayya/css/menu.css" rel="stylesheet"  type="text/css" />
<link href="/templates/sayya/css/module.css" rel="stylesheet"  type="text/css" />
<link href="/templates/sayya/css/left_main_right.css" rel="stylesheet"  type="text/css" />
<link href="/templates/sayya/css/bright.css" rel="stylesheet"  type="text/css" />

<!-- LOADING JQUERY FUNCTIONS -->
<link rel="stylesheet" type="text/css" href="/templates/sayya/superfish/css/superfish.css" media="screen" />
<link href="/templates/sayya/slimbox/css/slimbox2.css" rel="stylesheet"  type="text/css" />
<script type="text/javascript" src="/templates/sayya/superfish/js/jquery.js"></script>
<script type="text/javascript" src="/templates/sayya/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="/templates/sayya/superfish/js/supersubs.js"></script>
<script type="text/javascript" src="/templates/sayya/superfish/js/superfish.js"></script>
<script type="text/javascript" src="/templates/sayya/superfish/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="/templates/sayya/superfish/js/jquery-color-fade.js"></script>
<script src="/templates/sayya/js/tooltip.js" type="text/javascript"></script>
<script src="/templates/sayya/slimbox/js/slimbox2.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(function($){ 
	$("ul.sf-menu")
		.supersubs({minWidth:16, maxWidth:45, extraWidth:1})
		.superfish({
		 	delay:       100,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'fast',                          // faster animation speed 
            autoArrows:  true,                           // disable generation of arrow mark-up 
            dropShadows: true                            // disable drop shadows 

		}) 
	$(".tooltip").simpletooltip();

	});
</script>


<style type="text/css" media="screen">
   #left, #right  { width:200px; }
   .contentpagetitle, .contentheading{color:#777 !important;}
   .template_width{width:880px;}

</style>

<style type="text/css" media="screen">
   #jp_top_module_outer { display:none}
</style>

<style type="text/css" media="screen">
   .usertop { width:50%;float:left}
</style>

<style type="text/css" media="screen">
   .userbottom { width:33%;float:left}
</style>

<!--[if IE 7]>
<link href="/templates/sayya/css/ie7.css" rel="stylesheet"  type="text/css" />
<![endif]--> 

</head>
<body><a id="top"></a>
			<div class="preload">
			</div>
			<div id="gototop" style="display:none"><a id="gototop_link" href="http://sayya.org.pk/index.php?option=com_content&view=article&id=137#top" title="Top of page"><span id="gototop_button">Top of page</span></a></div>
<div id="jp_wrapper_outer">
<div id="header_outer">
	<div id="header_inner" class="template_width">
		<div id="top">		<div class="module_menu">
			<div>
				<div>
					<div>
											<ul class="menu"><li class="item103"><a href="/contact-us"><span>Contact Us</span></a></li><li class="item105"><a href="http://www.outlook.com/" target="_blank"><span>Staff Webmail</span></a></li><li class="item141"><a href="/staff-login"><span>Staff Login</span></a></li><li class="item142"><a href="/feedback"><span>Feedback</span></a></li></ul>					</div>
				</div>
			</div>
		</div>
	</div>		<div id="banner">		<div class="module">
			<div>
				<div>
					<div>
											<form action="index.php" method="post">
	<div class="search">
		<input name="searchword" id="mod_search_searchword" maxlength="20" alt="Go" class="inputbox" type="text" size="20" value="search..."  onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" /><input type="submit" value="Go" class="button" onclick="this.form.searchword.focus();"/>	</div>
	<input type="hidden" name="task"   value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="0" />
</form>					</div>
				</div>
			</div>
		</div>
	</div>		<div id="logo"><a href="/" class="tooltip" title="Sayya Foundation. Homepage!"><img src="/templates/sayya/images/bright_logo.png" alt="Sayya Foundation. Homepage!" border="0" /></a></div>
		<div class="jpclear"></div><!--AUTO HEIGH FIX FOR FIREFOX -->
<!--BEGINN SUCKERFISH -->
		<div id="suckerfish"><ul class="menu sf-menu"><li class="item1"><a href="http://sayya.org.pk/"><span>Home</span></a></li><li class="parent item106"><a href="#"><span>About Us</span></a><ul><li class="item107"><a href="/about-us/introduction"><span>Introduction</span></a></li><li class="item108"><a href="/about-us/our-vision"><span>Our Vision</span></a></li><li class="item109"><a href="/about-us/our-mission"><span>Our Mission</span></a></li><li class="item110"><a href="/about-us/objectives"><span>Objectives</span></a></li><li class="item111"><a href="/about-us/organogram"><span>Organogram</span></a></li><li class="item112"><a href="/about-us/board-of-directors"><span>Board of Directors</span></a></li></ul></li><li class="parent item113"><a href="#"><span>Programs</span></a><ul><li class="item114"><a href="/programs/disaster-risk-reduction"><span>Disaster Risk Reduction</span></a></li><li class="item115"><a href="/programs/child-disaster-risk-reduction"><span>Child Disaster Risk Reduction</span></a></li><li class="item116"><a href="/programs/wash"><span>Wash</span></a></li><li class="parent item117"><a href="#"><span>Livelihood</span></a><ul><li class="item118"><a href="/programs/livelihood/agriculture-development"><span>Agriculture Development</span></a></li><li class="item119"><a href="/programs/livelihood/livestock-development"><span>Livestock Development</span></a></li><li class="item120"><a href="/programs/livelihood/human-skill-development"><span>Human Skill Development</span></a></li></ul></li><li class="item121"><a href="/programs/income-generation-program"><span>Income Generation Program</span></a></li><li class="item122"><a href="/programs/youth-active-citizen-program"><span>Youth Active Citizen Program</span></a></li><li class="item123"><a href="/programs/education-program"><span>Education Program</span></a></li><li class="item124"><a href="/programs/health-program"><span>Health Program</span></a></li><li class="item125"><a href="#"><span>Capacity Building / Trainings</span></a></li><li class="item144"><a href="/programs/socialcohesion"><span>Social Cohesion</span></a></li></ul></li><li class="parent item126"><a href="#"><span>Publication</span></a><ul><li class="item127"><a href="#"><span>Annual Reports</span></a></li><li class="item128"><a href="#"><span>Case Steadies</span></a></li><li class="item129"><a href="#"><span>Reflection</span></a></li><li class="item130"><a href="/publication/brochures"><span>Brochures</span></a></li></ul></li><li class="item140"><a href="/picture-gallery"><span>Picture Gallery</span></a></li><li class="parent item131"><a href="#"><span>Opportunities</span></a><ul><li class="item132"><a href="/opportunities/information-jobs"><span>Information Jobs</span></a></li><li class="item133"><a href="/opportunities/online-application"><span>Online Application</span></a></li><li class="item134"><a href="#"><span>News Letter</span></a></li></ul></li><li class="item138"><a href="#"><span>Donate Us</span></a></li><li class="parent item139"><a href="/contact-us"><span>Contact Us</span></a><ul><li class="item143"><a href="/contact-us/filed-office"><span>Field Office</span></a></li></ul></li></ul></div><!--END SUCKERFISH -->

<!--BEGINN SLIDESHOW -->
		
</div>	<div class="jpclear"></div>
</div>	<div class="jpclear"></div>









<div id="content_outer">
	<div id="content_inner" class="template_width">


        		<div class="jpclear"></div>

        <div id="container" class="template_width">
        	                        <div id="right">
            			<div class="module">
			<div>
				<div>
					<div>
													<h3>SF Events</h3>
											
<script language="JavaScript1.2">
function vsra_scroll() {
	crs_obj.scrollTop = crs_obj.scrollTop + 1;
	crs_scrollPos++;
	if ((crs_scrollPos%crs_heightOfElm) == 0) {
		crs_numScrolls--;
		if (crs_numScrolls == 0) {
			crs_obj.scrollTop = '0';
			vsra_content();
		} else {
			if (crs_scrollOn == 'true') {
				vsra_content();
			}
		}
	} else {
		setTimeout("vsra_scroll();", 10);
	}
}
var crs_Num = 0;
function vsra_content() {
	var tmp_vsrp = '';

	w_vsrp = crs_Num - parseInt(crs_numberOfElm);
	if (w_vsrp < 0) {
		w_vsrp = 0;
	} else {
		w_vsrp = w_vsrp%crs_array.length;
	}
	
	// Show amount of vsrru
	var elementsTmp_vsrp = parseInt(crs_numberOfElm) + 1;
	for (i_vsrp = 0; i_vsrp < elementsTmp_vsrp; i_vsrp++) {
		
		tmp_vsrp += crs_array[w_vsrp%crs_array.length];
		w_vsrp++;
	}

	crs_obj.innerHTML 	= tmp_vsrp;
	
	crs_Num 			= w_vsrp;
	crs_numScrolls 	= crs_array.length;
	crs_obj.scrollTop 	= '0';
	// start scrolling
	setTimeout("vsra_scroll();", 2000);
}
</script>

	<div style="padding-top:8px;padding-bottom:8px;">
	  <div style="text-align:left;vertical-align:middle;text-decoration: none;overflow: hidden; position: relative; margin-left: 1px; height: 44px;" id="crs_Holder"><div class='crs_div' style='height:40px;padding:2px 0px 2px 0px;'><a href='index.php?option=com_content&view=article&id=136'>Celebration of International Literacy Day 2014</a></div><div class='crs_div' style='height:40px;padding:2px 0px 2px 0px;'><a href='index.php?option=com_content&view=article&id=135'>Coming Soon Community Event</a></div><div class='crs_div' style='height:40px;padding:2px 0px 2px 0px;'><a href='index.php?option=com_content&view=article&id=137'>Coming Soon! 3</a></div></div>
	</div>
	<script type="text/javascript">
	var crs_array	= new Array();
	var crs_obj	= '';
	var crs_scrollPos 	= '';
	var crs_numScrolls	= '';
	var crs_heightOfElm = '44'; // Height of each element (px)
	var crs_numberOfElm = '3';
	var crs_scrollOn 	= 'true';
	function vsra_createscroll() 
	{
		crs_array[0] = '<div class=\'crs_div\' style=\'height:40px;padding:2px 0px 2px 0px;\'><a href=\'index.php?option=com_content&view=article&id=136\'>Celebration of International Literacy Day 2014</a></div>'; crs_array[1] = '<div class=\'crs_div\' style=\'height:40px;padding:2px 0px 2px 0px;\'><a href=\'index.php?option=com_content&view=article&id=135\'>Coming Soon Community Event</a></div>'; crs_array[2] = '<div class=\'crs_div\' style=\'height:40px;padding:2px 0px 2px 0px;\'><a href=\'index.php?option=com_content&view=article&id=137\'>Coming Soon! 3</a></div>'; 		crs_obj	= document.getElementById('crs_Holder');
		crs_obj.style.height = (crs_numberOfElm * crs_heightOfElm) + 'px'; // Set height of DIV
		vsra_content();
	}
	</script>
	<script type="text/javascript">
	vsra_createscroll();
	</script>
					</div>
				</div>
			</div>
		</div>
			<div class="module new">
			<div>
				<div>
					<div>
													<h3>News Updates</h3>
											<ul>
<li>
<h3><span style="color: #800000;"><strong><a href="#">Press Released</a></strong></span></h3>
</li>
</ul>
<ul>
<li>
<h3><span style="color: #800000;"><strong><a href="#">Today News</a></strong></span></h3>
</li>
</ul>					</div>
				</div>
			</div>
		</div>
	
            	<div class="jpclr"></div>
            </div>
                        <div id="content">
            	<div id="content-inner">
					<div id="breadcrumbs"><span class="breadcrumbs pathway">
You are here:</span>
</div>                						<div class="jpclr"></div>
					
                    <table class="contentpaneopen">
<tr>
		<td class="contentheading" width="100%">
					Coming Soon! 3			</td>
						<td align="right" width="100%" class="buttonheading">
		<a href="/component/content/article/1-latest-news/137-coming-soon-3?format=pdf" title="PDF" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><img src="/templates/sayya/images/pdf_button.png" alt="PDF"  /></a>		</td>
		
				<td align="right" width="100%" class="buttonheading">
		<a href="/component/content/article/1-latest-news/137-coming-soon-3?tmpl=component&amp;print=1&amp;page=" title="Print" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow"><img src="/templates/sayya/images/printButton.png" alt="Print"  /></a>		</td>
		
				<td align="right" width="100%" class="buttonheading">
		<a href="/component/mailto/?tmpl=component&amp;link=6f407f9c44e0142fd6caadfb1cb54d2731deb5b9" title="E-mail" onclick="window.open(this.href,'win2','width=400,height=350,menubar=yes,resizable=yes'); return false;"><img src="/templates/sayya/images/emailButton.png" alt="E-mail"  /></a>		</td>
					</tr>
</table>

<table class="contentpaneopen">



<tr>
<td valign="top">
<p>Coming Soon.</p></td>
</tr>

</table>
<span class="article_separator">&nbsp;</span>

                	                	<div class="jpclr"></div>
                </div>
            </div>
        	<div class="jpclr"></div>
        </div>
        <div class="jpclr"></div>
<!--END JOOMLA CONTENT -->
</div>	<div class="jpclear"></div><!--AUTO HEIGH FIX FOR FIREFOX -->
</div>	<div class="jpclear"></div>










<div id="jp_bottom_outer">
	<div id="jp_bottom" class="template_width">

    <div class="userbottom">		<div class="module">
			<div>
				<div>
					<div>
													<h3>Articles Most Read</h3>
											<ul class="mostread">
	<li class="mostread">
		<a href="/component/content/article/1-latest-news/136-celebration-of-international-literacy-day-2014" class="mostread">
			Celebration of International Literacy Day 2014</a>
	</li>
	<li class="mostread">
		<a href="/component/content/article/1-latest-news/137-coming-soon-3" class="mostread">
			Coming Soon! 3</a>
	</li>
	<li class="mostread">
		<a href="/component/content/article/1-latest-news/135-coming-soon-1" class="mostread">
			Coming Soon Community Event</a>
	</li>
	<li class="mostread">
		<a href="/component/content/article/34-template/114-drr" class="mostread">
			DRR</a>
	</li>
	<li class="mostread">
		<a href="/component/content/article/34-template/115-income-generation-livelihood" class="mostread">
			Income Generation Livelihood</a>
	</li>
</ul>					</div>
				</div>
			</div>
		</div>
	</div>    <div class="userbottom">		<div class="module">
			<div>
				<div>
					<div>
													<h3>Website Statistics</h3>
											<strong>Members</strong> : 2<br />
<strong>Content</strong> : 31<br />
<strong>Web Links</strong> : 6<br />
<strong>Content View Hits</strong> : 87920<br />
					</div>
				</div>
			</div>
		</div>
	</div>	<div class="userbottom">		<div class="module hot">
			<div>
				<div>
					<div>
													<h3>Who's Online</h3>
											 We have&nbsp;6 guests&nbsp;online					</div>
				</div>
			</div>
		</div>
	</div>

<div class="jpclear"></div>

</div>
</div>

<div id="footer">		<div class="module">
			<div>
				<div>
					<div>
											<p style="text-align: center;"><img src="/images/stories/bottom_logos.png" alt="" /></p>					</div>
				</div>
			</div>
		</div>
			<div class="module">
			<div>
				<div>
					<div>
											<div>Copyright &#169; 2016 Sayya Foundation. All Rights Reserved.</div>
<div> Website Designed by:  <a href="mailto:javaid.pk@hotmail.com">JAVAID IQBAL</a></div>					</div>
				</div>
			</div>
		</div>
	</div>
<div class="jpclear"></div><!--AUTO HEIGH FIX FOR FIREFOX -->
</div><!--END JP WRAPPER OUTER -->


<!--BEGINN FOOTER -->
</body>
</html>