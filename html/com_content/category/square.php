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
							<div class="col-md-4 col-xs-12 no-gutter">
								<div class="info">
								<?php $images = json_decode($item->images);
									if (!empty( $images )&& $images->image_intro ) : ?>
										<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid)) ; ?>">
											<img src="<?php echo $images->image_intro ; ?>" alt="<?php if (!empty($images->image_intro_alt)) : echo $images->image_intro_alt; endif  ?>">
										</a>
										<?php if (!empty($item->title)) : ?>
											<p class="bot-title">
												<?php echo $item->title ; ?>
											</p>
											<div class="hov-summ hidden-sm">
												<h5><?php echo $item->title ; ?></h5>
													<?php if (!empty($item->introtext)) : ?>
														<p> <?php echo $item->introtext ; ?></p>
											</div>
											<?php if ($item->params->get('show_readmore')) : ?>
												<div class="button-block text-center">
													<a class="btn btn-md" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid)) ; ?>">Read more</a>
												</div>
											<?php endif ?>
													<?php endif ?>
											<?php endif ?>
								<?php endif ?>	
								</div>
							</div>
						<?php endforeach ?>
			<?php endif ?>
	
</div>
