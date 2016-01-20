


<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);

$images = json_decode($this->item->images);
?>

<div class="category-item">
		<div class="row">
		<img class="image_intro col-md-4" src="<?php echo $images->image_intro; ?>" alt="<?php $this->item->image_intro_alt; ?>">
			<div class="wrap-content col-md-8 col-xs-12">
			<h4><?php echo $this->item->title; ?></h4>
				<p><?php echo $this->item->introtext?></p>
					<div class="readmore-block">
					<?php 
							$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
							echo JLayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link));
						?>
					</div>
			</div>
		</div>
</div>	
	

