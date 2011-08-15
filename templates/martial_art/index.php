<?php
/**
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters. All rights reserved.
 * @license    GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/<?php echo $this->template ;?>/css/general.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ;?>/css/layout.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ;?>/css/style.css" type="text/css" />
</head>
<body>
 <div class="wrapper">
  <div class="top">
   <div class="logo"> <a href="index.php"><img src="templates/<?php echo $this->template ;?>/images/logo.png"  height="224" border="0"  /></a>
   </div> 
    <div class="menu">
      <jdoc:include type="modules" name="top" />
    </div> 
  </div> 
  <div class="mid">
     <div class="left-area">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="latestnews" style="latestnews"/>
       </div> 
     <div class="right-area">
       <jdoc:include type="modules" name="right" style="right" />
    </div>  
   </div>  
   <div class="ftr">
     <div class="ftr-lft">
     <jdoc:include type="modules" name="footer" />
      <p>&copy; Copyrights Sunrise Taekwondo. All Rights Reserved. Powered by Joomla!</p>
     </div> 
     <div class="ftr-rgt"> <a href="http://www.facebook.com/pages/Sunrise-Taekwondo/105570846145961"><img src="templates/<?php echo $this->template ;?>/images/fb.png" width="50" height="50" border="0" /></a>
     </div> 
   </div> 
 </div> 
</body>
</html>