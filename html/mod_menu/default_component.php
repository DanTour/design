<?php
defined('_JEXEC') or die;
$class = $item->anchor_css ? '"'.$item->anchor_css.'" ' : '';
$title = $item->anchor_title ? 'title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image) {
	$item->params->get('menu_text', 1) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><div class="image-title">'.$item->title.'</div> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
		if ($item->deeper) {
		$class = 'class="'.$item->anchor_css.' dropdown-toggle" data-toggle="dropdown"';
		$item->flink = '#';
	}
} elseif ($item->deeper && $item->level == 1) {
	$linktype = $item->title . '<b class="caret"></b>' ;
} else {
	$linktype = $item->title;
}
if ($item->parent && $item->level == 1) {
	$data = 'class="dropdown-toggle" tabindex="0" data-submenu="" data-toggle="dropdown"';
	$item->flink = '#';
} else {
	$data = '';
}
switch ($item->browserNav) {
	default:
	case 0:
?><a <?php echo $data; ?> <?php echo $class; ?>href="<?php echo $item->flink; ?>" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
		break;
	case 1:
?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
		break;
	case 2:
?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><span><?php echo $linktype; ?></span></a>
<?php
		break;
}