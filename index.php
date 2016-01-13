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
	
	
        <jdoc:include type="modules" name="top_menu" />
		<jdoc:include type="modules" name="carousel" />
   	
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
