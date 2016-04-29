
<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<?php
  $title = metadata('exhibit', 'title');
  $description = metadata('exhibit', 'description', array('no_escape' => true));
  $credits = metadata('exhibit', 'credits');
  $tags = tag_string('exhibit', 'exhibits', '');
  $pageTree = exhibit_builder_page_tree();
?>
   <div class="dropdown">

    <button class="btn btn-default center-block dropdown-toggle" data-spy="affix" type="button" id="exhibitMenu" data-toggle="dropdown">Menu<span class="caret"></span></button>
      <?php $menu = exhibit_builder_page_nav();  echo $menu;
 $dropdownMenu = preg_replace('/(<ul\b[^><]*)>/i', '$1 role="menu" aria-labelledby="exhibitMenu" class="dropdown-menu">', $menu);
 echo $dropdownMenu;
      ?>

</div>
<div class="container exhibit">
  <div class="section-header col-md-10 col-md-offset-1">
    <small>-EXHIBITS SUMMARY-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->

  <article>
    <div class="col-md-8 col-md-offset-2">
      <div class="article-content">
     <!--   <?php echo exhibit_builder_page_nav(); ?> -->


        <?php echo $description; ?>
        <b>Credits</b>
        <p><?php echo $credits; ?></p>
        <b>Tags</b>
        <div id="tags-list"><?php echo $tags; ?></div>

      </div>
    </div>
    <nav id="exhibit-pages" >
      <p>Navigation</p>
      <?php echo $pageTree; ?>
    </nav>
  </article>




</div>


<?php echo foot(); ?>
