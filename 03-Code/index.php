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

  <title>Home</title>
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

<body id="home">
<div id="outer">
  <div id="container">
  	<?php include('inc/header.inc'); ?>
    <section class="grid">
    	<aside role="navigation">
	    	<?php include('inc/navigations.inc'); ?>
    	</aside>
		<div id="main" role="main">
			<article class="person">
				<a href="person.php" title="">
					<h1>nilshendriks.com</h1>
					<p>Front End Web Developer based in Singapore.</p>
				</a>
			</article>
			<article class="company">
				<a href="page.php" title="">
					<h1>Artminister</h1>
					<p>is a small design consultancy located in Singapore. It creates gorgeous, engaging and accessible web sites.
					</p>
				</a>
			</article>
			<article class="company">
				<a href="page.php" title="">
					<h1>Edenspiekermann</h1>
					<p>Edenspiekermann is an agency for strategy, design and communication with offices in Amsterdam, Berlin, Stuttgart. 
					</p>
				</a>
			</article>
			<article class="company">
				<a href="page.php" title="">
					<h1>Qais Consulting</h1>
					<p>Qais Consulting is a Singapore based interactive agency who produce groundbreaking work and fresh ideas for global brands.
					</p>
				</a>
			</article>
		</div>
		<aside role="complementary">
			<p>A Different Index tries to collect data about companies and people who build websites. Focused on Singapore and The Netherlands for now.</p>
			<a href="#" title="">About ADI</a>
			<h2>Contributors</h2>
			<ul>
				<li><a href="#" title="">Vinay M</a></li>
				<li><a href="person.html" title="">Nils Hendriks</a></li>
			</ul>
		</aside>
    </section>
    <?php include('inc/footer.inc'); ?>
  </div> <!--! end of #container -->
</div>

  <!-- JavaScript at the bottom for fast page loading -->
<?php include('inc/scripts.inc'); ?>

</body>
</html>