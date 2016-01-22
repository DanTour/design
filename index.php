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
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>		
			<a class="navbar-brand" href="#">Project Name</a>
		</div>
		<div class="collapse navbar-collapse navbar-right margin-right">
			<jdoc:include type="modules" name="top_menu" />
		</div>
	</div>
	</nav>
	
	<?php if (JRequest::getVar( 'view' ) != 'article') : ?>
			<jdoc:include type="modules" name="carousel" />
	<?php endif; ?>
	<jdoc:include type="modules" name="main_page_content" />
	<div class="container no-gutter">
		<jdoc:include type="modules" name="breadcrumbs" />
		<?php if (JRequest::getVar( 'view' ) != 'article') : ?>
			<div class="col-xs-12 col-md-9">
				<jdoc:include type="modules" name="category_top" />
			</div>
		<?php endif; ?>
		<div class="col-md-3 pull-right">
			<jdoc:include type="modules" name="right_column" />
		</div>
		<jdoc:include type="component" />
		<?php if (JRequest::getVar( 'view' ) != 'article') : ?>
			<div class="col-xs-12 col-md-12">
				<jdoc:include type="modules" name="category_faq" />
			</div>
		<?php endif; ?>
	</div>
	<jdoc:include type="modules" name="footer" />
	
</body>
</html>
