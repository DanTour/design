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
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
?>

<hr class="category">
<div class="category-item">
	<div class="row col-md-12 no-gutter">
		<div class="col-xs-12 col-sm-4 pad-top-1">
			<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image"> <img
			<?php if ($images->image_fulltext_caption):
				echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_fulltext_caption) . '"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>" itemprop="image"/> </div>
		</div>
		<div class="col-md-8 col-xs-12 pad-top-1">
		<a href="<?php echo $link; ?>"><?php echo $this->item->title; ?></a>
			<p><?php echo $this->item->introtext?></p>
		</div>
		<div class="col-md-8 hidden-sm hidden-md hidden-lg pad-top-1">
		<?php 
			$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
			echo JLayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link));
		?>
		</div>
		<div class="col-md-8 align-btm hidden-xs pad-top-1">
		<?php 
			$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
			echo JLayoutHelper::render('joomla.content.readmore', array('item' => $this->item, 'params' => $params, 'link' => $link));
		?>
		</div>
	</div>
</div>
