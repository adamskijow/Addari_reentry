<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" type="text/css" href="<?php print base_path() . path_to_theme() ?>/master.css"/>
  <?php print $styles; ?>
  <!--[if lt IE 7]>
    <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/fix-ie6.css";</style>
	<![endif]-->
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; if(!$mission && !$search_box && !$left && !$right && !$big_right) print ' sideFalse'; else print ' sideTrue '; print getSidebarInfo($mission, $search_box, $left, $right, $big_right); ?>" id="mainbody" >

<div id="container">

<div id="head">

<div id="hleft">

<div id="titles">
  <?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
 <div id="textcontainer">
  <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?></div>
</div>

</div>

<div id="hright">

    <div id="secondary-links">
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>

</div>

<div id="header_block">
<?php print $header ?>
</div>

</div>

</div><!--head-->

<div id="mast">

<div id="primary_menu_bar">
	        <?php if (isset($primary_links)) {  print menu_tree($menu_name = 'primary-links'); } ?>
</div>

<div id="wrap" >

<div id="postarea">
<?php if ($content_top): print $content_top; endif; ?>
<div id="postareainner">
 <?php if ($breadcrumb): print $breadcrumb; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<div id="h2title"><h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1></div>'; endif; ?>
		  
          <?php if ($tabs): print  $tabs .'</div>'; endif; ?>
          <?php if (isset($tabs2)): print $tabs2; endif; ?>
          <?php if ($help): print $help; endif; ?>
          <?php if ($messages): print $messages; endif; ?>
          <?php print $content ?>
</div>
<?php if ($content_bottom): print $content_bottom; endif; ?>
</div>

<?php if($mission || $search_box || $left || $right || $big_right) { ?>
<div id="sidearea">
<?php if ($mission): ?>
<div id="mission-block">

<?php print $mission ?>
</div>
<?php endif; ?>

<?php if ($search_box): ?><div id="search-block-main"><?php print $search_box ?></div><?php endif; ?>

<div id="sidebars" class="clear-block">

<?php if ($big_right): ?>
<div id="big_right" class="clear-block">
<?php print $big_right ?>
</div>
<?php endif;?>

<?php if ($left): ?>
<div id="left" class="clear-block">
<?php print $left ?>
</div>
<?php endif;?>

<?php if ($right): ?>
<div id="right" class="clear-block">
<?php print $right ?>
</div>
<?php endif;?>
</div><!--sidebars-->

</div>
<?php } ?>
<br style="clear:both;" />
</div>

</div>

<div id="footer"><?php if ($footer): ?> <div id="foot-block"><?php print $footer ?> </div><?php endif; ?><br/><?php if ($footer_message): ?> <?php print $footer_message ?> | <?php endif; ?> Powered by <a href="http://drupal.org/">Drupal</a>, <a href="http://www.worthapost.com/" title="Worthapost Drupal themes">Drupal Themes</a> </div>

</div> <!--container-->
  <?php print $closure ?>
</body>
</html>
