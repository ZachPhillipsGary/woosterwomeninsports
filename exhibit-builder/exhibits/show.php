<?php
  echo head(array(
      'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
      'bodyclass' => 'exhibits show'));
?>

<?php
  $title = metadata('exhibit_page', 'title');
?>
   <div class="dropdown">

    <button class="btn btn-default center-block dropdown-toggle" data-spy="affix" data-offset-top="197" type="button" id="exhibitMenu" data-toggle="dropdown">Menu<span class="caret"></span></button>
      <?php $menu = exhibit_builder_page_tree($exhibit, $exhibit_page); 
 $dropdownMenu = preg_replace('/(<ul\b[^><]*)>/i', '$1 role="menu" aria-labelledby="exhibitMenu" class="dropdown-menu">', $menu);
 echo $dropdownMenu;
      ?>

</div>
<div class="container exhibit">

  <div class="section-header col-md-8 col-md-offset-2">


    <small>-EXHIBIT-</small>
    <h1><?php echo $title ?></h1>
  </div><!-- end of section-header -->
</div><!-- end of container -->



<div class="container exhibit">
  <article>
    <div class="col-md-12">
      <div class="article-content">
        <?php exhibit_builder_render_exhibit_page(); ?>
      </div>
    </div>
       

  </article>

</div>

<div class="container">


  <nav>
    <ul id="exhibit-page-navigation" class="pager">
      <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
        <li id="exhibit-nav-prev" class="previous">
          <?php echo $prevLink; ?>
        </li>
      <?php endif; ?>
      <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
        <li id="exhibit-nav-next" class="next">
          <?php echo $nextLink; ?>
        </li>
      <?php endif; ?>
    </ul>

  </nav>
</div><!-- end of container -->




<?php echo foot(); ?>
