<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');

?>

<div class="container">
	<?php if (!empty($this->intro_items)) : ?>
				<?php foreach($this->intro_items as $item) : ?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info">
						<?php $images = json_decode($item->images);
						$link = JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid)) ;
							if (!empty( $images )&& $images->image_intro ) : ?>
									<a class="link-block " href="<?php echo $link ; ?>">
										<img class="responsive" src="<?php echo $images->image_intro ; ?>" alt="<?php if (!empty($images->image_intro_alt)) : echo $images->image_intro_alt; endif  ?>">
										<div class="hov-summ hidden-sm">
										<h5><?php echo $item->title ; ?></h5>
											<?php if (!empty($item->introtext)) : ?>
												<p> <?php echo $item->introtext ; ?></p>
									</div>
									</a>
								<?php if (!empty($item->title)) : ?>
									<p class="bot-title">
										<a href="<?php echo $link  ; ?>"><?php echo $item->title ; ?></a>
									</p>
									<?php if ($item->params->get('show_readmore')) : ?>
										<div class="button-block text-center">
											<a class="btn btn-md" href="<?php echo $link ; ?>">Read more</a>
										</div>
									<?php endif ?>
											<?php endif ?>
									<?php endif ?>
						<?php endif ?>	
						</div>
					</div>
				<?php endforeach ?>
	<?php endif ?>
	<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<?php echo $this->pagination->getPagesLinks(); ?> </div>
	<?php endif; ?>
</div>
