<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';

?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />
	<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->
	
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->


    <!--
        Your HTML code starts here!
    -->

    <?php if ($tpl->isMobile()) : ?>
        <!-- only for mobiles  -->
    <? endif; ?>

    <?php if ($tpl->isTablet()) : ?>
        <!-- only for tablets  -->
    <? endif; ?>

    
    
    <?php if ($tpl->isDebug()) : ?>
        <jdoc:include type="modules" name="debug" />
    <?php endif; ?>
	
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Carousel starts -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="first-slide" src="./images/temp/1.jpg" alt="First slide">
			<div class="container">
				<div class="carousel-caption">
					<h1>Example headline.</h1>
					<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img class="second-slide" src="./images/temp/2.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>Another example headline.</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div><!-- /.carousel -->
	<div class="container">
		<div class="row">
			<div class="mid-content">
				<div class="col-md-4 col-sm-6 col-xs-12">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, inventore, aliquam at esse accusantium eos unde ipsa omnis ut quod. Obcaecati accusantium ut delectus? Autem, accusamus, quos, architecto quis voluptatibus commodi repudiandae id quae laudantium odit recusandae aspernatur! Quas, repellat dicta repellendus tempore pariatur quisquam dolore vel. Iste, laboriosam, nisi, voluptas minima saepe eos nam molestiae possimus porro eligendi fugit doloribus maxime rem sint impedit numquam molestias magni nemo praesentium architecto labore unde facere vel repellendus consectetur quaerat incidunt dolore corrupti doloremque amet consequatur laborum ducimus distinctio repellat sed veniam ex assumenda a dolorum delectus. Fuga vel itaque vero a.
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, necessitatibus, possimus excepturi aspernatur consectetur tempore in modi qui iste eum. Maiores, illo, esse expedita voluptatibus nemo fuga fugiat minima facilis corrupti tenetur similique eligendi rerum quod dolor qui cum at praesentium soluta quos mollitia quidem. Distinctio, rem blanditiis quos magnam aspernatur modi nobis enim explicabo quam reiciendis omnis ad qui incidunt velit assumenda accusantium molestias. Eaque consequuntur incidunt repellendus magnam dolores eum delectus! Sint blanditiis beatae quis a. Corporis, illum, voluptas provident laudantium repellendus nisi saepe pariatur distinctio sequi aspernatur eius officia unde dicta eveniet sapiente illo temporibus molestias delectus!</div>
					<div class="col-md-4 col-sm-6 hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quia, ab, mollitia molestias dignissimos optio quae error nemo similique distinctio a nihil asperiores nisi quam vero deserunt quidem iste ullam sunt quo sapiente praesentium ipsam ad perferendis laborum qui maiores expedita possimus delectus quis iure quos cupiditate voluptas fugiat at id alias esse libero doloremque magni earum magnam sit commodi provident voluptatibus iusto! Sint atque ullam nam accusamus? Cupiditate, et, culpa, magni laudantium voluptatibus pariatur amet illo delectus quibusdam cum assumenda sint voluptates tenetur odio hic rerum repellendus totam deleniti minima in libero temporibus perferendis ipsum commodi quo omnis porro.</div>
				</div>
			</div>
	</div>

</body>
</html>
