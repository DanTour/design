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
	
		
		
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="#">
			Project Name
		</a>
	  </div>

	  <div class="collapse navbar-collapse navbar-right margin-right">
		<jdoc:include type="modules" name="top_menu" />
	  </div>
	</nav>
		<div id="myCarousel" class="carousel slide margin" data-ride="carousel">
	<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			</ol>
			<jdoc:include type="modules" name="carousel" />
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- /.carousel -->	
			<div class="aft-carousel">
				<div class="container">
					<div class="row">
							<h2>Get matched to top travel specialists</h2>
							<div class="col-sm-4 col-xs-12 text-center ">
								<div class="image">
										<img src="images/workers.png" alt="">
								</div>
								<p>
									<span>Connect</span> 
									with the most knowledgeable travel specialists for your vacation.
								</p>
							</div>
							<div class="col-sm-4 col-xs-12 text-center">
								
									<div class="image">
										<img src="images/chat.png" alt="">
									</div>
								<p>
									<span>Connect</span> 
									Go beyond your
									imagination with unique
									experiences recommended
									by experts.
								</p>
							</div>
							<div class="col-sm-4 col-xs-12 text-center">
								<div class="image">
										<img src="images/earth.png" alt="">
								</div>
								<p>
									<span>Connect</span> 
										Experience the wonder
										of an exceptional itinerary
										crafted just for you.
								</p>
							</div>
					</div>
			</div>
			</div>
			<div class="news-slider">
				<div class="container">
					
				</div>
			</div>
			<div class="after-news-slider">
				<div class="container">
					<div class="col-md-4 hidden-sm hidden-xs"></div>
					<div class="col-md-8 col-sm-12 text-right">
						<h2 class="text-right">Extraordinary<br>
							experiences, designed just for you</h2>
							<a href="#" class="btn btn-primary btn-lg text-center">get matched to travel specialists</a>
					</div>
				</div>
			</div>
		<div class="list-reasons">
			<div class="container">
				<h2>Why Zicasso?</h2>
				
				<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-8 text-center">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quae aspernatur laborum iusto cupiditate ea a perspiciatis est sit rem repellendus ex animi itaque soluta excepturi veniam dolor ullam nobis odit impedit neque corporis quos aliquid dolorum atque dolorem omnis nam quasi quidem provident praesentium aut quam voluptatibus. Minus, doloribus, voluptatem itaque perferendis placeat ex dolores ut culpa officia doloremque tempore autem atque qui aliquid porro in accusantium quod numquam aliquam maxime et ea sunt velit. Rem, soluta, sit, porro totam cumque reprehenderit voluptates doloribus error qui repudiandae ratione sapiente culpa aliquam tenetur nulla quaerat laudantium ipsam ullam quibusdam praesentium?
						</p>
					<div class="com-md-2"></div>
					</div>
				</div>
				<div class="row list-i">
					<div class="col-md-4 hidden-xs">
						<img src="images/picture.png" alt="picture">
					</div>
					<div class="col-md-8">
					<ul>
						<li><span>Personalized matching</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, ratione doloribus officia consequuntur eos quae.</li>
						<li><span>Rigorous assessments</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corrupti cum tempore asperiores ducimus. Sit.</li>
						<li><span>Unmatched destination expertise</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, cum ea molestias quo aut commodi.</li>
						<li><span>24/7 support from our partners</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, expedita harum veniam reprehenderit doloremque nemo!</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
			<div class="quotes">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2>The people who know best</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, numquam, dolorum, alias similique eos non iusto veritatis sit soluta ad tempora est illum magnam voluptas suscipit officia ab quae explicabo provident ea error ipsum reiciendis modi necessitatibus quibusdam nemo ex! Consectetur, aut eius accusamus ad impedit adipisci deserunt omnis repellendus.</p>
						</div>
					</div>
					<div class="row p_quotes text-center">
						<div class="col-md-4 col-xs-12 ">
							<img src="images/portret.png" alt="" class="img-circle">
							<blockquote>
									<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> Labore, nobis, placeat, illo in nihil quis suscipit laboriosam accusamus itaque perspiciatis quae facilis nam minus ad tenetur aliquam ipsum quibusdam provident impedit cumque. Doloribus, illum, error, enim eaque nostrum fugiat in aliquam ratione molestias voluptatem sit facilis delectus perspiciatis nemo aperiam voluptate corporis libero debitis iure non minus unde ex sequi?</p>
									<span class="user_sign">Vivan V.</span>
						</blockquote>
						</div>
						<div class="col-md-4 col-xs-12">
							<img src="images/portret.png" alt="" class="img-circle">
							<blockquote>
									<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> Labore, nobis, placeat, illo in nihil quis suscipit laboriosam accusamus itaque perspiciatis quae facilis nam minus ad tenetur aliquam ipsum quibusdam provident impedit cumque. Doloribus, illum, error, enim eaque nostrum fugiat in aliquam ratione molestias voluptatem sit facilis delectus perspiciatis nemo aperiam voluptate corporis libero debitis iure non minus unde ex sequi?</p>
									<span class="user_sign">Vivan V.</span>
						</blockquote>
						</div>
						<div class="col-md-4 col-xs-12">
							<img src="images/portret.png" alt="" class="img-circle">
							<blockquote>
									<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> Labore, nobis, placeat, illo in nihil quis suscipit laboriosam accusamus itaque perspiciatis quae facilis nam minus ad tenetur aliquam ipsum quibusdam provident impedit cumque. Doloribus, illum, error, enim eaque nostrum fugiat in aliquam ratione molestias voluptatem sit facilis delectus perspiciatis nemo aperiam voluptate corporis libero debitis iure non minus unde ex sequi?</p>
									<span class="user_sign">Vivan V.</span>
						</blockquote>
						</div>
					</div>
				</div>
			</div>
		<div class="special">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 ">
						<h2>Luxury Tours, Vacations & African Safaris</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-xs-4">
						<span>African Safari Tours:</span>
						<ul>
							<li><a href="#">African Safari</a></li>
							<li><a href="#">South Africa Safari </a></li>
							<li><a href="#">Tanzania Safari</a></li>
							<li><a href="#">Kenya Safari</a></li>
							<li><a href="#">Botswana Safari</a></li>
							<li><a href="#">Zambia Safari</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-4">
						<span>Theme:</span>
						<ul>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-4">
						<span>Theme:</span>
						<ul>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-4">
						<span>Theme:</span>
						<ul>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-4">
						<span>Theme:</span>
						<ul>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-4">
						<span>Theme:</span>
						<ul>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
							<li><a href="#">AFFFrica</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<a href="#" class="is_top">Are you a Top Travel Specialist? Click here to contact us.</a>
					<div class="row">
						<div class="col-md-2 col-xs-4">
							<span>Theme:</span>
							<ul>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-xs-4">
							<span>Theme:</span>
							<ul>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
								<li><a href="#">AFFFrica</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-md-offset-2">
							<h5>Zicasso is Featured in:</h5>
							<img src="images/brands_f.png" alt="">
						</div>
					</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
							<div class="col-md-4">
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, sunt, atque voluptates quasi totam in soluta nobis facilis tempora similique autem nihil quod eveniet! Magni, enim, molestiae quibusdam ex officia cumque ab incidunt dolorum explicabo eos quaerat rerum quo aliquid unde vero. Ducimus, modi quasi nemo ut deleniti et eveniet? Saepe, adipisci,</small></p>
							</div>
							<div class="col-md-6 col-md-offset-2">
								<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, qui, neque, aperiam ea fugiat praesentium mollitia nulla veniam accusamus voluptatem incidunt consequatur tempora assumenda ullam debitis nobis blanditiis. Harum, eos, ea, porro in illo quas vitae dolorum obcaecati eveniet itaque deleniti dolor quam odit asperiores ipsam aut iure similique hic nesciunt quibusdam esse ab nulla atque dolores laudantium corporis minus.</small></p>
							</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
