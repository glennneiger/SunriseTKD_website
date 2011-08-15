<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<p class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php 
//print"<pre>";
//print_r($list);
foreach ($list as $item) :  
	$introtext=substr(strip_tags($item->introtext),0,100)."....";
	$created_date_str=$item->created;
	$cr_timestamp=strtotime($created_date_str);
	$new_date=date("jS M Y, l",$cr_timestamp);
	
?>
		<div class="news-box">	
			<p><?php echo $introtext; ?></p>
        		<a href="<?php echo $item->link; ?>">Read More</a>
		</div>
<?php endforeach; ?>
</p>



