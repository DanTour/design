<?php
defined('_JEXEC') or die;
?>
<ul class="nav navbar-nav <?php echo $class_sfx;?>"<?php
	$tag = '';
	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php
foreach ($list as $i => &$item) :
	if ($item->id == $active_id)
	{
		$class .= ' current';
	}
	if (in_array($item->id, $path))
	{
		$class .= ' active';
	}
	if ($item->deeper) {
		if ($item->level < 2) {
			$class .= ' dropdown';
		} else {
			$class .= ' dropdown-submenu';
		}
	}
	if (!empty($class))
	{
		$class = ' class="'.trim($class) .'"';
	}
	echo '<li'.$class.'>';
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
		case 'heading':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
			break;
		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;
	if ($item->deeper){
		echo '<ul class="dropdown-menu">';
	}
	elseif ($item->deeper) {
		echo '<ul>';
	}
	elseif ($item->shallower) {
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	else {
		echo '</li>';
	}
endforeach;
?></ul>