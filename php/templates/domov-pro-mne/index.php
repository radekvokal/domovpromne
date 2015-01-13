<?php
/**
 * @subpackage  Domov pro mne v1.0 HM02J1.7
 * @copyright  Copyright (C) 2012 Domov pro mne - All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 **/

defined( '_JEXEC' ) or die( 'Restricted access' );
$RightMenuOn = ($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-7') or $this->countModules('position-6') or $this->countModules('position-8') or $this->countModules('position-3'));
$TopNavOn = ($this->countModules('position-13'));
$conf =& JFactory::getConfig();
$sitename = $conf->getValue('config.sitename');
$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo_domov_cerna.png';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');
$color = $this->params->get('templatecolor');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/<?php echo htmlspecialchars($color); ?>.css" type="text/css" />
  <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/sfhover.js"></script>
</head>
<body>

<div id="wrapper">

  <!-- TopNav + Search -->
  <?php if($TopNavOn ): ?>
 
  <div id="topnav_wrap">

    <div id="search">
        <jdoc:include type="modules" name="position-0" />
    </div>
  
  
    <div id="topnav">
      <jdoc:include type="modules" name="position-13" style="xhtml" />
    </div>
    

      
  </div>
  <?php endif; ?>
  

     <div id="header">

      <!-- Logo -->
      <div id="logo">

      <?php if ($logo && $logoimage == 1): ?>
        <a href="<?php echo $this->baseurl ?>"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>" /></a>
      <?php endif; ?>
      <?php if (!$logo || $logoimage == 0): ?>
	  <?php endif; ?>

        </div>
		
	  <div id="topmenu_wrap">
			<div id="topmenu">
             <jdoc:include type="modules" name="position-1" />
            </div>
      </div>
		
    </div>
	
  
  <!-- Top slider -->
  <div id="top_slider_wrap">
    <div id="top_slider">
      <jdoc:include type="modules" name="position-2" />
    </div>
  </div>  

  

  

  <!-- Content/Menu Wrap -->
  <div id="content-menu_wrap_bg">
    
	<!-- Top Image Boarder --> 
    <div id="topimageborder"></div>
	
  <div id="content-menu_wrap">


	
    <!-- Contents -->
    <?php if($RightMenuOn): ?>
    <div id="content-w2">
    <?php else: ?>
    <div id="content-w3">  
    <?php endif; ?>
    
      <?php if ($this->countModules('position-12')): ?>
      <div id="content-top">
        <jdoc:include type="modules" name="position-12" />
      </div>
      <?php endif; ?>
    
      <jdoc:include type="message" />
      <jdoc:include type="component" />
    </div>

	
    <!-- Right Menu -->
    <?php if($RightMenuOn ): ?>
    <div id="rightmenu">
      <jdoc:include type="modules" name="position-7" style="xhtml" />
      <jdoc:include type="modules" name="position-4" style="xhtml" />
      <jdoc:include type="modules" name="position-5" style="xhtml" />
      <jdoc:include type="modules" name="position-6" style="xhtml" />
      <jdoc:include type="modules" name="position-8" style="xhtml" />
      <jdoc:include type="modules" name="position-3" style="xhtml" />    
      
    </div>
    <?php endif; ?>
 


  </div>
    
	<!-- Bottom Image Boarder --> 
    <div id="bottomimageborder">

	</div> 

	</div>


  <!-- Footer -->
  <div id="footer_wrap">
    <div id="footer">
      <jdoc:include type="modules" name="position-14" />
    </div>
  </div>  

  
  <!-- Banner/Links -->
  <div id="box_wrap">
    <div id="box_placeholder">
      <div id="box1"><jdoc:include type="modules" name="position-9" style="xhtml" /></div>
      <div id="box2"><jdoc:include type="modules" name="position-10" style="xhtml" /></div>
      <div id="box3"><jdoc:include type="modules" name="position-11" style="xhtml" /></div>
    </div>
  </div>
  

  <div id="push"></div>

</div>

</body>
</html>