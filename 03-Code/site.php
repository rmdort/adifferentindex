<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Site template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <?php include('inc/styles.inc'); ?>

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php include('inc/scripts_head.inc'); ?>
</head>

<body>
<div id="outer">
  <div id="container">
    <?php include('inc/header.inc'); ?>
    <section class="grid">
    	<aside role="navigation">
    		<?php include('inc/navigations.inc'); ?>
    	</aside>
		<div id="main" role="main">
			<h1>gothere.sg</h1>
			<img src="http://www.csssingapore.com/images/sized/images/uploads/gothere-500x308.png" alt="screenshot of gothere.sg" />
			<h2>Data</h2>
			<table summary="This table shows data about this site">
				<caption>table caption</caption>
				<tbody>
					<tr>
						<th>Website</th>
						<td><a class="external" href="http://gothere.sg" title="">gothere.sg</a></td>
					</tr>
					<tr>
						<th>Founders</th>
						<td>Dominic Ee, Toh Kian Khai, Kuan Chih Yuan and Ang Jun Han.</td>
					</tr>
					<tr>
						<th>Creatives? Design?</th>
						<td>
							<ul>
								<li><a href="#" title="">Jussi Edlund</a> – Designer</li>
								<li>? – Designer - Redesign/align</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
			<h2>Background</h2>
			<p>Gothere.sg started in 2008 out of dissatisfaction with existing online wayfinding solutions for Singapore.</p>
			
<!--			<p>Filed under  // company Amsterdam Berlin<br />
			Posted by Nils Hendriks </p>-->
		</div>
		<aside role="complementary">
			<div id="hcard-gothere" class="vcard">
			 <div class="org">gothere.sg</div>
<!--			 <a class="email" href="mailto:info@edenspiekermann.com">edenspiekermann</a>-->
			 <div class="adr">
			  <div class="street-address">7 Prince George's Park</div>
			  <span class="locality">Singapore</span>
			, 
			  <span class="postal-code">118406</span>
			  <span class="country-name">Singapore</span>			
			 </div>
<!--			 <div class="tel">+31 20 550 6300</div>
			 <div class="fax">+31 20 550 6399</div>
-->
			<div class="tags"><a href="http://kitchen.technorati.com/contacts/tag/company">company</a> </div>
			</div>
		</aside>
    </section>
    <?php include('inc/footer.inc'); ?>
  </div> <!--! end of #container -->
</div>

  <!-- JavaScript at the bottom for fast page loading -->
<?php include('inc/scripts.inc'); ?>

</body>
</html>